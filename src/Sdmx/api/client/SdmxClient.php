<?php

namespace Sdmx\api\client;


use Sdmx\api\entities\Dataflow;
use Sdmx\api\entities\DataflowStructure;
use Sdmx\api\entities\DsdIdentifier;
use Sdmx\api\entities\PortableTimeSeries;

interface SdmxClient
{
    /**
     * Gets all dataflows.
     * @return Dataflow[]
     */
    public function getDataflows();

    /**
     * Gets the dataflow information for a given dataflow.
     * @param string $dataflow
     * @param string $agency
     * @param string $version
     * @return Dataflow
     */
    public function getDataflow($dataflow, $agency, $version);

    /**
     * Gets the structure for a given dataflow.
     * @param DsdIdentifier $dsd
     * @param bool $full if true, for 2.1 providers it retrieves the full dsd, with all the codelists.
     * @return DataflowStructure
     */
    public function getDataflowStructure(DsdIdentifier $dsd, $full = false);

    /**
     * Gets all the codes from this provider for a given codelist.
     * @param string $codelist
     * @param string $agency
     * @param string $version
     * @return string[]
     */
    public function getCodes($codelist, $agency, $version);

    /**
     * @param Dataflow $dataflow The dataflow of the time series to be gathered
     * @param DataflowStructure $dsd The structure of the dataflow of the time series to be gathered
     * @param string $resource The id of the time series
     * @param array $options
     * ```php
     * $options = array(
     *      'startPeriod' => 'string', //Start time of the observations to be gathered
     *      'endPeriod' => 'string', //End time of the observations to be gathered
     *      'seriesKeysOnly' => 'boolean', //Flag for disabling data and attributes processing (usually for getting the only dataflow contents)
     *      'lastNObservations' => 'integer' //The last 'n' observations to return for each matched series.
     * )
     * ```
     * @return PortableTimeSeries[]
     */
    public function getTimeSeries(Dataflow $dataflow, DataflowStructure $dsd, $resource, array $options = array());


    /**
     * @param string $dataflow The dataflow of the time series to be gathered
     * @param string $agency The agency of the dataflow of the time series to be gathered
     * @param string $version The version of the dataflow of the time series to be gathered
     * @param string $resource The id of the time series
     * @param array $options
     * ```php
     * $options = array(
     *      'startPeriod' => 'string', //Start time of the observations to be gathered
     *      'endPeriod' => 'string', //End time of the observations to be gathered
     *      'seriesOnly' => 'boolean', //Flag for disabling data and attributes processing (usually for getting the only dataflow contents)
     *      'lastNObservations' => 'integer' //The last 'n' observations to return for each matched series.
     * )
     * ```
     * @return PortableTimeSeries[]
     */
    public function getTimeSeries2($dataflow, $agency, $version, $resource, array $options = array());
}