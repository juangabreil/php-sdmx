<?php

namespace Sdmx\api\client\rest\query;


use Sdmx\api\entities\Dataflow;
use Sdmx\util\StringUtils;

class DotStatQueryBuilder implements SdmxQueryBuilder
{

    /**
     * @var string $baseUrl
     */
    private $baseUrl;

    /**
     * DotStatQueryBuilder constructor.
     * @param string $baseUrl
     */
    public function __construct($baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }


    /**
     * @param string $agency
     * @param string $dataflow
     * @param string $version
     * @return string
     */
    public function getDataflowQuery($agency, $dataflow, $version)
    {
        return $this->getDsdQuery($dataflow, $agency, $version, false);
    }

    /**
     * @param string $id
     * @param string $agency
     * @param string $version
     * @param boolean $full
     * @return string
     */
    public function getDsdQuery($id, $agency, $version, $full)
    {
        return StringUtils::joinArrayElements([$this->baseUrl, 'GetDataStructure', $id], '/');
    }

    /**
     * @param string $codelist
     * @param string $agency
     * @param string $version
     * @return string
     */
    public function getCodelistQuery($codelist, $agency, $version)
    {
        // TODO: Implement getCodelistQuery() method.
    }

    /**
     * @param Dataflow $dataflow
     * @param string $resource
     * @param array $options
     * ```php
     * $options = array(
     *      'startPeriod' => 'string', //Start time of the observations to be gathered
     *      'endPeriod' => 'string', //End time of the observations to be gathered
     *      'seriesKeysOnly' => 'boolean', //Flag for disabling data and attributes processing (usually for getting the only dataflow contents)
     *      'lastNObservations' => 'integer' //The last 'n' observations to return for each matched series.
     * )
     * ```
     * @return string
     */
    public function getDataQuery(Dataflow $dataflow, $resource, array $options = array())
    {
        // TODO: Implement getDataQuery() method.
    }
}