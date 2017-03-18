<?php

namespace Sdmx\Tests\api\client\rest\query;


use PHPUnit\Framework\TestCase;
use Sdmx\api\client\rest\query\DotStatQueryBuilder;
use Sdmx\api\client\rest\query\SdmxQueryBuilder;
use Sdmx\api\client\rest\query\SdmxRestQueryBuilder;
use Sdmx\api\entities\Dataflow;
use Sdmx\api\exceptions\UnsupportedOperationException;


class DotStatQueryBuilderTest extends TestCase
{
    const BASE_URL = 'http://some.base.url';

    /**
     * @var SdmxQueryBuilder $sdmxQueryBuilder
     */
    private $sdmxQueryBuilder;

    protected function setUp()
    {
        $this->sdmxQueryBuilder = new DotStatQueryBuilder(self::BASE_URL, false);
    }

    public function testGetDataflowQuery()
    {
        $query = $this->sdmxQueryBuilder->getDataflowQuery('UNESCO', 'all', 'latest');

        $expected = self::BASE_URL . '/GetDataStructure/all';
        $this->assertEquals($expected, $query);
    }

    public function testGetDsdQuery()
    {
        $query = $this->sdmxQueryBuilder->getDsdQuery('EDU_REGION', 'UNESCO', 'latest', false);

        $expected = self::BASE_URL . '/GetDataStructure/EDU_REGION';
        $this->assertEquals($expected, $query);
    }

    public function testGetFullDsdQuery()
    {
        $query = $this->sdmxQueryBuilder->getDsdQuery('EDU_REGION', 'UNESCO', 'latest', true);

        $expected = self::BASE_URL . '/GetDataStructure/EDU_REGION';
        $this->assertEquals($expected, $query);
    }

    /**
     * @expectedException Sdmx\api\exceptions\UnsupportedOperationException
     */
    public function testGetCodelistQuery()
    {
        $this->sdmxQueryBuilder->getCodelistQuery('CL_NUMBERS', 'UNESCO', 'latest');
    }

    public function testGetDataQueryWithoutParams()
    {
        $df = new Dataflow();
        $df->setId('EDU_FINANCE');
        $df->setAgency('UNESCO');
        $df->setVersion('1.0');
        $query = $this->sdmxQueryBuilder->getDataQuery($df, 'a.b.c.d');

        $expected = self::BASE_URL . '/GetData/EDU_FINANCE/a.b.c.d';
        $this->assertEquals($expected, $query);
    }

    public function testGetDataQueryWithParams()
    {
        $df = new Dataflow();
        $df->setId('EDU_FINANCE');
        $df->setAgency('UNESCO');
        $df->setVersion('1.0');
        $query = $this->sdmxQueryBuilder->getDataQuery($df, 'a.b.c.d', array('startPeriod' => '2000', 'endPeriod' => '2010'));

        $expected = self::BASE_URL . '/GetData/EDU_FINANCE/a.b.c.d?startPeriod=2000&endPeriod=2010';
        $this->assertEquals($expected, $query);
    }
}
