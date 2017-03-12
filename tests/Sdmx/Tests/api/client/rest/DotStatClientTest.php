<?php

namespace Sdmx\Tests\api\client\rest;


use PHPUnit\Framework\TestCase;
use PHPUnit_Framework_MockObject_MockObject;
use Sdmx\api\client\http\HttpClient;
use Sdmx\api\client\http\RequestHttpClient;
use Sdmx\api\client\rest\query\DotStatQueryBuilder;
use Sdmx\api\client\rest\query\SdmxQueryBuilder;
use Sdmx\api\client\rest\query\SdmxRestQueryBuilder;
use Sdmx\api\client\rest\DotStatClient;
use Sdmx\api\client\SdmxClient;
use Sdmx\api\entities\Dataflow;
use Sdmx\api\entities\DataflowStructure;
use Sdmx\api\parser\DataStructureParser;
use Sdmx\api\parser\v20\V20DataStructureParser;


class DotStatClientTest extends TestCase
{

    /**
     * @var SdmxClient $client;
     */
    private $client;

    /**
     * @var PHPUnit_Framework_MockObject_MockObject $queryBuilderMock
     */
    private $queryBuilderMock;
    /**
     * @var PHPUnit_Framework_MockObject_MockObject $httpClient
     */
    private $httpClientMock;
    /**
     * @var PHPUnit_Framework_MockObject_MockObject $datastructureParser
     */
    private $datastructureParserMock;

    public function testGetDataflows()
    {
        $generatedQuery = 'SomeQuery';
        $this->queryBuilderMock
            ->expects($this->once())
            ->method('getDsdQuery')
            ->with(
                'all',
                'all',
                'latest',
                false
            )
            ->willReturn($generatedQuery);

        $XmlResponse = 'SomeXmlData';
        $this->httpClientMock
            ->expects($this->once())
            ->method('get')
            ->with($generatedQuery)
            ->willReturn($XmlResponse);

        $dataflowStructure = new DataflowStructure();
        $dataflowStructure->setId('QNA');
        $dataflowStructure->setAgency('OECD');
        $dataflowStructure->setName('Quaterly National Accounts');
        $parsedDataflows = [$dataflowStructure];
        $this->datastructureParserMock
            ->expects($this->once())
            ->method('parse')
            ->with($XmlResponse)
            ->willReturn($parsedDataflows);

        $dataflows = $this->client->getDataflows();

        $this->checkFlow($dataflows[0], 'QNA', 'OECD', 'Quaterly National Accounts');
    }

    /**
     * @param Dataflow $dataflow
     * @param string $id
     * @param string $agencyId
     * @param string $name
     */
    private function checkFlow($dataflow, $id, $agencyId, $name)
    {
        $this->assertSame($id, $dataflow->getId());
        $this->assertSame($agencyId, $dataflow->getAgency());
        $this->assertSame($name, $dataflow->getName());
        $this->assertSame($id, $dataflow->getDsdIdentifier()->getId());
        $this->assertSame($agencyId, $dataflow->getDsdIdentifier()->getAgency());
    }

    protected function setUp()
    {
        $this->queryBuilderMock = $this->getMockBuilder(SdmxQueryBuilder::class)->getMock();
        $this->httpClientMock = $this->getMockBuilder(HttpClient::class)->getMock();
        $this->datastructureParserMock = $this->getMockBuilder(DataStructureParser::class)->getMock();
        $this->client = new DotStatClient(
            $this->queryBuilderMock,
            $this->httpClientMock,
            $this->datastructureParserMock
        );
    }




}
