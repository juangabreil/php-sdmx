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
use Sdmx\api\parser\DataParser;
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
     * @var PHPUnit_Framework_MockObject_MockObject $httpClientMock
     */
    private $httpClientMock;
    /**
     * @var PHPUnit_Framework_MockObject_MockObject $datastructureParserMock
     */
    private $datastructureParserMock;
    /**
     * @var PHPUnit_Framework_MockObject_MockObject $dataParserMock
     */
    private $dataParserMock;

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

    public function testGetTimeSeries()
    {
        $flow = new Dataflow();
        $flow->setId('SomeFlow');
        $dsd = new DataflowStructure();
        $resource = 'a.b.c';
        $options = [];

        $generatedQuery = 'SomeQuery';
        $this->queryBuilderMock
            ->expects($this->once())
            ->method('getDataQuery')
            ->with(
                $flow,
                $resource,
                $options
            )
            ->willReturn($generatedQuery);

        $XmlResponse = 'SomeXmlData';
        $this->httpClientMock
            ->expects($this->once())
            ->method('get')
            ->with($generatedQuery)
            ->willReturn($XmlResponse);

        $parsedTimeSeries = [];
        $this->dataParserMock
            ->expects($this->once())
            ->method('parse')
            ->with(
                $XmlResponse,
                $dsd,
                'SomeFlow',
                true
            )
            ->willReturn($parsedTimeSeries);

        $timeSeries = $this->client->getTimeSeries($flow, $dsd, $resource, $options);

        $this->assertSame($parsedTimeSeries, $timeSeries);
    }

    public function testGetTimeSeriesFromScratch()
    {
        $version = 'SomeVersion';
        $agency = 'SomeAgency';
        $dataflow = 'SomeFlow';
        $flow = new Dataflow();
        $flow->setId($dataflow);
        $flow->setAgency($agency);
        $flow->setVersion($version);
        $flow->setDsdIdentifier(new DsdIdentifier($dataflow, $agency, $version));
        $dsd = new DataflowStructure();
        $dsd->setId($dataflow);
        $dsd->setVersion($version);
        $dsd->setAgency($agency);
        $resource = 'a.b.c';
        $options = [];

        $this->httpClientMock
            ->method('get')
            ->with($this->logicalOr(
                $this->equalTo('SomeStructureQuery'),
                $this->equalTo('SomeDataQuery')
            ))
            ->willReturn('SomeXmlData');

        $this->prepareGetDatastructure($dsd);
        $parsedTimeSeries = $this->prepareGetCode($flow, $resource, $options, $dsd);

        $timeSeries = $this->client->getTimeSeries2($dataflow, $agency, $version, $resource, $options);

        $this->assertSame($parsedTimeSeries, $timeSeries);
    }

    private function prepareGetDatastructure(DataflowStructure $dsd){
        $generatedQuery = 'SomeStructureQuery';
        $this->queryBuilderMock
            ->expects($this->once())
            ->method('getDsdQuery')
            ->with(
                'SomeFlow',
                'SomeAgency',
                'SomeVersion'
            )
            ->willReturn($generatedQuery);


        $parsedDataflowStructures = array($dsd);
        $this->datastructureParserMock
            ->expects($this->once())
            ->method('parse')
            ->with('SomeXmlData')
            ->willReturn($parsedDataflowStructures);
    }

    /**
     * @param $flow
     * @param $resource
     * @param $options
     * @param $dsd
     * @return array
     */
    private function prepareGetCode($flow, $resource, $options, $dsd)
    {
        $generatedQuery = 'SomeDataQuery';
        $this->queryBuilderMock
            ->expects($this->once())
            ->method('getDataQuery')
            ->with(
                $flow,
                $resource,
                $options
            )
            ->willReturn($generatedQuery);

        $parsedTimeSeries = [];
        $this->dataParserMock
            ->expects($this->once())
            ->method('parse')
            ->with(
                'SomeXmlData',
                $dsd,
                'SomeFlow',
                true
            )
            ->willReturn($parsedTimeSeries);

        return $parsedTimeSeries;
    }

    protected function setUp()
    {
        $this->queryBuilderMock = $this->getMockBuilder(SdmxQueryBuilder::class)->getMock();
        $this->httpClientMock = $this->getMockBuilder(HttpClient::class)->getMock();
        $this->datastructureParserMock = $this->getMockBuilder(DataStructureParser::class)->getMock();
        $this->dataParserMock = $this->getMockBuilder(DataParser::class)->getMock();
        $this->client = new DotStatClient(
            'DotStat',
            $this->queryBuilderMock,
            $this->httpClientMock,
            $this->datastructureParserMock,
            $this->dataParserMock
        );
    }


}
