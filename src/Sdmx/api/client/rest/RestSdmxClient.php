<?php

namespace Sdmx\api\client\rest;


use Requests;
use Sdmx\api\client\SdmxClient;
use Sdmx\api\entities\Dataflow;
use Sdmx\api\entities\DataflowStructure;
use Sdmx\api\entities\DsdIdentifier;

class RestSdmxClient implements SdmxClient
{
    /**
     * @const ALL_AGENCIES
     */
    const ALL_AGENCIES = 'all';

    /**
     * @const ALL_FLOWS
     */
    const ALL_FLOWS = 'all';

    /**
     * @const LATEST_VERSION
     */
    const LATEST_VERSION = 'latest';

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var QueryBuilder
     */
    private $queryBuilder;

    /**
     * @var bool $supportsCompression
     */
    private $supportsCompression;

    /**
     * RestSdmxClient constructor.
     * @param string $name
     * @param QueryBuilder $queryBuilder
     * @param bool $supportsCompression
     */
    public function __construct($name, QueryBuilder $queryBuilder, $supportsCompression)
    {
        $this->name = $name;
        $this->queryBuilder = $queryBuilder;
        $this->supportsCompression = $supportsCompression;
    }

    /**
     * Gets all dataflows.
     * @return array[string]Dataflow
     */
    public function getDataflows()
    {
        $url = $this->queryBuilder->getDataflowQuery(self::ALL_FLOWS, self::ALL_AGENCIES, self::LATEST_VERSION);
        $response = Requests::get($url);
    }

    /**
     * Gets the dataflow information for a given dataflow.
     * @param string $dataflow
     * @param string $agency
     * @param string $version
     * @return Dataflow
     */
    public function getDataflow($dataflow, $agency, $version)
    {
        // TODO: Implement getDataflow() method.
    }

    /**
     * Gets the structure for a given dataflow.
     * @param DsdIdentifier $dsd
     * @param bool $full if true, for 2.1 providers it retrieves the full dsd, with all the codelists.
     * @return DataflowStructure
     */
    public function getDataflowStructure($dsd, $full = false)
    {
        // TODO: Implement getDataflowStructure() method.
    }

    /**
     * Gets all the codes from this provider for a given codelist.
     * @param string $codelist
     * @param string $agency
     * @param string $version
     * @return array[string]string
     */
    public function getCodes($codelist, $agency, $version)
    {
        // TODO: Implement getCodes() method.
    }
}