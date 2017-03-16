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
use Sdmx\api\entities\DsdIdentifier;
use Sdmx\api\parser\DataStructureParser;
use Sdmx\api\parser\v20\V20DataStructureParser;


class DotStatClientTest extends TestCase
{

    /**
     * @var SdmxClient $client ;
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

    public function testGetDataflow()
    {
        $generatedQuery = 'SomeQuery';
        $this->queryBuilderMock
            ->expects($this->once())
            ->method('getDsdQuery')
            ->with(
                'QNA',
                'OECD',
                '',
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

        $dataflow = $this->client->getDataflow('QNA', 'OECD', '');

        $this->checkFlow($dataflow, 'QNA', 'OECD', 'Quaterly National Accounts');
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

    public function testGetNullDataflowBecauseNothingWasParsed()
    {
        $generatedQuery = 'SomeQuery';
        $this->queryBuilderMock
            ->expects($this->once())
            ->method('getDsdQuery')
            ->with(
                'SomeFlow',
                'SomeAgency',
                '',
                false
            )
            ->willReturn($generatedQuery);

        $XmlResponse = 'SomeXmlData';
        $this->httpClientMock
            ->expects($this->once())
            ->method('get')
            ->with($generatedQuery)
            ->willReturn($XmlResponse);

        $parsedDataflows = [];
        $this->datastructureParserMock
            ->expects($this->once())
            ->method('parse')
            ->with($XmlResponse)
            ->willReturn($parsedDataflows);

        $dataflow = $this->client->getDataflow('SomeFlow', 'SomeAgency', '');

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
                '',
                false
            )
            ->willReturn($generatedQuery);

        $XmlResponse = 'SomeXmlData';
        $this->httpClientMock
            ->expects($this->once())
            ->method('get')
            ->with($generatedQuery)
            ->willReturn($XmlResponse);

        $parsedDataflowStructures = array(new DataflowStructure());
        $this->datastructureParserMock
            ->expects($this->once())
            ->method('parse')
            ->with($XmlResponse)
            ->willReturn($parsedDataflowStructures);

        $dsd = new DsdIdentifier('SomeFlow', 'SomeAgency', '');
        $dataflowStructure = $this->client->getDataflowStructure($dsd, false);

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
                '',
                true
            )
            ->willReturn($generatedQuery);

        $XmlResponse = 'SomeXmlData';
        $this->httpClientMock
            ->expects($this->once())
            ->method('get')
            ->with($generatedQuery)
            ->willReturn($XmlResponse);

        $parsedDataflowStructures = array(new DataflowStructure());
        $this->datastructureParserMock
            ->expects($this->once())
            ->method('parse')
            ->with($XmlResponse)
            ->willReturn($parsedDataflowStructures);

        $dsd = new DsdIdentifier('SomeFlow', 'SomeAgency', '');
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
                '',
                false
            )
            ->willReturn($generatedQuery);

        $XmlResponse = 'SomeXmlData';
        $this->httpClientMock
            ->expects($this->once())
            ->method('get')
            ->with($generatedQuery)
            ->willReturn($XmlResponse);

        $parsedDataflowStructures = array();
        $this->datastructureParserMock
            ->expects($this->once())
            ->method('parse')
            ->with($XmlResponse)
            ->willReturn($parsedDataflowStructures);

        $dsd = new DsdIdentifier('SomeFlow', 'SomeAgency', '');
        $dataflowStructure = $this->client->getDataflowStructure($dsd, false);

        $this->assertNull($dataflowStructure);
    }

    /**
     * @expectedException Sdmx\api\exceptions\UnsupportedOperationException
     */
    public function testGetCodesMethodIsNotSupported()
    {
        $this->client->getCodes('SomeCodelist', 'SomeAgency', 'SomeVersion');
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
