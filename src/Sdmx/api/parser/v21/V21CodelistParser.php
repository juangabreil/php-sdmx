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
    public function parseCodesFromNode(SimpleXMLElement $data)
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

    /**
     * Parses codelist into a hash indexed by codelist name and containing an array of codes
     * @param string $data
     * @return string[]
     */
    public function parseCodes($data)
    {
        $xml = new SimpleXMLElement($data);
        $codelist = $xml->xpath('//mes:Structure/mes:Structures/str:Codelists/str:Codelist')[0];

        return $this->parseCodesFromNode($codelist);
    }
}