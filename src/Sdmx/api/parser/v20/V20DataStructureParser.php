<?php

namespace Sdmx\api\parser\v20;


use Sdmx\api\entities\Codelist;
use Sdmx\api\entities\DataflowStructure;
use Sdmx\api\entities\Dimension;
use Sdmx\api\parser\CodelistParser;
use Sdmx\api\parser\DataStructureParser;
use Sdmx\api\parser\ParserUtils;
use SimpleXMLElement;

class V20DataStructureParser implements DataStructureParser
{

    /**
     * @var CodelistParser $codelistParser
     */
    private $codelistParser;

    /**
     * V20DataStructureParser constructor.
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
        $xml = new SimpleXMLElement(ParserUtils::removeNamespaces($data));

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
        $codelists = $xml->xpath('/Structure/CodeLists/CodeList');
        $result = [];
        foreach ($codelists as $codelist) {
            $codelistName = $this->getCodelistName($codelist);
            $result[$codelistName] = $this->codelistParser->parseCodesFromNode($codelist);
        }

        return $result;
    }

    /**
     * @param $codelist
     * @return string
     */
    private function getCodelistName($codelist)
    {
        $agency = (string)$codelist['agencyID'];
        $id = (string)$codelist['id'];
        $codelistName = $agency . '/' . $id;
        return $codelistName;
    }

    /**
     * @param SimpleXMLElement $xml
     * @return string[]
     */
    private function parseConcepts(SimpleXMLElement $xml)
    {
        $concepts = $xml->xpath('/Structure/Concepts/Concept');
        $result = [];

        foreach ($concepts as $concept) {
            $id = (string)$concept['id'];
            $agency = (string)$concept['agencyID'];
            $key = "$agency/$id";
            $result[$key] = $this->getConceptName($concept);
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
        $families = $xml->xpath('/Structure/KeyFamilies/KeyFamily');

        foreach ($families as $family) {
            $result[] = $this->parseStructure($family, $codelists, $concepts);
        }

        return $result;
    }

    /**
     * @param SimpleXMLElement $family
     * @param array $codelists
     * @param array $concepts
     * @return DataflowStructure
     */
    private function parseStructure(SimpleXMLElement $family, array $codelists, array $concepts)
    {
        $structure = new DataflowStructure();

        $this->fillDsMainData($family, $structure);
        $this->fillDsDimensionData($family, $structure, $codelists, $concepts);
        $this->fillMeasure($family, $structure);

        return $structure;
    }

    /**
     * @param SimpleXMLElement $family
     * @param DataflowStructure $structure
     */
    private function fillDsMainData(SimpleXMLElement $family, DataflowStructure $structure)
    {
        $structure->setId((string)$family['id']);
        $structure->setAgency((string)$family['agencyID']);

        $name = $family->xpath('./Name[@lang="en"]');
        if (count($name) > 0) {
            $structure->setName((string)$name[0]);
        }
    }

    /**
     * @param SimpleXMLElement $family
     * @param DataflowStructure $flowStructure
     * @param array $codelists
     * @param array $concepts
     */
    private function fillDsDimensionData(SimpleXMLElement $family, DataflowStructure $flowStructure, array $codelists, array $concepts)
    {
        $dimensions = $family->xpath('./Components/Dimension');
        $position = 0;
        foreach ($dimensions as $dimension) {
            $parsedDimension = $this->parseDimension($dimension, $flowStructure->getAgency(), $concepts, ++$position);
            $codelist = $parsedDimension->getCodelist();
            $codelistIdentifier = $codelist->getFullIdentifier();

            if (array_key_exists($codelistIdentifier, $codelists)) {
                $codelist->setCodes($codelists[$codelistIdentifier]);
            }

            $flowStructure->setDimension($parsedDimension);
        }
        $flowStructure->setTimeDimension($this->parseTimeDimension($family));
    }

    /**
     * @param SimpleXMLElement $dimension
     * @param string $agency
     * @param array $concepts
     * @param int $position
     * @return Dimension
     */
    private function parseDimension(SimpleXMLElement $dimension, $agency, array $concepts, $position)
    {
        $result = new Dimension();

        $result->setId((string)$dimension['conceptRef']);
        $result->setName($this->getDimensionName($result->getId(), $agency, $concepts));
        $result->setCodelist($this->parseDimensionCodeList($dimension, $agency));

        $result->setPosition($position);

        return $result;
    }

    /**
     * @param string $id
     * @param string $agency
     * @param array $concepts
     * @return string
     */
    private function getDimensionName($id, $agency, array $concepts)
    {
        $conceptName = "$agency/$id";
        return array_key_exists($conceptName, $concepts) ? $concepts[$conceptName] : $id;
    }

    /**
     * @param SimpleXMLElement $dimension
     * @param string $agency
     * @return Codelist
     */
    private function parseDimensionCodeList(SimpleXMLElement $dimension, $agency)
    {
        $codelist = new Codelist();

        $codelist->setId((string)$dimension['codelist']);

        if ($dimension['codelistAgency']) {
            $codelist->setAgency((string)$dimension['codelistAgency']);
        } else {
            $codelist->setAgency($agency);
        }

        return $codelist;
    }

    /**
     * @param SimpleXMLElement $family
     * @return string
     */
    private function parseTimeDimension(SimpleXMLElement $family)
    {
        $timeDimension = $family->xpath('./Components/TimeDimension');

        if (count($timeDimension) == 0) {
            return '';
        }

        $timeDimension = $timeDimension[0];

        return (string)$timeDimension['conceptRef'];
    }

    /**
     * @param SimpleXMLElement $family
     * @param DataflowStructure $structure
     */
    private function fillMeasure($family, $structure)
    {
        $measure = $family->xpath('./Components/PrimaryMeasure');

        if (count($measure) > 0) {
            $measure = $measure[0];
            $structure->setMeasure((string)$measure['conceptRef']);
        }
    }
}