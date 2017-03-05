<?php

namespace Sdmx\Tests\api\parser\v21;


use PHPUnit\Framework\TestCase;
use Sdmx\api\entities\DataflowStructure;
use Sdmx\api\entities\Dimension;
use Sdmx\api\parser\DataParser;
use Sdmx\api\parser\v21\V21CodelistParser;
use Sdmx\api\parser\v21\V21DataParser;
use Sdmx\api\parser\v21\V21DataStructureParser;


class V21DataParserTest extends TestCase
{
    /**
     * @var DataParser $parser
     */
    private $parser;

    public function testParseDataWithKeySeriesOnly()
    {
        $structureParser = new V21DataStructureParser(new V21CodelistParser());
        $dsd = $structureParser->parse(ParserFixtures::getEduNonFinance('structure'))[0];
        $result = $this->parser->parse(ParserFixtures::getEduNonFinance('data_onlykeyseries'), $dsd, 'UNESCO,EDU_NON_FINANCE,1.0', false);

        $line = $result[0];
        $lineData = 'UNIT_MEASURE=PT,STAT_UNIT=GER,SEX=F,REF_AREA=GQ,AGE=OVER_AGE,REGION_DEST=W00,COUNTRY_ORIGIN=W00,SECTOR_EDU=INST_T,GRADE=_T,EDU_FIELD=_T,EDU_ATTAIN=_Z,EDU_CAT=_T,EDU_LEVEL=L1,EDU_TYPE=_T,WEALTH_QUINTILE=_Z,LOCATION=_T';
        $lineData = explode(',', $lineData);
        foreach ($lineData as $datum) {
            $tokens = explode('=', $datum);
            $this->assertEquals($tokens[1], $line->getDimensionValue($tokens[0]));
        }
        $this->assertEquals('SomeValue', $line->getAttributeValue('SOME_ATTR'));
    }

    public function testParseDataWithKeySeriesOnlyFreqDim()
    {
        $dsd = new DataflowStructure();
        $dimension = new Dimension();
        $dimension->setId('FREQ');
        $dsd->setDimension($dimension);

        $data = <<<XML
<message:StructureSpecificData xmlns:ss="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/data/structurespecific" xmlns:footer="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/message/footer" xmlns:ns1="urn:sdmx:org.sdmx.infomodel.datastructure.Dataflow=UNESCO:EDU_NON_FINANCE(1.0):ObsLevelDim:TIME_PERIOD" xmlns:message="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/message" xmlns:common="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/common" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
    <message:DataSet ss:dataScope="DataStructure" xsi:type="ns1:DataSetType" ss:structureRef="UNESCO_EDU_NON_FINANCE_1_0">
        <ns1:Series FREQ="YEAR"/>
    </message:DataSet>
</message:StructureSpecificData>
XML;
        $result = $this->parser->parse($data, $dsd, 'UNESCO,EDU_NON_FINANCE,1.0', false);

        $line = $result[0];
        $this->assertEquals('YEAR', $line->getDimensionValue('FREQ'));
        $this->assertEquals('YEAR', $line->getFrequency());
    }

    public function testParseDataWithKeySeriesOnlyFrequencyDim()
    {
        $dsd = new DataflowStructure();
        $dimension = new Dimension();
        $dimension->setId('FREQUENCY');
        $dsd->setDimension($dimension);

        $data = <<<XML
<message:StructureSpecificData xmlns:ss="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/data/structurespecific" xmlns:footer="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/message/footer" xmlns:ns1="urn:sdmx:org.sdmx.infomodel.datastructure.Dataflow=UNESCO:EDU_NON_FINANCE(1.0):ObsLevelDim:TIME_PERIOD" xmlns:message="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/message" xmlns:common="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/common" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
    <message:DataSet ss:dataScope="DataStructure" xsi:type="ns1:DataSetType" ss:structureRef="UNESCO_EDU_NON_FINANCE_1_0">
        <ns1:Series FREQUENCY="YEAR"/>
    </message:DataSet>
</message:StructureSpecificData>
XML;
        $result = $this->parser->parse($data, $dsd, 'UNESCO,EDU_NON_FINANCE,1.0', false);

        $line = $result[0];
        $this->assertEquals('YEAR', $line->getDimensionValue('FREQUENCY'));
        $this->assertEquals('YEAR', $line->getFrequency());
    }

    public function testParseDataDataSetMeta()
    {
        $dsd = new DataflowStructure();
        $dimension = new Dimension();
        $dimension->setId('FREQUENCY');
        $dsd->setDimension($dimension);

        $data = <<<XML
<message:StructureSpecificData xmlns:ss="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/data/structurespecific" xmlns:footer="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/message/footer" xmlns:ns1="urn:sdmx:org.sdmx.infomodel.datastructure.Dataflow=UNESCO:EDU_NON_FINANCE(1.0):ObsLevelDim:TIME_PERIOD" xmlns:message="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/message" xmlns:common="http://www.sdmx.org/resources/sdmxml/schemas/v2_1/common" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
    <message:DataSet ss:dataScope="DataStructure" xsi:type="ns1:DataSetType" ss:structureRef="UNESCO_EDU_NON_FINANCE_1_0" action="someAction" validFromDate="fromDate" validToDate="toDate">
        <ns1:Series FREQUENCY="YEAR"/>
    </message:DataSet>
</message:StructureSpecificData>
XML;
        $result = $this->parser->parse($data, $dsd, 'UNESCO,EDU_NON_FINANCE,1.0', false);

        $line = $result[0];
        $this->assertEquals('someAction', $line->getAttributeValue('action'));
        $this->assertEquals('fromDate', $line->getAttributeValue('validFromDate'));
        $this->assertEquals('toDate', $line->getAttributeValue('validToDate'));
    }

    public function testParseData()
    {
        $structureParser = new V21DataStructureParser(new V21CodelistParser());
        $dsd = $structureParser->parse(ParserFixtures::getEduNonFinance('structure'))[0];
        $result = $this->parser->parse(ParserFixtures::getEduNonFinance('data'), $dsd, 'UNESCO,EDU_NON_FINANCE,1.0', true);

        $line = $result[0];
        $lineData = 'UNIT_MEASURE=PT,STAT_UNIT=GER,SEX=F,REF_AREA=GQ,AGE=OVER_AGE,REGION_DEST=W00,COUNTRY_ORIGIN=W00,SECTOR_EDU=INST_T,GRADE=_T,EDU_FIELD=_T,EDU_ATTAIN=_Z,EDU_CAT=_T,EDU_LEVEL=L1,EDU_TYPE=_T,WEALTH_QUINTILE=_Z,LOCATION=_T';
        $lineData = explode(',', $lineData);
        foreach ($lineData as $datum) {
            $tokens = explode('=', $datum);
            $this->assertEquals($tokens[1], $line->getDimensionValue($tokens[0]));
        }

        $this->assertEquals([16.558], $line->getObservations());
        $this->assertEquals(['1'], $line->getObsLevelAttributes('UNIT_MULT'));
        $this->assertEquals(['A'], $line->getObsLevelAttributes('OBS_STATUS'));
        $this->assertEquals(['A'], $line->getObsLevelAttributes('FREQ'));
        $this->assertEquals(['5'], $line->getObsLevelAttributes('DECIMALS'));
    }

    protected function setUp()
    {
        $this->parser = new V21DataParser();
    }


}
