<?php

namespace Sdmx\api\parser\v21;


use Sdmx\api\parser\CodelistParser;
use SimpleXMLElement;

class V21CodelistParser implements CodelistParser
{
    /**
     * Parses codelist into a hash indexed by codelist name and containing an array of codes
     * @param SimpleXMLElement $data
     * @return string[]
     */
    public function parse(SimpleXMLElement $data)
    {
        $result = [];

        $codes = $data->xpath('.//str:Code');

        foreach ($codes as $code){
            $name = $code->xpath('.//com:Name[@xml:lang="en"]');
            if(count($name) > 0){
                $result[(string) $code['id']] = (string)$name[0];
            }
        }

        return $result;
    }
}