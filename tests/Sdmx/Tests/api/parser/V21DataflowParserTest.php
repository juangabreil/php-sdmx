<?php

namespace Sdmx\Tests\api\parser;

use PHPUnit\Framework\TestCase;
use Sdmx\api\parser\DataflowParser;
use Sdmx\api\parser\V21DataflowParser;

class V21DataflowParserTest extends TestCase
{
    /**
     * @var DataflowParser $parser
     */
    private $parser;

    public function testParseDataflowList()
    {
        $result = $this->parser->parse(ParserFixtures::$DATA_FLOW);

        $this->assertNotNull($result);
    }

    protected function setUp()
    {
        $this->parser = new V21DataflowParser();
    }


}
