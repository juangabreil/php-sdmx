<?php

namespace Sdmx\api\client\rest\query;


use Sdmx\api\entities\Dataflow;

interface SdmxQueryBuilder
{
    const START_PERIOD = 'startPeriod';
    const END_PERIOD= 'endPeriod';
    const SERIES_ONLY = 'seriesOnly';
    const LAST_N_OBSERVATIONS = 'lastNObservations';

    const SERIES_KEY_ONLY = 'serieskeysonly';
    const DETAIL_PARAM = 'detail';

    /**
     * @param string $agency
     * @param string $dataflow
     * @param string $version
     * @return string
     */
    public function getDataflowQuery($agency, $dataflow, $version);

    /**
     * @param string $id
     * @param string $agency
     * @param string $version
     * @param boolean $full
     * @return string
     */
    public function getDsdQuery($id, $agency, $version, $full);

    /**
     * @param string $codelist
     * @param string $agency
     * @param string $version
     * @return string
     */
    public function getCodelistQuery($codelist, $agency, $version);

    /**
     * @param Dataflow $dataflow
     * @param string $resource
     * @param array $options
     * ```php
     * $options = array(
     *      'startPeriod' => 'string', //Start time of the observations to be gathered
     *      'endPeriod' => 'string', //End time of the observations to be gathered
     *      'seriesOnly' => 'boolean', //Flag for disabling data and attributes processing (usually for getting the only dataflow contents)
     *      'lastNObservations' => 'integer' //The last 'n' observations to return for each matched series.
     * )
     * ```
     * @return string
     */
    public function getDataQuery(Dataflow $dataflow, $resource, array $options = array());
}