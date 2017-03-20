<?php

namespace Sdmx\api\parser;


class ParserUtils
{
    /**
     * @param string $data
     * @return string
     */
    public static function removeNamespaces($data)
    {
        $data = str_replace(PHP_EOL, '', $data);
        $dataWoNs = preg_replace('/xmlns[^=]*="[^"]*"/i', '', $data); //Remove ns declarations.
        //$dataWoNs = preg_replace('/<!\[CDATA\[(.*)\]\]>/', '$1', $dataWoNs); //Replace CDATA by content.
        //$dataWoNs = preg_replace('/<!--(.*)-->/', '', $dataWoNs); //Remove comments
        $dataWoNs = preg_replace('/[a-z0-9]+:([a-z0-9]+=)/i', '$1', $dataWoNs); //Remove ns in attributes
        $dataWoNs = preg_replace('/<[a-z0-9]+:([a-z0-9]+)/i', '<$1', $dataWoNs); //Remove ns in opening tags
        $dataWoNs = preg_replace('/<\/[a-z0-9]+:([a-z0-9]+)/i', '</$1', $dataWoNs); //Remove ns in closing tags

        return $dataWoNs;
    }
}