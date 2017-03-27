<?php

namespace Sdmx\Tests\api\parser\v21;

class V21ParserFixtures
{
    const DATAFLOW_FILE = 'dataflow';
    const XML_EXTENSION = '.xml';
    const DATA_FOLDER = 'data';
    const CODELIST_FILE = 'codelist';
    const DATASTRUCTURE_FILE = 'datastructure';
    const EDU_NON_FINANCE_FILE = 'edu_non_finance_';
    const QNA_DATA_FILE = 'qna_data';

    /**
     * @param string $number
     * @return string
     */
    public static function getDataflow($number = '')
    {
        return file_get_contents(self::getFileUrl(self::DATAFLOW_FILE, $number));
    }

    public static function getCodelist()
    {
        return file_get_contents(self::getFileUrl(self::CODELIST_FILE));
    }

    public static function getDatastructure($number = '')
    {
        return file_get_contents(self::getFileUrl(self::DATASTRUCTURE_FILE, $number));
    }

    public static function getEduNonFinance($data)
    {
        return file_get_contents(self::getFileUrl(self::EDU_NON_FINANCE_FILE, $data));
    }

    public static function getQnaData(){
        return file_get_contents(self::getFileUrl(self::QNA_DATA_FILE));
    }

    public static function getErrorData(){
        return file_get_contents(self::getFileUrl('error'));
    }

    private static function getFileUrl($filename, $suffix = '')
    {
        return __DIR__ . DIRECTORY_SEPARATOR . self::DATA_FOLDER . DIRECTORY_SEPARATOR . $filename . $suffix . self::XML_EXTENSION;
    }

}