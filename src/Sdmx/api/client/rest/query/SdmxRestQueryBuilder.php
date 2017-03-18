<?php

namespace Sdmx\api\client\rest\query;


use Sdmx\api\entities\Dataflow;
use Sdmx\util\StringUtils;

class SdmxRestQueryBuilder implements SdmxQueryBuilder
{
    /**
     * @var string $baseUrl
     */
    private $baseUrl;

    /**
     * QueryBuilder constructor.
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
        $dataflowKey = StringUtils::joinArrayElements([$agency, $dataflow, $version], '/');

        return StringUtils::joinArrayElements([$this->baseUrl, 'dataflow', $dataflowKey], '/');
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
        $dsdKey = StringUtils::joinArrayElements([$agency, $id, $version == '' ? null : $version], '/');
        $queryString = $full ? '?references=children' : '';

        return StringUtils::joinArrayElements([$this->baseUrl, 'datastructure', $dsdKey], '/') . $queryString;
    }

    /**
     * @param string $codelist
     * @param string $agency
     * @param string $version
     * @return string
     */
    public function getCodelistQuery($codelist, $agency, $version)
    {
        $codelistKey = StringUtils::joinArrayElements([$agency, $codelist, $version], '/');

        return StringUtils::joinArrayElements([$this->baseUrl, 'codelist', $codelistKey], '/');
    }

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
    public function getDataQuery(Dataflow $dataflow, $resource, array $options = array())
    {
        $query = StringUtils::joinArrayElements([$this->baseUrl, 'data', $dataflow->getFullIdentifier(), $resource], '/');
        $queryString = $this->getDataQueryString($options);

        return $query . $queryString;
    }

    /**
     * @param array $options
     * @return string
     */
    protected function getDataQueryString(array $options)
    {
        $queryString = '';
        if (count($options) > 0) {
            if(array_key_exists(SdmxQueryBuilder::SERIES_ONLY, $options)){
                unset($options[SdmxQueryBuilder::SERIES_ONLY]);
                $options[SdmxQueryBuilder::DETAIL_PARAM] = SdmxQueryBuilder::SERIES_KEY_ONLY;
            }
            $params = join('&', array_map(function ($key, $value) { return "$key=$value"; }, array_keys($options), $options));
            $queryString = '?'.$params;
        }
        return $queryString;
    }
}