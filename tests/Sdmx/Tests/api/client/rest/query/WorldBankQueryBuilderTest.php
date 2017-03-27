<?php

namespace Sdmx\Tests\api\client\rest\query;

use Sdmx\api\client\rest\query\SdmxQueryBuilder;
use Sdmx\api\client\rest\query\WorldBankQueryBuilder;
use Sdmx\api\entities\Dataflow;

class WorldBankQueryBuilderTest extends \PHPUnit_Framework_TestCase
{
    const BASE_URL = 'http://some.base.url';

    /**
     * @var SdmxQueryBuilder $builder
     */
    private $builder;

    public function testGetDataQuery()
    {
        $flow = new Dataflow();
        $flow->setId('SomeFlow');
        $flow->setAgency('WB');
        $url = $this->builder->getDataQuery($flow, 'A.B.C');

        $this->assertSame(self::BASE_URL . '/v2/data/SomeFlow/C.B', $url);
    }

    protected function setUp()
    {
        $this->builder = new WorldBankQueryBuilder(self::BASE_URL);
    }


}
