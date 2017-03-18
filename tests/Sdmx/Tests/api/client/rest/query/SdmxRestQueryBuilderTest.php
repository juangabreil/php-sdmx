<?php

namespace Sdmx\Tests\api\client\rest\query;


use PHPUnit\Framework\TestCase;
use Sdmx\api\client\rest\query\SdmxQueryBuilder;
use Sdmx\api\client\rest\query\SdmxRestQueryBuilder;
use Sdmx\api\entities\Dataflow;


class SdmxRestQueryBuilderTest extends TestCase
{
    const BASE_URL = 'http://some.base.url';

    /**
     * @var SdmxQueryBuilder $sdmxQueryBuilder
     */
    private $sdmxQueryBuilder;

    protected function setUp()
    {
        $this->sdmxQueryBuilder = new SdmxRestQueryBuilder(self::BASE_URL);
    }

    public function testGetDataflowQuery()
    {
        $query = $this->sdmxQueryBuilder->getDataflowQuery('UNESCO', 'all', 'latest');

        $expected = self::BASE_URL . '/dataflow/UNESCO/all/latest';
        $this->assertEquals($expected, $query);
    }

    public function testGetDsdQuery()
    {
        $query = $this->sdmxQueryBuilder->getDsdQuery('EDU_REGION', 'UNESCO', 'latest', false);

        $expected = self::BASE_URL . '/datastructure/UNESCO/EDU_REGION/latest';
        $this->assertEquals($expected, $query);
    }

    public function testGetVersionlessDsdQuery()
    {
        $query = $this->sdmxQueryBuilder->getDsdQuery('EDU_REGION', 'UNESCO', '', false);

        $expected = self::BASE_URL . '/datastructure/UNESCO/EDU_REGION';
        $this->assertEquals($expected, $query);
    }

    public function testGetFullDsdQuery()
    {
        $query = $this->sdmxQueryBuilder->getDsdQuery('EDU_REGION', 'UNESCO', 'latest', true);

        $expected = self::BASE_URL . '/datastructure/UNESCO/EDU_REGION/latest?references=children';
        $this->assertEquals($expected, $query);
    }

    public function testGetCodelistQuery()
    {
        $query = $this->sdmxQueryBuilder->getCodelistQuery('CL_NUMBERS', 'UNESCO', 'latest');

        $expected = self::BASE_URL . '/codelist/UNESCO/CL_NUMBERS/latest';
        $this->assertEquals($expected, $query);
    }

    public function testGetDataQueryWithoutParams()
    {
        $df = new Dataflow();
        $df->setId('EDU_FINANCE');
        $df->setAgency('UNESCO');
        $df->setVersion('1.0');
        $query = $this->sdmxQueryBuilder->getDataQuery($df, 'a.b.c.d');

        $expected = self::BASE_URL . '/data/UNESCO,EDU_FINANCE,1.0/a.b.c.d';
        $this->assertEquals($expected, $query);
    }

    public function testGetDataQueryWithParams()
    {
        $df = new Dataflow();
        $df->setId('EDU_FINANCE');
        $df->setAgency('UNESCO');
        $df->setVersion('1.0');
        $query = $this->sdmxQueryBuilder->getDataQuery($df, 'a.b.c.d', array('startPeriod' => '2000', 'endPeriod' => '2010', 'seriesOnly' => true));

        $expected = self::BASE_URL . '/data/UNESCO,EDU_FINANCE,1.0/a.b.c.d?startPeriod=2000&endPeriod=2010&detail=serieskeysonly';
        $this->assertEquals($expected, $query);
    }
}
