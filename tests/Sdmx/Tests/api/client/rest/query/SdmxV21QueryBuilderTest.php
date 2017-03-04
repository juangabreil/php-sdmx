<?php

namespace Sdmx\Tests\api\client\rest\query;


use PHPUnit\Framework\TestCase;
use Sdmx\api\client\rest\query\SdmxV21QueryBuilder;


class SdmxV21QueryBuilderTest extends TestCase
{
    const BASE_URL = 'http://some.base.url';

    /**
     * @var SdmxV21QueryBuilder $sdmxQueryBuilder
     */
    private $sdmxQueryBuilder;

    protected function setUp()
    {
        $this->sdmxQueryBuilder = new SdmxV21QueryBuilder(self::BASE_URL);
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

}
