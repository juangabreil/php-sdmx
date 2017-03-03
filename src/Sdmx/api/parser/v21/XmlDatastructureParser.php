<?php

namespace Sdmx\api\parser\v21;


use Sdmx\api\entities\Codelist;
use Sdmx\api\entities\DataflowStructure;
use Sdmx\api\entities\Dimension;
use Sdmx\api\parser\DataStructureParser;
use SimpleXMLElement;

class XmlDataStructureParser implements DataStructureParser
{

    /**
     * @param string $data
     * @return DataflowStructure[]
     */
    public function parse($data)
    {
        $result = [];
        $xml = new SimpleXMLElement($data);

        $structures = $xml->xpath('//mes:Structure/mes:Structures/str:DataStructures/str:DataStructure');
        foreach ($structures as $structure) {
            $result[] = $this->parseStructure($structure);
        }

        return $result;
    }

    /**
     * @param SimpleXMLElement $structure
     * @return DataflowStructure
     */
    private function parseStructure(SimpleXMLElement $structure)
    {
        $flowStructure = new DataflowStructure();

        $this->fillMainData($structure, $flowStructure);
        $this->fillDimensionData($structure, $flowStructure);

        return $flowStructure;
    }

    /**
     * @param SimpleXMLElement $structure
     * @param DataflowStructure $flowStructure
     */
    private function fillMainData(SimpleXMLElement $structure, DataflowStructure $flowStructure)
    {
        $flowStructure->setAgency((string)$structure['agencyID']);
        $flowStructure->setId((string)$structure['id']);
        $flowStructure->setVersion((string)$structure['version']);
        $name = $structure->xpath('.//com:Name[@xml:lang="en"]');
        if (count($name) > 0) {
            $flowStructure->setName((string)$name[0]);
        }
    }

    /**
     * @param SimpleXMLElement $structure
     * @param DataflowStructure $flowStructure
     */
    private function fillDimensionData(SimpleXMLElement $structure, DataflowStructure $flowStructure)
    {
        $dimensions = $structure->xpath('.//str:DataStructureComponents/str:DimensionList/str:Dimension');
        $position = 0;
        foreach ($dimensions as $dimension) {
            $flowStructure->setDimension($this->parseDimension($dimension, ++$position));
        }
        $flowStructure->setTimeDimension($this->parseTimeDimension($structure));
    }

    /**
     * @param SimpleXMLElement $dimension
     * @param int $position
     * @return Dimension
     */
    private function parseDimension(SimpleXMLElement $dimension, $position)
    {
        $result = new Dimension();

        $result->setId((string)$dimension['id']);
        $result->setCodelist($this->parseCodeList($dimension));
        $result->setName($this->getDimensionName($dimension));
        $result->setPosition($position);

        return $result;
    }

    /**
     * @param SimpleXMLElement $dimension
     * @return Codelist
     */
    private function parseCodeList(SimpleXMLElement $dimension)
    {
        $localRepresentation = $dimension->xpath('.//str:LocalRepresentation/str:Enumeration/Ref');

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
     * @return string
     */
    private function getDimensionName(SimpleXMLElement $dimension)
    {
        $concept = $dimension->xpath('.//str:ConceptIdentity/Ref');

        if (count($concept) == 0) {
            return '';
        }
        $concept = $concept[0];

        return (string)$concept['id'];
    }

    /**
     * @param SimpleXMLElement $structure
     * @return string
     */
    private function parseTimeDimension(SimpleXMLElement $structure)
    {
        $timeDimension = $structure->xpath('.//str:DataStructureComponents/str:DimensionList/str:TimeDimension');

        if (count($timeDimension) == 0) {
            return '';
        }

        $timeDimension = $timeDimension[0];

        return (string)$timeDimension['id'];
    }
}