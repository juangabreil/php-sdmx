<?php

namespace Sdmx\Tests\api\parser\v20;


use PHPUnit\Framework\TestCase;
use Sdmx\api\entities\DataflowStructure;
use Sdmx\api\parser\DataStructureParser;
use Sdmx\api\parser\v20\V20DataStructureParser;


class V20DataStructureParserTest extends TestCase
{
    /**
     * @var DataStructureParser $parser
     */
    private $parser;

    protected function setUp()
    {
        $this->parser = new V20DataStructureParser();
    }

    public function testParseDataStructure()
    {
        $structures = $this->parser->parse(ParserFixtures::getDataflow());

        $this->assertNotNull($structures);
        $this->assertEquals(2, count($structures));

        $this->checkStructure($structures[0], 'QNA', 'OECD', 'Quarterly National Accounts');
        $this->checkStructure($structures[1], 'PAT_IND', 'OECD', 'Patent indicators');
    }

    /**
     * @param DataflowStructure $structure
     * @param string $id
     * @param string $agencyId
     * @param string $name
     */
    private function checkStructure($structure, $id, $agencyId, $name)
    {
        $this->assertSame($id, $structure->getId());
        $this->assertSame($agencyId, $structure->getAgency());
        $this->assertSame($name, $structure->getName());
    }


}
