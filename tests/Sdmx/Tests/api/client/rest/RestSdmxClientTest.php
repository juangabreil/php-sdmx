<?php
/**
 * Created by PhpStorm.
 * User: jgjimene
 * Date: 20/02/2017
 * Time: 23:01
 */

namespace Sdmx\Tests\api\client\rest;


use PHPUnit\Framework\TestCase;
use PHPUnit_Framework_MockObject_MockObject;
use Sdmx\api\client\http\HttpClient;
use Sdmx\api\client\rest\query\QueryBuilder;
use Sdmx\api\client\rest\RestSdmxClient;
use Sdmx\api\client\SdmxClient;
use Sdmx\api\entities\Dataflow;
use Sdmx\api\entities\DataflowStructure;
use Sdmx\api\entities\DsdIdentifier;
use Sdmx\api\parser\CodelistParser;
use Sdmx\api\parser\DataflowParser;
use Sdmx\api\parser\DataStructureParser;


class RestSdmxClientTest extends TestCase
{

    /**
     * @var SdmxClient $lient
     */
    private $client;
    /**
     * @var PHPUnit_Framework_MockObject_MockObject $queryBuilderMock
     */
    private $queryBuilderMock;
    /**
     * @var PHPUnit_Framework_MockObject_MockObject $httpClient
     */
    private $httpClient;
    /**
     * @var PHPUnit_Framework_MockObject_MockObject $dataflowParser
     */
    private $dataflowParser;
    /**
     * @var PHPUnit_Framework_MockObject_MockObject $datastructureParser
     */
    private $datastructureParser;
    /**
     * @var PHPUnit_Framework_MockObject_MockObject $codelistParser
     */
    private $codelistParser;

    public function setUp()
    {
        $this->queryBuilderMock = $this->getMockBuilder(QueryBuilder::class)
            ->getMock();
        $this->httpClient = $this->getMockBuilder(HttpClient::class)->getMock();
        $this->dataflowParser = $this->getMockBuilder(DataflowParser::class)->getMock();
        $this->datastructureParser = $this->getMockBuilder(DataStructureParser::class)->getMock();
        $this->codelistParser = $this->getMockBuilder(CodelistParser::class)->getMock();
        $this->client = new RestSdmxClient("rest", $this->queryBuilderMock, $this->httpClient, $this->dataflowParser, $this->datastructureParser, $this->codelistParser);
    }

    public function testGetDataflows()
    {
        $generatedQuery = 'SomeQuery';
        $this->queryBuilderMock
            ->expects($this->once())
            ->method('getDataflowQuery')
            ->with(
                RestSdmxClient::ALL_AGENCIES,
                RestSdmxClient::ALL_FLOWS,
                RestSdmxClient::LATEST_VERSION
            )
            ->willReturn($generatedQuery);

        $XmlResponse = 'SomeXmlData';
        $this->httpClient
            ->expects($this->once())
            ->method('get')
            ->with($generatedQuery)
            ->willReturn($XmlResponse);

        $parsedDataflows = array(new Dataflow());
        $this->dataflowParser
            ->expects($this->once())
            ->method('parse')
            ->with($XmlResponse)
            ->willReturn($parsedDataflows);

        $dataflows = $this->client->getDataflows();

        $this->assertSame($parsedDataflows, $dataflows);
    }

    public function testGetDataflow()
    {
        $generatedQuery = 'SomeQuery';
        $this->queryBuilderMock
            ->expects($this->once())
            ->method('getDataflowQuery')
            ->with(
                'SomeAgency',
                'SomeFlow',
                'SomeVersion'
            )
            ->willReturn($generatedQuery);

        $XmlResponse = 'SomeXmlData';
        $this->httpClient
            ->expects($this->once())
            ->method('get')
            ->with($generatedQuery)
            ->willReturn($XmlResponse);

        $parsedDataflows = array(new Dataflow());
        $this->dataflowParser
            ->expects($this->once())
            ->method('parse')
            ->with($XmlResponse)
            ->willReturn($parsedDataflows);

        $dataflow = $this->client->getDataflow('SomeFlow', 'SomeAgency', 'SomeVersion');

        $this->assertSame($parsedDataflows[0], $dataflow);
    }

    public function testGetNullDataflowBecauseNothingWasParsed()
    {
        $generatedQuery = 'SomeQuery';
        $this->queryBuilderMock
            ->expects($this->once())
            ->method('getDataflowQuery')
            ->with(
                'SomeAgency',
                'SomeFlow',
                'SomeVersion'
            )
            ->willReturn($generatedQuery);

        $XmlResponse = 'SomeXmlData';
        $this->httpClient
            ->expects($this->once())
            ->method('get')
            ->with($generatedQuery)
            ->willReturn($XmlResponse);

        $parsedDataflows = [];
        $this->dataflowParser
            ->expects($this->once())
            ->method('parse')
            ->with($XmlResponse)
            ->willReturn($parsedDataflows);

        $dataflow = $this->client->getDataflow('SomeFlow', 'SomeAgency', 'SomeVersion');

        $this->assertNull($dataflow);
    }

