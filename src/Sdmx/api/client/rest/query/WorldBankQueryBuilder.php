<?php

namespace Sdmx\api\client\rest\query;


use Sdmx\api\entities\Dataflow;

class WorldBankQueryBuilder extends DotStatQueryBuilder
{

    /**
     * WorldBankQueryBuilder constructor.
     * @param string $baseUrl
     */
    public function __construct($baseUrl)
    {
        parent::__construct($baseUrl, false);
    }

    public function getDsdQuery($id, $agency, $version, $full)
    {
        return "$this->baseUrl/KeyFamily?id=$id";
    }

    /**
     * @param Dataflow $dataflow
     * @param string $resource
     * @param array $options
     * ```php
     * $options = array(
     *      'startPeriod' => 'string', //Start time of the observations to be gathered
     *      'endPeriod' => 'string', //End time of the observations to be gathered
     * )
     * ```
     * @return string
     */
    public function getDataQuery(Dataflow $dataflow, $resource, array $options = array())
    {
        return $this->doGetDataQuery($dataflow, $this->fixKey($resource), $options, 'v2/data');
    }

    /**
     * @param $resource
     * @return string
     */
    private function fixKey($resource)
    {
        // the WB provider is BETA and it handles data queries in an unconventional way
        // WDI : freq.series.area  --> area.series
        $items = explode('\\.', $resource);
        if(count($items) !== 3){
            return $resource;
        }
        return "$items[2].$items[1]";
    }


}