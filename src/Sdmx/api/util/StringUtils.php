<?php

namespace Sdmx\api\util;


class StringUtils
{
    /**
     * @param array $array
     * @return string
     */
    public static function convertArrayToString($array)
    {
        $str = '';

        foreach ($array as $key => $value) {
            $str .= $key . ' => ' . $value . "\n";
        }

        return $str;
    }
}