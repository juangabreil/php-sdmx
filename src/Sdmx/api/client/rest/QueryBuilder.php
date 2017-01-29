<?php

namespace Sdmx\api\client\rest;


use Sdmx\util\StringUtils;

class QueryBuilder
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
     * @param string $dataflow
     * @param string $agency
     * @param string $version
     * @return string
     */
    public function getDataflowQuery($dataflow, $agency, $version)
    {
        $dataflowKey = StringUtils::joinArrayElements([$agency, $dataflow, $version], '/');

        return StringUtils::joinArrayElements([$this->baseUrl, 'dataflow', $dataflowKey], '/');
    }


}