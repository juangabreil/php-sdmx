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
use Sdmx\api\parser\DataflowParser;


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

    public function setUp()
    {
        $this->queryBuilderMock = $this->getMockBuilder(QueryBuilder::class)
            ->getMock();
        $this->httpClient = $this->getMockBuilder(HttpClient::class)->getMock();
        $this->dataflowParser = $this->getMockBuilder(DataflowParser::class)->getMock();
        $this->client = new RestSdmxClient("rest", $this->queryBuilderMock, $this->httpClient, $this->dataflowParser);
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
}
