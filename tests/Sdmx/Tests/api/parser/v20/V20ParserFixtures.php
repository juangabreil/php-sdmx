<?php

namespace Sdmx\Tests\api\parser\v20;

class V20ParserFixtures
{
    const DATA_STRUCTURES_FILE = 'datastructures';
    const DATA_STRUCTURE_FILE = 'datastructure';
    const XML_EXTENSION = '.xml';
    const DATA_FOLDER = 'data';
    const QNA_DATA_FILE = 'qna_data';

    /**
     * @return string
     */
    public static function getDataStructures()
    {
        return file_get_contents(self::getFileUrl(self::DATA_STRUCTURES_FILE));
    }

    /**
     * @return string
     */
    public static function getDataStructure()
    {
        return file_get_contents(self::getFileUrl(self::DATA_STRUCTURE_FILE));
    }

    /**
     * @return string
     */
    public static function getQnaData()
    {
        return file_get_contents(self::getFileUrl(self::QNA_DATA_FILE));
    }

    private static function getFileUrl($filename, $suffix = '')
    {
        return __DIR__ . DIRECTORY_SEPARATOR . self::DATA_FOLDER . DIRECTORY_SEPARATOR . $filename . $suffix . self::XML_EXTENSION;
    }

}