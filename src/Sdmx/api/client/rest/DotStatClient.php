<?php

namespace Sdmx\api\client\rest;


use Sdmx\api\client\http\HttpClient;
use Sdmx\api\client\rest\query\SdmxQueryBuilder;
use Sdmx\api\client\SdmxClient;
use Sdmx\api\entities\Dataflow;
use Sdmx\api\entities\DataflowStructure;
use Sdmx\api\entities\DsdIdentifier;
use Sdmx\api\entities\PortableTimeSeries;
use Sdmx\api\exceptions\UnsupportedOperationException;
use Sdmx\api\parser\DataParser;
use Sdmx\api\parser\DataStructureParser;

class DotStatClient implements SdmxClient
{

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var SdmxQueryBuilder $queryBuilder
     */
    private $queryBuilder;

    /**
     * @var HttpClient $httpClient
     */
    private $httpClient;

    /**
     * @var DataStructureParser $dataStructureParser
     */
    private $dataStructureParser;

    /**
     * @var DataParser $dataParser
     */
    private $dataParser;

    /**
     * RestSdmxV20Client constructor.
     * @param string $name
     * @param SdmxQueryBuilder $queryBuilder
     * @param HttpClient $httpClient
     * @param DataStructureParser $dataStructureParser
     * @param DataParser $dataParser
     */
    public function __construct($name, SdmxQueryBuilder $queryBuilder, HttpClient $httpClient, DataStructureParser $dataStructureParser, DataParser $dataParser)
    {
        $this->name = $name;
        $this->queryBuilder = $queryBuilder;
        $this->httpClient = $httpClient;
        $this->dataStructureParser = $dataStructureParser;
        $this->dataParser = $dataParser;
    }


    /**
     * Gets all dataflows.
     * @return Dataflow[]
     */
    public function getDataflows()
    {
        $url = $this->queryBuilder->getDsdQuery('all', 'all', 'latest', false);
        $data = $this->httpClient->get($url);
        $result = [];

        $structures = $this->dataStructureParser->parse($data);
        foreach ($structures as $structure) {
            $result[] = $this->mapStructureToDataflow($structure);
        }

        return $result;
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
        $url = $this->queryBuilder->getDsdQuery($dataflow, $agency, $version, false);
        $data = $this->httpClient->get($url);

        $structures = $this->dataStructureParser->parse($data);

        return count($structures) > 0 ? $this->mapStructureToDataflow($structures[0]) : null;
    }

    /**
     * Gets the structure for a given dataflow.
     * @param DsdIdentifier $dsd
     * @param bool $full if true, for 2.1 providers it retrieves the full dsd, with all the codelists.
     * @return DataflowStructure
     */
    public function getDataflowStructure(DsdIdentifier $dsd, $full = false)
    {
        $url = $this->queryBuilder->getDsdQuery($dsd->getId(), $dsd->getAgency(), $dsd->getVersion(), $full);
        $response = $this->httpClient->get($url);
        $dataflowStructures = $this->dataStructureParser->parse($response);

        return count($dataflowStructures) > 0 ? $dataflowStructures[0] : null;
    }

    /**
     * Gets all the codes from this provider for a given codelist.
     * @param string $codelist
     * @param string $agency
     * @param string $version
     * @return \string[]
     */
    public function getCodes($codelist, $agency, $version)
    {
        throw new UnsupportedOperationException('This method is not supported by dot stat api\'s');
    }

    /**
     * @param Dataflow $dataflow The dataflow of the time series to be gathered
     * @param DataflowStructure $dsd The structure of the dataflow of the time series to be gathered
     * @param string $resource The id of the time series
     * @param array $options
     * ```php
     * $options = array(
     *      'startPeriod' => 'string', //Start time of the observations to be gathered
     *      'endPeriod' => 'string', //End time of the observations to be gathered
     * )
     * ```
     * @return PortableTimeSeries[]
     */
    public function getTimeSeries(Dataflow $dataflow, DataflowStructure $dsd, $resource, array $options = array())
    {
        $query = $this->queryBuilder->getDataQuery($dataflow, $resource, $options);
        $response = $this->httpClient->get($query);

        return $this->dataParser->parse($response, $dsd, $dataflow->getId(), true);
    }

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
     * )
     * ```
     * @return PortableTimeSeries[]
     */
    public function getTimeSeries2($dataflow, $agency, $version, $resource, array $options = array())
    {
        $dsdIdentifier = new DsdIdentifier($dataflow, $agency, $version);
        $dsd = $this->getDataflowStructure($dsdIdentifier);
        $dataflowData = $this->mapStructureToDataflow($dsd);

        return $this->getTimeSeries($dataflowData, $dsd, $resource, $options);
    }

    /**
     * @param DataflowStructure $structure
     * @return Dataflow
     */
    protected function mapStructureToDataflow($structure)
    {
        $dataflow = new Dataflow();
        $dataflow->setAgency($structure->getAgency());
        $dataflow->setId($structure->getId());
        $dataflow->setVersion($structure->getVersion());
        $dataflow->setName($structure->getName());
        $dsd = new DsdIdentifier($structure->getId(), $structure->getAgency(), $structure->getVersion());
        $dataflow->setDsdIdentifier($dsd);
        return $dataflow;
    }
}