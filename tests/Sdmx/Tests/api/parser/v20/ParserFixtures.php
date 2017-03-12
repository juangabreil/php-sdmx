<?php

namespace Sdmx\Tests\api\parser\v20;

class ParserFixtures
{
    const DATAFLOW_FILE = 'dataflows';
    const XML_EXTENSION = '.xml';
    const DATA_FOLDER = 'data';

    /**
     * @return string
     */
    public static function getDataflow()
    {
        return file_get_contents(self::getFileUrl(self::DATAFLOW_FILE));
    }

    private static function getFileUrl($filename, $suffix = '')
    {
        return __DIR__ . DIRECTORY_SEPARATOR . self::DATA_FOLDER . DIRECTORY_SEPARATOR . $filename . $suffix . self::XML_EXTENSION;
    }

}