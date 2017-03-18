<?php

namespace Sdmx\Tests\api\parser\v20;


use PHPUnit\Framework\TestCase;
use Sdmx\api\entities\Codelist;
use Sdmx\api\entities\DataflowStructure;
use Sdmx\api\entities\Dimension;
use Sdmx\api\parser\DataStructureParser;
use Sdmx\api\parser\v20\V20CodelistParser;
use Sdmx\api\parser\v20\V20DataStructureParser;


class V20DataStructureParserTest extends TestCase
{
    /**
     * @var DataStructureParser $parser
     */
    private $parser;

    protected function setUp()
    {
        $this->parser = new V20DataStructureParser(new V20CodelistParser());
    }

    public function testParseDataStructures()
    {
        $structures = $this->parser->parse(V20ParserFixtures::getDataStructures());

        $this->assertNotNull($structures);
        $this->assertEquals(2, count($structures));

        $this->checkStructure($structures[0], 'QNA', 'OECD', 'Quarterly National Accounts');
        $this->checkStructure($structures[1], 'PAT_IND', 'OECD', 'Patent indicators');
    }

    public function testParseDataStructureWithChildren()
    {
        $dataStructures = $this->parser->parse(V20ParserFixtures::getDatastructure());

        $this->assertNotNull($dataStructures);
        $this->assertEquals(1, count($dataStructures));
        $datastructure = $dataStructures[0];

        $this->checkStructure($datastructure, 'QNA', 'OECD', 'Quarterly National Accounts');

        $dimensions = $datastructure->getListOfDimensions();
        $this->assertEquals(4, count($dimensions));
        $this->checkDimension($dimensions[0], 'LOCATION', 'Country', 1);
        $this->checkCodelist($dimensions[0]->getCodelist(), 'CL_QNA_LOCATION', 'OECD');
        $this->checkDimension($dimensions[3], 'FREQUENCY', 'Frequency', 4);
        $this->checkCodelist($dimensions[3]->getCodelist(), 'CL_QNA_FREQUENCY', 'OECD');

        $this->checkRefCodes($dimensions);
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
     * @param Codelist $codelist
     * @param string $id
     * @param string $agency
     */
    private function checkCodelist(Codelist $codelist, $id, $agency)
    {
        $this->assertSame($id, $codelist->getId());
        $this->assertSame($agency, $codelist->getAgency());
    }

    /**
     * @param Dimension[] $dimensions
     */
    private function checkRefCodes(array $dimensions)
    {
        $codes = [
            'AUS' => 'Australia',
            'AUT' => 'Austria',
            'BEL' => 'Belgium',
            'CAN' => 'Canada',
            'CZE' => 'Czech Republic',
            'DNK' => 'Denmark',
            'FIN' => 'Finland',
            'FRA' => 'France',
            'DEU' => 'Germany',
            'GRC' => 'Greece',
            'HUN' => 'Hungary',
            'ISL' => 'Iceland',
            'IRL' => 'Ireland',
            'ITA' => 'Italy',
            'JPN' => 'Japan',
            'KOR' => 'Korea',
            'LUX' => 'Luxembourg',
            'MEX' => 'Mexico',
            'NLD' => 'Netherlands',
            'NZL' => 'New Zealand',
            'NOR' => 'Norway',
            'POL' => 'Poland',
            'PRT' => 'Portugal',
            'SVK' => 'Slovak Republic',
            'ESP' => 'Spain',
            'SWE' => 'Sweden',
            'CHE' => 'Switzerland',
            'TUR' => 'Turkey',
            'GBR' => 'United Kingdom',
            'USA' => 'United States',
            'ARG' => 'Argentina',
            'NMEC' => 'Non-OECD Economies',
            'BRA' => 'Brazil',
            'CHL' => 'Chile',
            'CHN' => 'China (People\'s Republic of)',
            'COL' => 'Colombia',
            'CRI' => 'Costa Rica',
            'EST' => 'Estonia',
            'IND' => 'India',
            'IDN' => 'Indonesia',
            'ISR' => 'Israel',
            'LVA' => 'Latvia',
            'LTU' => 'Lithuania',
            'RUS' => 'Russia',
            'SAU' => 'Saudi Arabia',
            'SVN' => 'Slovenia',
            'ZAF' => 'South Africa',
            'DEW' => 'Former Federal Republic of Germany',
            'FRME' => 'Former Economies',
            'OTF' => 'OECD - FORMER TOTAL',
            'EU15' => 'European Union (15 countries)',
            'EU28' => 'European Union (28 countries)',
            'OECD' => 'OECD - Total',
            'OECDE' => 'OECD - Europe',
            'G-7' => 'G7',
            'G-20' => 'G20',
            'NAFTA' => 'NAFTA',
            'EA19' => 'Euro area (19 countries)'
        ];
        $this->assertEquals($codes, $dimensions[0]->getCodelist()->getCodes());
    }
}
