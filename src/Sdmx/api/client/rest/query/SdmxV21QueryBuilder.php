<?php

namespace Sdmx\api\client\rest\query;


use Sdmx\api\entities\Dataflow;
use Sdmx\util\StringUtils;

class SdmxV21QueryBuilder implements QueryBuilder
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
     *      'seriesKeyOnly' => 'boolean', //Flag for disabling data and attributes processing (usually for getting the only dataflow contents)
     *      'lastNObservations' => 'integer' //The last 'n' observations to return for each matched series.
     * )
     * ```
     * @return string
     */
    public function getDataQuery(Dataflow $dataflow, $resource, array $options = array())
    {
        $query = StringUtils::joinArrayElements([$this->baseUrl, 'data', $dataflow->getFullIdentifier(), $resource], '/');
        $queryString = '';
        if (count($options) > 0) {
            $preparedOptions = $this->prepareOptions($options);
            $queryString = '?' . join('&', array_map(function ($key, $value) {
                    return "$key=$value";
                }, array_keys($preparedOptions), $preparedOptions));
        }

        return $query . $queryString;
    }

    /**
     * @param array $options
     * @return array
     */
    private function prepareOptions(array $options)
    {
        $copy = [];
        foreach ($options as $key => $value) {
            $copy[$key] = $value;
        }

        if (array_key_exists('seriesKeyOnly', $copy) && $copy['seriesKeyOnly'] === true) {
            unset($copy['seriesKeyOnly']);
            $copy['detail'] = 'serieskeyonly';
        }

        return $copy;
    }
}