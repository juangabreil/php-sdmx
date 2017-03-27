<?php

namespace Sdmx\Tests\api\parser\v20;


use PHPUnit\Framework\TestCase;
use Sdmx\api\parser\DataParser;
use Sdmx\api\parser\DataStructureParser;
use Sdmx\api\parser\v20\V20CodelistParser;
use Sdmx\api\parser\v20\V20DataParser;
use Sdmx\api\parser\v20\V20DataStructureParser;


class V20DataParserTest extends TestCase
{
    /**
     * @var DataParser $parser
     */
    private $parser;

    /**
     * @var DataStructureParser $structureParser
     */
    private $structureParser;

    public function testParseQnaData()
    {
        $dsd = $this->structureParser->parse(V20ParserFixtures::getDataStructure())[0];
        $result = $this->parser->parse(V20ParserFixtures::getQnaData(), $dsd, 'QNA', true);

        $line = $result[0];
        $lineDimData = 'LOCATION=AUS,SUBJECT=B1_GE,MEASURE=VOBARSA,FREQUENCY=Q';
        $lineDimData = explode(',', $lineDimData);
        foreach ($lineDimData as $datum) {
            $tokens = explode('=', $datum);
            $this->assertEquals($tokens[1], $line->getDimensionValue($tokens[0]));
        }

        $lineAttrData = 'TIME_FORMAT=P3M,UNIT=AUD,POWERCODE=6,REFERENCEPERIOD=2010';
        $lineAttrData = explode(',', $lineAttrData);
        foreach ($lineAttrData as $datum) {
            $tokens = explode('=', $datum);
            $this->assertEquals($tokens[1], $line->getAttributeValue($tokens[0]));
        }

        $this->assertEquals([1372218.6306749999, 1387564.4511140001, 1404000.1627839999, 1417956.087089], $line->getObservations());
        $this->assertEquals(['2011-Q1', '2011-Q2', '2011-Q3', '2011-Q4'], $line->getTimeSlots());
        $this->assertEquals(['1', '2', '3', '4'], $line->getObsLevelAttributes('TEST'));
    }

    public function testParseWbData()
    {
        $dsd = $this->structureParser->parse(V20ParserFixtures::getWbDataStructure())[0];
        $result = $this->parser->parse(V20ParserFixtures::getWbData(), $dsd, 'WDI', true);

        $line = $result[0];
        $lineDimData = 'FREQ=A,SERIES=PA_NUS_PPP_05,REF_AREA=ES';
        $lineDimData = explode(',', $lineDimData);
        foreach ($lineDimData as $datum) {
            $tokens = explode('=', $datum);
            $this->assertEquals($tokens[1], $line->getDimensionValue($tokens[0]));
        }

        $lineAttrData = 'UNIT_MULT=0';
        $lineAttrData = explode(',', $lineAttrData);
        foreach ($lineAttrData as $datum) {
            $tokens = explode('=', $datum);
            $this->assertEquals($tokens[1], $line->getAttributeValue($tokens[0]));
        }

        $this->assertEquals([1.5, 2, 3], $line->getObservations());
        $this->assertEquals(['2014', '2015', '2016'], $line->getTimeSlots());
    }

    protected function setUp()
    {
        $this->parser = new V20DataParser();
        $this->structureParser = new V20DataStructureParser(new V20CodelistParser());
    }
}
