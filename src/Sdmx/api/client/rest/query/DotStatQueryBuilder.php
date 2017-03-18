<?php

namespace Sdmx\api\client\rest\query;


use Sdmx\api\entities\Dataflow;
use Sdmx\api\exceptions\UnsupportedOperationException;
use Sdmx\util\StringUtils;

class DotStatQueryBuilder implements SdmxQueryBuilder
{

    const COMPACT_FORMAT = 'compact_v2';
    const FORMAT_PARAM = 'format';

    /**
     * @var string $baseUrl
     */
    private $baseUrl;

    /**
     * @var boolean $supportsCompactFormat
     */
    private $supportsCompactFormat;

    /**
     * DotStatQueryBuilder constructor.
     * @param string $baseUrl
     * @param boolean $supportsCompactFormat
     */
    public function __construct($baseUrl, $supportsCompactFormat)
    {
        $this->baseUrl = $baseUrl;
        $this->supportsCompactFormat = $supportsCompactFormat;
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
        throw new UnsupportedOperationException('This method is not supported by dot stat api\'s');
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
        $query = StringUtils::joinArrayElements([$this->baseUrl, 'GetData', $dataflow->getId(), $resource], '/');
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
        if ($this->supportsCompactFormat) {
            $options[self::FORMAT_PARAM] = self::COMPACT_FORMAT;
        }
        if (count($options) > 0) {
            $params = join('&', array_map(function ($key, $value) { return "$key=$value"; }, array_keys($options), $options));
            $queryString = '?' . $params;
        }
        return $queryString;
    }
}