    public function testGetDatastructure()
    {
        $generatedQuery = 'SomeQuery';
        $this->queryBuilderMock
            ->expects($this->once())
            ->method('getDsdQuery')
            ->with(
                'SomeFlow',
                'SomeAgency',
                'SomeVersion',
                false
            )
            ->willReturn($generatedQuery);

        $XmlResponse = 'SomeXmlData';
        $this->httpClient
            ->expects($this->once())
            ->method('get')
            ->with($generatedQuery)
            ->willReturn($XmlResponse);

        $parsedDataflowStructures = array(new DataflowStructure());
        $this->datastructureParser
            ->expects($this->once())
            ->method('parse')
            ->with($XmlResponse)
            ->willReturn($parsedDataflowStructures);

        $dsd = new DsdIdentifier('SomeFlow', 'SomeAgency', 'SomeVersion');
        $dataflowStructure = $this->client->getDataflowStructure($dsd, false);

        $this->assertSame($parsedDataflowStructures[0], $dataflowStructure);
    }

    public function testGetDatastructureWontGetFullDsdByDefault()
    {
        $generatedQuery = 'SomeQuery';
        $this->queryBuilderMock
            ->expects($this->once())
            ->method('getDsdQuery')
            ->with(
                'SomeFlow',
                'SomeAgency',
                'SomeVersion',
                false
            )
            ->willReturn($generatedQuery);

        $XmlResponse = 'SomeXmlData';
        $this->httpClient
            ->expects($this->once())
            ->method('get')
            ->with($generatedQuery)
            ->willReturn($XmlResponse);

        $parsedDataflowStructures = array(new DataflowStructure());
        $this->datastructureParser
            ->expects($this->once())
            ->method('parse')
            ->with($XmlResponse)
            ->willReturn($parsedDataflowStructures);

        $dsd = new DsdIdentifier('SomeFlow', 'SomeAgency', 'SomeVersion');
        $dataflowStructure = $this->client->getDataflowStructure($dsd);

        $this->assertSame($parsedDataflowStructures[0], $dataflowStructure);
    }

    public function testGetDatastructureWithFullDsd()
    {
        $generatedQuery = 'SomeQuery';
        $this->queryBuilderMock
            ->expects($this->once())
            ->method('getDsdQuery')
            ->with(
                'SomeFlow',
                'SomeAgency',
                'SomeVersion',
                true
            )
            ->willReturn($generatedQuery);

        $XmlResponse = 'SomeXmlData';
        $this->httpClient
            ->expects($this->once())
            ->method('get')
            ->with($generatedQuery)
            ->willReturn($XmlResponse);

        $parsedDataflowStructures = array(new DataflowStructure());
        $this->datastructureParser
            ->expects($this->once())
            ->method('parse')
            ->with($XmlResponse)
            ->willReturn($parsedDataflowStructures);

        $dsd = new DsdIdentifier('SomeFlow', 'SomeAgency', 'SomeVersion');
        $dataflowStructure = $this->client->getDataflowStructure($dsd, true);

        $this->assertSame($parsedDataflowStructures[0], $dataflowStructure);
    }

    public function testGetNullDatastructureBecauseNothingWasParsed()
    {
        $generatedQuery = 'SomeQuery';
        $this->queryBuilderMock
            ->expects($this->once())
            ->method('getDsdQuery')
            ->with(
                'SomeFlow',
                'SomeAgency',
                'SomeVersion',
                false
            )
            ->willReturn($generatedQuery);

        $XmlResponse = 'SomeXmlData';
        $this->httpClient
            ->expects($this->once())
            ->method('get')
            ->with($generatedQuery)
            ->willReturn($XmlResponse);

        $parsedDataflowStructures = array();
        $this->datastructureParser
            ->expects($this->once())
            ->method('parse')
            ->with($XmlResponse)
            ->willReturn($parsedDataflowStructures);

        $dsd = new DsdIdentifier('SomeFlow', 'SomeAgency', 'SomeVersion');
        $dataflowStructure = $this->client->getDataflowStructure($dsd, false);

        $this->assertNull($dataflowStructure);
    }

    public function testGetCodelist()
    {
        $generatedQuery = 'SomeQuery';
        $this->queryBuilderMock
            ->expects($this->once())
            ->method('getCodelistQuery')
            ->with(
                'SomeCodelist',
                'SomeAgency',
                'SomeVersion'
            )
            ->willReturn($generatedQuery);

        $XmlResponse = 'SomeXmlData';
        $this->httpClient
            ->expects($this->once())
            ->method('get')
            ->with($generatedQuery)
            ->willReturn($XmlResponse);

        $parsedCodelist = [];
        $this->codelistParser
            ->expects($this->once())
            ->method('parseCodes')
            ->with($XmlResponse)
            ->willReturn($parsedCodelist);

        $codelist = $this->client->getCodes('SomeCodelist', 'SomeAgency', 'SomeVersion');

        $this->assertSame($parsedCodelist, $codelist);
    }

}
