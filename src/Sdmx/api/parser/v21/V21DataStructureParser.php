<?php

namespace Sdmx\api\parser\v21;


use Sdmx\api\entities\Codelist;
use Sdmx\api\entities\DataflowStructure;
use Sdmx\api\entities\Dimension;
use Sdmx\api\parser\CodelistParser;
use Sdmx\api\parser\DataStructureParser;
use Sdmx\api\parser\ParserUtils;
use SimpleXMLElement;

class V21DataStructureParser implements DataStructureParser
{

    /**
     * @var CodelistParser $codelistParser
     */
    private $codelistParser;

    /**
     * V21DataStructureParser constructor.
     * @param CodelistParser $codelistParser
     */
    public function __construct(CodelistParser $codelistParser)
    {
        $this->codelistParser = $codelistParser;
    }


    /**
     * @param string $data
     * @return DataflowStructure[]
     */
    public function parse($data)
    {
        $dataWoNs = ParserUtils::removeNamespaces($data);
        $xml = new SimpleXMLElement($dataWoNs);

        $codelists = $this->parseCodelists($xml);
        $concepts = $this->parseConcepts($xml);

        return $this->parseDataStructures($xml, $codelists, $concepts);
    }

    /**
     * @param SimpleXMLElement $xml
     * @return string[]
     */
    private function parseCodelists(SimpleXMLElement $xml)
    {
        $codelists = $xml->xpath('/Structure/Structures/Codelists/Codelist');
        $result = [];
        foreach ($codelists as $codelist) {
            $codelistName = $this->getCodelistName($codelist);
            $result[$codelistName] = $this->codelistParser->parseCodesFromNode($codelist);
        }

        return $result;
    }

    /**
     * @param SimpleXMLElement $xml
     * @return string[]
     */
    private function parseConcepts(SimpleXMLElement $xml)
    {
        $conceptSchemes = $xml->xpath('/Structure/Structures/Concepts/ConceptScheme');
        $result = [];

        foreach ($conceptSchemes as $conceptScheme) {
            $version = (string)$conceptScheme['version'];
            $agency = (string)$conceptScheme['agencyID'];
            $concepts = $conceptScheme->xpath('./Concept');

            foreach ($concepts as $concept) {
                $id = (string)$concept['id'];
                $conceptName = $agency . '/' . $id . '/' . $version;
                $result[$conceptName] = $this->getConceptName($concept);
            }
        }

        return $result;
    }

    /**
     * @param SimpleXMLElement $concept
     * @return string
     */
    private function getConceptName(SimpleXMLElement $concept)
    {
        $name = $concept->xpath('./Name[@lang="en"]');

        return count($name) > 0 ? (string)$name[0] : '';
    }

    /**
     * @param SimpleXMLElement $xml
     * @param array $codelists
     * @param array $concepts
     * @return DataflowStructure[]
     */
    private function parseDataStructures(SimpleXMLElement $xml, array $codelists, array $concepts)
    {
        $result = [];

        $structures = $xml->xpath('/Structure/Structures/DataStructures/DataStructure');
        foreach ($structures as $structure) {
            $result[] = $this->parseDataStructure($structure, $codelists, $concepts);
        }

        return $result;
    }

    /**
     * @param SimpleXMLElement $structure
     * @param array $codelists
     * @param array $concepts
     * @return DataflowStructure
     */
    private function parseDataStructure(SimpleXMLElement $structure, array $codelists, array $concepts)
    {
        $flowStructure = new DataflowStructure();

        $this->fillDsMainData($structure, $flowStructure);
        $this->fillDsDimensionData($structure, $flowStructure, $codelists, $concepts);

        return $flowStructure;
    }

    /**
     * @param SimpleXMLElement $structure
     * @param DataflowStructure $flowStructure
     */
    private function fillDsMainData(SimpleXMLElement $structure, DataflowStructure $flowStructure)
    {
        $flowStructure->setAgency((string)$structure['agencyID']);
        $flowStructure->setId((string)$structure['id']);
        $flowStructure->setVersion((string)$structure['version']);
        $name = $structure->xpath('./Name[@lang="en"]');
        if (count($name) > 0) {
            $flowStructure->setName((string)$name[0]);
        }
    }

    /**
     * @param SimpleXMLElement $structure
     * @param DataflowStructure $flowStructure
     * @param array $codelists
     * @param array $concepts
     */
    private function fillDsDimensionData(SimpleXMLElement $structure, DataflowStructure $flowStructure, array $codelists, array $concepts)
    {
        $dimensions = $structure->xpath('./DataStructureComponents/DimensionList/Dimension');
        $position = 0;
        foreach ($dimensions as $dimension) {
            $parsedDimension = $this->parseDimension($dimension, $concepts, ++$position);
            $codelist = $parsedDimension->getCodelist();
            $codelistIdentifier = $codelist->getFullIdentifier();

            if (array_key_exists($codelistIdentifier, $codelists)) {
                $codelist->setCodes($codelists[$codelistIdentifier]);
            }

            $flowStructure->setDimension($parsedDimension);
        }
        $flowStructure->setTimeDimension($this->parseTimeDimension($structure));
    }

    /**
     * @param SimpleXMLElement $dimension
     * @param array $concepts
     * @param int $position
     * @return Dimension
     */
    private function parseDimension(SimpleXMLElement $dimension, array $concepts, $position)
    {
        $result = new Dimension();

        $result->setId((string)$dimension['id']);
        $result->setCodelist($this->parseDimensionCodeList($dimension));
        $result->setName($this->getDimensionName($dimension, $concepts));
        $result->setPosition($position);

        return $result;
    }

    /**
     * @param SimpleXMLElement $dimension
     * @return Codelist
     */
    private function parseDimensionCodeList(SimpleXMLElement $dimension)
    {
        $localRepresentation = $dimension->xpath('./LocalRepresentation/Enumeration/Ref');

        if (count($localRepresentation) == 0) {
            return null;
        }

        $localRepresentation = $localRepresentation[0];
        $codelist = new Codelist();
        $codelist->setId((string)$localRepresentation['id']);
        $codelist->setAgency((string)$localRepresentation['agencyID']);
        $codelist->setVersion((string)$localRepresentation['version']);

        return $codelist;
    }

    /**
     * @param SimpleXMLElement $dimension
     * @param array $concepts
     * @return string
     */
    private function getDimensionName(SimpleXMLElement $dimension, array $concepts)
    {
        $concept = $dimension->xpath('./ConceptIdentity/Ref');

        if (count($concept) == 0) {
            return '';
        }
        $concept = $concept[0];
        $id = (string)$concept['id'];
        $agency = (string)$concept['agencyID'];
        $version = (string)$concept['maintainableParentVersion'];
        $conceptName = $agency . '/' . $id . '/' . $version;

        return array_key_exists($conceptName, $concepts) ? $concepts[$conceptName] : $id;
    }

    /**
     * @param SimpleXMLElement $structure
     * @return string
     */
    private function parseTimeDimension(SimpleXMLElement $structure)
    {
        $timeDimension = $structure->xpath('./DataStructureComponents/DimensionList/TimeDimension');

        if (count($timeDimension) == 0) {
            return '';
        }

        $timeDimension = $timeDimension[0];

        return (string)$timeDimension['id'];
    }

    /**
     * @param $codelist
     * @return string
     */
    private function getCodelistName($codelist)
    {
        $agency = (string)$codelist['agencyID'];
        $id = (string)$codelist['id'];
        $version = (string)$codelist['version'];
        $codelistName = $agency . '/' . $id . '/' . $version;
        return $codelistName;
    }
}