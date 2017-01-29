<?php

namespace Sdmx\util;


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

    /**
     * @param array $array
     * @param string $glue
     * @param bool $filterNull
     * @return string
     */
    public static function joinArrayElements($array, $glue, $filterNull = true)
    {
        if ($filterNull) {
            $values = array_filter($array, function ($var) {
                return !is_null($var);
            });
        } else {
            $values = $array;
        }

        return implode($glue, $values);
    }
}