<?php
/**
 * Created by PhpStorm.
 * User: jgjimene
 * Date: 25/02/2017
 * Time: 19:25
 */

namespace Sdmx\Tests\api\parser\v21;


use PHPUnit\Framework\TestCase;
use Sdmx\api\entities\Codelist;
use Sdmx\api\entities\DataflowStructure;
use Sdmx\api\entities\Dimension;
use Sdmx\api\parser\DataStructureParser;
use Sdmx\api\parser\v21\XmlDataStructureParser;


class XmlDataStructureParserTest extends TestCase
{
    /**
     * @var DataStructureParser $parser
     */
    private $parser;

    public function testParseDataStructureWithoutChildren()
    {
        $dataStructures = $this->parser->parse(ParserFixtures::$DATA_STRUCTURE);

        $this->assertNotNull($dataStructures);
        $this->assertEquals(1, count($dataStructures));
        $datastructure = $dataStructures[0];

        $this->checkDataStructure($datastructure, 'EDU_FINANCE', 'UNESCO', '1.0', 'TIME_PERIOD');

        $dimensions = $datastructure->getListOfDimensions();
        $this->assertEquals(7, count($dimensions));
        $this->checkDimension($dimensions[0], 'UNIT_MEASURE', 'UNIT_MEASURE', 1);
        $this->checkCodelist($dimensions[0]->getCodelist(), 'CL_UNIT', '1.0', 'UNESCO', []);
        $this->checkDimension($dimensions[6], 'EDU_LEVEL', 'EDU_LEVEL', 7);
        $this->checkCodelist($dimensions[6]->getCodelist(), 'CL_EDU_LEVEL', '1.0', 'UNESCO', []);
    }

    protected function setUp()
    {
        $this->parser = new XmlDataStructureParser();
    }

    /**
     * @param Dimension $dimension
     * @param string $id
     * @param string $name
     * @param int $position
     */
    private function checkDimension(Dimension $dimension, $id, $name, $position)
    {
        $this->assertSame($id, $dimension->getId());
        $this->assertSame($name, $dimension->getName());
        $this->assertSame($position, $dimension->getPosition());
    }

    /**
     * @param DataflowStructure $datastructure
     * @param string $id
     * @param string $agency
     * @param string $version
     * @param string $timeDimension
     */
    private function checkDataStructure(DataflowStructure $datastructure, $id, $agency, $version, $timeDimension)
    {
        $this->assertSame($id, $datastructure->getId());
        $this->assertSame($agency, $datastructure->getAgency());
        $this->assertSame($version, $datastructure->getVersion());
        $this->assertSame($timeDimension, $datastructure->getTimeDimension());
    }

    /**
     * @param Codelist $codelist
     * @param string $id
     * @param string $version
     * @param string $agency
     * @param string[] $codes
     */
    private function checkCodelist(Codelist $codelist, $id, $version, $agency, $codes)
    {
        $this->assertSame($id, $codelist->getId());
        $this->assertSame($version, $codelist->getVersion());
        $this->assertSame($agency, $codelist->getAgency());
        $this->assertEquals($codes, $codelist->getCodes());
    }


}
