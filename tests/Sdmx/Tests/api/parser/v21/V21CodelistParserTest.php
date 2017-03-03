<?php

namespace Sdmx\Tests\api\parser\v21;


use PHPUnit\Framework\TestCase;
use Sdmx\api\parser\CodelistParser;
use Sdmx\api\parser\v21\V21CodelistParser;


class V21CodelistParserTest extends TestCase
{
    /**
     * @var CodelistParser $codelistParser
     */
    private $codelistParser;

    public function testParseCodelist()
    {
        $data = new \SimpleXMLElement(ParserFixtures::$CODE_LISTS);
        $codelist = $this->codelistParser->parse($data->xpath('//mes:Structure/str:Codelist')[0]);

        $this->assertSame('Zero', $codelist['0']);
        $this->assertSame('Fifteen', $codelist['15']);
    }

    protected function setUp()
    {
        $this->codelistParser = new V21CodelistParser();
    }



}
