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

        $dataSet = $xml->xpath('//message:StructureSpecificData/message:DataSet')[0];
        $action = (string)$dataSet[self::ACTION];
        $validFrom = (string)$dataSet[self::VALID_FROM];
        $validTo = (string)$dataSet[self::VALID_TO];

        $series = $dataSet->xpath('.//ns1:Series');
        foreach ($series as $seriesLine) {
            $result[] = $this->parseSeriesLine($seriesLine, $dsd, $dataflow, $action, $validFrom, $validTo);
        }

        return $result;
    }

    /**
     * @param SimpleXMLElement $seriesLine
     * @param DataflowStructure $dsd
     * @param string $dataflow
     * @param string $action
     * @param string $validFrom
     * @param string $validTo
     * @return PortableTimeSeries
     */
    private function parseSeriesLine(SimpleXMLElement $seriesLine, DataflowStructure $dsd, $dataflow, $action, $validFrom, $validTo)
    {
        $result = new PortableTimeSeries();

        $result->setDataflow($dataflow);

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

        return $result;
    }
}