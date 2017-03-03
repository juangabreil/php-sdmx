<?php

namespace Sdmx\api\client\rest;


use InvalidArgumentException;
use Sdmx\api\client\http\HttpClient;
use Sdmx\api\client\rest\query\QueryBuilder;
use Sdmx\api\client\SdmxClient;
use Sdmx\api\entities\Dataflow;
use Sdmx\api\entities\DataflowStructure;
use Sdmx\api\entities\DsdIdentifier;
use Sdmx\api\parser\DataflowParser;
use Sdmx\api\parser\DataStructureParser;

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
     * @var QueryBuilder $queryBuilder
     */
    private $queryBuilder;

    /**
     * @var HttpClient $httpClient
     */
    private $httpClient;

    /**
     * @var DataflowParser $dataflowParser
     */
    private $dataflowParser;

    /**
     * @var DataStructureParser $datastructureParser
     */
    private $datastructureParser;


    /**
     * RestSdmxClient constructor.
     * @param string $name
     * @param QueryBuilder $queryBuilder
     * @param HttpClient $httpClient
     * @param DataflowParser $dataflowParser
     * @param DataStructureParser $datastructureParser
     */
    public function __construct($name, QueryBuilder $queryBuilder, HttpClient $httpClient, DataflowParser $dataflowParser, DataStructureParser $datastructureParser)
    {
        $this->name = $name;
        $this->queryBuilder = $queryBuilder;
        $this->httpClient = $httpClient;
        $this->dataflowParser = $dataflowParser;
        $this->datastructureParser = $datastructureParser;
    }


    /**
     * Gets all dataflows.
     * @return Dataflow[]
     */
    public function getDataflows()
    {
        $url = $this->queryBuilder->getDataflowQuery(self::ALL_AGENCIES, self::ALL_FLOWS, self::LATEST_VERSION);
        $response = $this->httpClient->get($url);

        return $this->dataflowParser->parse($response);
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
        $url = $this->queryBuilder->getDataflowQuery($agency, $dataflow, $version);
        $response = $this->httpClient->get($url);
        $dataflows = $this->dataflowParser->parse($response);
        return count($dataflows) > 0 ? $dataflows[0] : null;
    }

    /**
     * Gets the structure for a given dataflow.
     * @param DsdIdentifier $dsd
     * @param bool $full if true, for 2.1 providers it retrieves the full dsd, with all the codelists.
     * @return DataflowStructure
     * @throws InvalidArgumentException
     */
    public function getDataflowStructure(DsdIdentifier $dsd, $full = false)
    {
        if ($dsd == NULL) {
            throw new InvalidArgumentException('Dsd cannot be null!');
        }

        $url = $this->queryBuilder->getDsdQuery($dsd->getId(), $dsd->getAgency(), $dsd->getVersion(), $full);
        $response = $this->httpClient->get($url);
        $dataflowStructures = $this->datastructureParser->parse($response);

        return count($dataflowStructures) > 0 ? $dataflowStructures[0] : null;
    }

    /**
     * Gets all the codes from this provider for a given codelist.
     * @param string $codelist
     * @param string $agency
     * @param string $version
     * @return string[]
     */
    public function getCodes($codelist, $agency, $version)
    {
        // TODO: Implement getCodes() method.
    }
}