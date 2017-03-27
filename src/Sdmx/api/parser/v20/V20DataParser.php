<?php

namespace Sdmx\api\parser\v20;


use Sdmx\api\entities\DataflowStructure;
use Sdmx\api\entities\PortableTimeSeries;
use Sdmx\api\parser\DataParser;
use Sdmx\api\parser\ParserUtils;
use SimpleXMLElement;

class V20DataParser implements DataParser
{

    /**
     * @param string $data
     * @param DataflowStructure $dsd
     * @param string $dataflow
     * @param boolean $containsData
     * @return PortableTimeSeries[]
     */
    public function parse($data, DataflowStructure $dsd, $dataflow, $containsData)
    {
        $dataWoNs = ParserUtils::removeNamespaces($data);
        $xml = new SimpleXMLElement($dataWoNs);
        $result = [];
        $series = $xml->xpath('//Series');
        foreach ($series as $seriesLine) {
            $result[] = $this->parseSeries($seriesLine, $dsd, $dataflow, $containsData);
        }

        return $result;
    }

    /**
     * @param SimpleXMLElement $series
     * @param DataflowStructure $dsd
     * @param string $dataflow
     * @param boolean $containsData
     * @return PortableTimeSeries
     */
    private function parseSeries($series, $dsd, $dataflow, $containsData)
    {
        $portableSeries = new PortableTimeSeries();
        $portableSeries->setDataflow($dataflow);

        $this->parseDimensions($series, $portableSeries, $dsd);
        $this->parseAttributes($series, $portableSeries);

        if($containsData){
            $this->parseObservations($series, $portableSeries);
        }

        return $portableSeries;
    }

    /**
     * @param SimpleXMLElement $series
     * @param PortableTimeSeries $portableSeries
     * @param DataflowStructure $dsd
     */
    private function parseDimensions($series, $portableSeries, $dsd)
    {
        $dimensions = [];
        $dimensionValues = $series->xpath('./SeriesKey/Value');
        foreach ($dimensionValues as $dim) {
            $id = (string)$dim['concept'];
            $value = (string)$dim['value'];
            if ($id === 'FREQ' || $id === 'FREQUENCY') {
                $portableSeries->setFrequency($value);
            }
            if ($dsd->hasDimension($id)) {
                $dimensions[$dsd->getDimensionPosition($id) - 1] = "$id=$value";
            }
        }

        $portableSeries->setDimensions($dimensions);
    }

    /**
     * @param SimpleXMLElement $series
     * @param PortableTimeSeries $portableSeries
     */
    private function parseAttributes($series, $portableSeries)
    {
        $attributes = $series->xpath('.//Attributes/Value');
        foreach ($attributes as $attr) {
            $portableSeries->addAttribute((string)$attr['concept'], (string)$attr['value']);
        }
    }

    /**
     * @param SimpleXMLElement $series
     * @param PortableTimeSeries $portableSeries
     */
    private function parseObservations($series, $portableSeries)
    {
        $observations = $series->xpath('./Obs');
        foreach ($observations as $observation) {
            $time = (string)$observation->xpath('./Time')[0];
            $obsValue = (string)$observation->xpath('./ObsValue')[0]['value'];
            $attributes = [];
            foreach ($observation->xpath('./Value') as $value) {
                $attributes[(string)$value['concept']] = (string)$value['value'];
            }
            $portableSeries->addObservation($obsValue, $time, $attributes);
        }
    }
}