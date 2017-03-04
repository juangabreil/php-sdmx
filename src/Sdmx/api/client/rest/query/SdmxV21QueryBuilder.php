<?php

namespace Sdmx\api\client\rest\query;


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
}