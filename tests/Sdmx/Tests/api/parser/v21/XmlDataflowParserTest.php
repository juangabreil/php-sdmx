<?php

namespace Sdmx\Tests\api\parser\v21;

use PHPUnit\Framework\TestCase;
use Sdmx\api\entities\Dataflow;
use Sdmx\api\parser\DataflowParser;
use Sdmx\api\parser\v21\XmlDataflowParser;

class XmlDataflowParserTest extends TestCase
{
    /**
     * @var DataflowParser $parser
     */
    private $parser;

    public function testParseDataflowList()
    {
        $result = $this->parser->parse(ParserFixtures::$DATA_FLOW);

        $this->assertNotNull($result);
        $this->assertEquals(2, count($result));

        $this->checkFlow($result[0], 'CE', '1.0', 'UNESCO', 'Cultural employment');
        $this->checkFlow($result[1], 'DEM_ECO', '1.0', 'UNESCO', 'Demographic and socio-economic indicators');
    }

    public function testParseDataflowWithoutName()
    {
        $result = $this->parser->parse(ParserFixtures::$DATA_FLOW1);

        $this->assertNotNull($result);
        $this->assertEquals(1, count($result));

        $this->checkFlow($result[0], 'CE', '1.0', 'UNESCO', NULL);
    }

    public function testParseDataflowWithoutDsd()
    {
        $result = $this->parser->parse(ParserFixtures::$DATA_FLOW2);

        $this->assertNotNull($result);
        $this->assertEquals(1, count($result));

        $this->checkFlow($result[0], 'CE', '1.0', 'UNESCO', 'Cultural employment', false);
    }

    /**
     * @param Dataflow $dataflow
     * @param string $id
     * @param string $version
     * @param string $agency
     * @param string $name
     * @param bool $hasDsd
     */
    public function checkFlow($dataflow, $id, $version, $agency, $name, $hasDsd = true)
    {
        $this->assertEquals($id, $dataflow->getId());
        $this->assertEquals($version, $dataflow->getVersion());
        $this->assertEquals($agency, $dataflow->getAgency());
        $this->assertEquals($name, $dataflow->getName());

        $dsdIdentifier = $dataflow->getDsdIdentifier();
        if($hasDsd){
            $this->assertEquals($id, $dsdIdentifier->getId());
            $this->assertEquals($version, $dsdIdentifier->getVersion());
            $this->assertEquals($agency, $dsdIdentifier->getAgency());
        } else {
            $this->assertNull($dsdIdentifier);
        }

    }

    protected function setUp()
    {
        $this->parser = new XmlDataflowParser();
    }


}
