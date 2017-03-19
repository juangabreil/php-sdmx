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
        $dataWoNs = preg_replace('/xmlns[^=]*="[^"]*"/i', '', $data);
        $dataWoNs = preg_replace('/<!\[CDATA\[(.*)\]\]>/s', '$1', $dataWoNs);
        $dataWoNs = preg_replace('/<!--(.*)-->/s', '$1', $dataWoNs);
        $dataWoNs = preg_replace('/[a-zA-Z]+:([a-zA-Z]+[=>])/', '$1', $dataWoNs);
        $dataWoNs = preg_replace('/(<\/*)[^>:]+:/', '$1', $dataWoNs);

        return $dataWoNs;
    }
}