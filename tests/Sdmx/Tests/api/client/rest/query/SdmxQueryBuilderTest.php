<?php

namespace Sdmx\Tests\api\client\rest\query;


use PHPUnit\Framework\TestCase;
use Sdmx\api\client\rest\query\SdmxQueryBuilder;


class SdmxQueryBuilderTest extends TestCase
{
    const BASE_URL = 'http://some.base.url';

    /**
     * @var SdmxQueryBuilder $sdmxQueryBuilder
     */
    private $sdmxQueryBuilder;

    protected function setUp()
    {
        $this->sdmxQueryBuilder = new SdmxQueryBuilder(self::BASE_URL);
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



}
