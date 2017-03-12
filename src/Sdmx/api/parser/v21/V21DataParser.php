<?php

namespace Sdmx\api\parser\v21;


use Sdmx\api\entities\DataflowStructure;
use Sdmx\api\entities\PortableTimeSeries;
use Sdmx\api\parser\DataParser;
use SimpleXMLElement;

class V21DataParser implements DataParser
{
    const VALID_TO = 'validToDate';
    const VALID_FROM = 'validFromDate';
    const ACTION = 'action';

    /**
     * @param string $data
     * @param DataflowStructure $dsd
     * @param string $dataflow
     * @param boolean $containsData
     * @return PortableTimeSeries[]
     */
    public function parse($data, DataflowStructure $dsd, $dataflow, $containsData)
    {
        $xml = new SimpleXMLElement($data);
        $result = [];

        $dataSet = $xml->xpath('/message:StructureSpecificData/message:DataSet')[0];
        $action = (string)$dataSet[self::ACTION];
        $validFrom = (string)$dataSet[self::VALID_FROM];
        $validTo = (string)$dataSet[self::VALID_TO];

        $series = $dataSet->xpath('./ns1:Series');
        foreach ($series as $seriesLine) {
            $result[] = $this->parseSeriesLine($seriesLine, $dsd, $dataflow, $containsData, $action, $validFrom, $validTo);
        }

        return $result;
    }

    /**
     * @param SimpleXMLElement $seriesLine
     * @param DataflowStructure $dsd
     * @param string $dataflow
     * @param boolean $containsData
     * @param string $action
     * @param string $validFrom
     * @param string $validTo
     * @return PortableTimeSeries
     */
    private function parseSeriesLine(SimpleXMLElement $seriesLine, DataflowStructure $dsd, $dataflow, $containsData, $action, $validFrom, $validTo)
    {
        $result = new PortableTimeSeries();

        $result->setDataflow($dataflow);

        $this->setMetadata($seriesLine, $dsd, $action, $validFrom, $validTo, $result);

        if ($containsData) {
            $observations = $seriesLine->xpath('./ns1:Obs');
            foreach ($observations as $observation) {
                $this->processObservation($dsd, $observation, $result);
            }
        }

        return $result;
    }

    /**
     * @param SimpleXMLElement $seriesLine
     * @param DataflowStructure $dsd
     * @param $action
     * @param $validFrom
     * @param $validTo
     * @param PortableTimeSeries $result
     */
    private function setMetadata(SimpleXMLElement $seriesLine, DataflowStructure $dsd, $action, $validFrom, $validTo, PortableTimeSeries $result)
    {
        if ($action != null) {
            $result->addAttribute(self::ACTION, $action);
        }

        if ($validFrom != null) {
            $result->addAttribute(self::VALID_FROM, $validFrom);
        }

        if ($validTo != null) {
            $result->addAttribute(self::VALID_TO, $validTo);
        }

        $dimensions = [];
        foreach ($seriesLine->attributes() as $attribute) {
            /**
             * @var SimpleXMLElement $attribute
             */
            $id = $attribute->getName();
            $value = (string)$attribute;

            if ($dsd->hasDimension($id)) {
                $dimensions[$dsd->getDimensionPosition($id) - 1] = "$id=$value";
                $idUpper = mb_strtoupper($id);
                if ($idUpper === 'FREQ' || $idUpper === 'FREQUENCY') {
                    $result->setFrequency($value);
                }
            } else {
                $result->addAttribute($id, $value);
            }

            $result->setDimensions($dimensions);
        }
    }

    /**
     * @param DataflowStructure $dsd
     * @param SimpleXMLElement $observation
     * @param PortableTimeSeries $result
     */
    private function processObservation(DataflowStructure $dsd, SimpleXMLElement $observation, PortableTimeSeries $result)
    {
        $time = '';
        $obsVal = '';
        $obsAttr = [];

        foreach ($observation->attributes() as $attribute) {
            /**
             * @var SimpleXMLElement $attribute
             */
            $id = $attribute->getName();
            $value = (string)$attribute;

            if ($id === $dsd->getTimeDimension()) {
                $time = $value;
            } else if ($id === 'TIME' && $time == null) {
                $time = $value;
            } else if ($id === $dsd->getMeasure()) {
                $obsVal = $value;
            } else {
                $obsAttr[$id] = $value;
            }
        }

        $result->addObservation($obsVal, $time, $obsAttr);
    }
}