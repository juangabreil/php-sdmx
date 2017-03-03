<?php

namespace Sdmx\api\client\rest\query;


use Sdmx\util\StringUtils;

class SdmxQueryBuilder implements QueryBuilder
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
        $dataflowKey = StringUtils::joinArrayElements([$agency, $id, $version == '' ? null : $version], '/');
        $queryString = $full ? '?references=children' : '';

        return StringUtils::joinArrayElements([$this->baseUrl, 'datastructure', $dataflowKey], '/') . $queryString;
    }
}