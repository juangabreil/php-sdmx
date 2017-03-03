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
use Sdmx\api\parser\v21\V21CodelistParser;
use Sdmx\api\parser\v21\V21DataStructureParser;


class V21DataStructureParserTest extends TestCase
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
        $this->checkCodelist($dimensions[0]->getCodelist(), 'CL_UNIT', '1.0', 'UNESCO');
        $this->assertEquals([], $dimensions[0]->getCodelist()->getCodes());

        $this->checkDimension($dimensions[6], 'EDU_LEVEL', 'EDU_LEVEL', 7);
        $this->checkCodelist($dimensions[6]->getCodelist(), 'CL_EDU_LEVEL', '1.0', 'UNESCO');
        $this->assertEquals([], $dimensions[6]->getCodelist()->getCodes());
    }

    public function testParseDataStructureWithChildren()
    {
        $dataStructures = $this->parser->parse(ParserFixtures::$DATA_STRUCTURE1);

        $this->assertNotNull($dataStructures);
        $this->assertEquals(1, count($dataStructures));
        $datastructure = $dataStructures[0];

        $this->checkDataStructure($datastructure, 'EDU_FINANCE', 'UNESCO', '1.0', 'TIME_PERIOD');

        $dimensions = $datastructure->getListOfDimensions();
        $this->assertEquals(7, count($dimensions));
        $this->checkDimension($dimensions[0], 'UNIT_MEASURE', 'Unit of measure', 1);
        $this->checkCodelist($dimensions[0]->getCodelist(), 'CL_UNIT', '1.0', 'UNESCO');
        $this->checkDimension($dimensions[6], 'EDU_LEVEL', 'Level of education', 7);
        $this->checkCodelist($dimensions[6]->getCodelist(), 'CL_EDU_LEVEL', '1.0', 'UNESCO');

        $this->checkRefCodes($dimensions);
    }

    protected function setUp()
    {
        $this->parser = new V21DataStructureParser(new V21CodelistParser());
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
     */
    private function checkCodelist(Codelist $codelist, $id, $version, $agency)
    {
        $this->assertSame($id, $codelist->getId());
        $this->assertSame($version, $codelist->getVersion());
        $this->assertSame($agency, $codelist->getAgency());
    }

    /**
     * @param $dimensions
     */
    private function checkRefCodes($dimensions)
    {
        $codes = ['PER' => 'Number of persons',
            'FTE' => 'Full-time equivalent',
            'HR_WEEK' => 'Average number of hours worked per week',
            'USD' => 'US dollar',
            'PT' => 'Percentage',
            'YR' => 'Years',
            'GNI' => 'as % of GNI',
            'PPP' => 'Purchasing power parity',
            'NAC' => 'Local currency',
            'GR' => 'Grade',
            'GPI' => 'Gender parity index',
            'DSI' => 'Dissimilarity index',
            'GDP_CAP' => 'as % of GDP per capita',
            'USD_CONST' => 'Constant US $',
            'PPP_CONST' => 'Constant PPP $',
            'PT_EMP' => 'as % of total employment',
            'NB' => 'Number',
            'CAP_1000000POP' => 'Per million inhabitants',
            'CAP_100000POP' => 'Per hundred thousand inhabitants',
            'CAP_1000LF' => 'Per thousand labour force',
            'CAP_1000EMP' => 'Per thousand total employment',
            'PT_GERD' => 'as % of total GERD',
            'PT_RD_PS' => 'as % of total R&D personnel',
            'PT_RES' => 'as % of total researchers',
            'PT_TEC' => 'as % of total technicians',
            'PT_OTHER_STAFF' => 'as % of total other supporting staff',
            'GDP' => 'as % of GDP',
            'C_SCREEN_INDOOR' => 'Per indoor screen',
            'CAP' => 'Per capita',
            'GOV_EXP_T' => 'as % of total government expenditure (all sectors)',
            'GOV_EXP_EDU' => 'as % of total government expenditure on education',
            'EXP_T' => 'as % of total expenditure',
            'CAP_PPP' => 'Per capita - current PPP $',
            'CAP_PPP_CONST' => 'Per capita - constant PPP $',
            'RES_FTE_PPP' => 'Per researcher (FTE) - current PPP $',
            'RES_FTE_PPP_CONST' => 'Per researcher (FTE) - constant PPP $',
            'RES_HC_PPP' => 'Per researcher (HC) - current PPP $',
            'RES_HC_PPP_CONST' => 'Per researcher (HC) - constant PPP $',
            'PT_EMP_AV_MEDIA' => 'as % of persons employed in audio-visual and interactive media',
            'PT_EMP_CULT_IND' => 'as % of persons employed in cultural industries',
            'PT_EMP_CULT_IND_J_GT1' => 'as % of persons employed in cultural industries with more than one job',
            'PT_EMP_CULT_IND2' => 'as % of persons holding a secondary job in cultural industries',
            'PT_EMP_CULT_NH' => 'as % of persons employed in cultural and natural heritage',
            'PT_EMP_CULT_OCC' => 'as % of persons employed in cultural occupations',
            'PT_EMP_CULT_OCC_FT' => 'as % of persons working full-time in cultural occupations',
            'PT_EMP_CULT_OCC_J_GT1' => 'as % of persons employed in cultural occupations with more than one job',
            'PT_EMP_CULT_OCC_PT' => 'as % of persons working part-time in cultural occupations',
            'PT_EMP_CULT_OCC_PERM' => 'as % of regular workers in cultural occupations',
            'PT_EMP_CULT_OCC_SAL' => 'as % of employees in cultural occupations',
            'PT_EMP_CULT_OCC_SELF' => 'as % of persons self-employed in cultural occupations',
            'PT_EMP_CULT_OCC_TEMP' => 'as % of temporary workers in cultural occupations',
            'PT_EMP_CULT_OCC2' => 'as % of persons holding a secondary job in cultural occupations',
            'PT_EMP_DESIGN' => 'as % of persons employed in design and creative services',
            'PT_EMP_EDU' => 'as % of persons employed in education and training',
            'PT_EMP_FT' => 'as % of persons working full-time',
            'PT_EMP_ICH' => 'as % of persons employed in intangible cultural heritage',
            'PT_EMP_J_GT1' => 'as % of persons with more than one job',
            'PT_EMP_J1' => 'as % of persons with only one job',
            'PT_EMP_L01_02' => 'as % of total employment with no schooling',
            'PT_EMP_L03_1' => 'as % of total employment with some or completed primary education',
            'PT_EMP_L2T4' => 'as % of total employment with secondary or post-secondary non-tertiary education',
            'PT_EMP_L5T8' => 'as % of total employment with tertiary education',
            'PT_EMP_NON_CULT_IND' => 'as % of persons employed in non-cultural industries',
            'PT_EMP_NON_CULT_IND_J_GT1' => 'as % of persons employed in non cultural industries with more than one job',
            'PT_EMP_NON_CULT_IND2' => 'as % of persons holding a secondary job in non cultural industries',
            'PT_EMP_NON_CULT_OCC' => 'as % of persons employed in non cultural occupations',
            'PT_EMP_NON_CULT_OCC_FT' => 'as % of persons working full-time in non cultural occupations',
            'PT_EMP_NON_CULT_OCC_J_GT1' => 'as % of persons employed in non cultural occupations with more than one job',
            'PT_EMP_NON_CULT_OCC_PT' => 'as % of persons working part-time in non cultural occupations',
            'PT_EMP_NON_CULT_OCC_PERM' => 'as % of regular workers in non cultural occupations',
            'PT_EMP_NON_CULT_OCC_SAL' => 'as % of employees in non cultural occupations',
            'PT_EMP_NON_CULT_OCC_SELF' => 'as % of persons self-employed in non cultural occupations',
            'PT_EMP_NON_CULT_OCC_TEMP' => 'as % of temporary workers in non cultural occupations',
            'PT_EMP_NON_CULT_OCC2' => 'as % of persons holding a secondary job in non cultural occupations',
            'PT_EMP_PERF' => 'as % of persons employed in performance and celebration',
            'PT_EMP_PRINT' => 'as % of persons employed in books and press',
            'PT_EMP_PT' => 'as % of persons working part-time',
            'PT_EMP_PERM' => 'as % of regular workers',
            'PT_EMP_SAL' => 'as % of employees',
            'PT_EMP_SELF' => 'as % of persons self-employed',
            'PT_EMP_TEMP' => 'as % of temporary workers',
            'PT_EMP_V_ARTS' => 'as % of persons employed in visual arts and crafts',
            'PT_EMP_Y_GE65' => 'as % of total employment, 65 and over',
            'PT_EMP_Y15T24' => 'as % of total employment, 15-24 years old',
            'PT_EMP_Y25T64' => 'as % of total employment, 25-64 years old',
            'PT_EMP_TEMP_AV_MEDIA' => 'as % of temporary workers in audio-visual and interactive media',
            'PT_EMP_TEMP_CULT_NH' => 'as % of temporary workers in cultural and natural heritage',
            'PT_EMP_TEMP_DESIGN' => 'as % of temporary workers in design and creative services',
            'PT_EMP_TEMP_EDU' => 'as % of temporary workers in education and training',
            'PT_EMP_TEMP_ICH' => 'as % of temporary workers in intangible cultural heritage',
            'PT_EMP_TEMP_PERF' => 'as % of temporary workers in performance and celebration',
            'PT_EMP_TEMP_PRINT' => 'as % of temporary workers in books and press',
            'PT_EMP_TEMP_V_ARTS' => 'as % of temporary workers in visual arts and crafts',
            'LB_1000' => 'Per 1,000 live births',
            'PT_ANNUAL' => 'annual %',
            'BIRTH_R_WOMEN' => 'Births per woman',
            'PT_POP_Y15T49' => 'as % of population aged 15-49',
            'PT_POP' => 'as % of total population',
            'PT_ODA' => 'as % of total ODA',
            'GLPI' => 'Geographic location parity index',
            'SESPI' => 'Socio-economic status parity index',
            'IPI' => 'Immigration parity index'];
        $this->assertEquals($codes, $dimensions[0]->getCodelist()->getCodes());
    }


}
