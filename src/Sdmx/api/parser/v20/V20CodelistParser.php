<?php

namespace Sdmx\api\parser\v20;


use Sdmx\api\parser\CodelistParser;
use SimpleXMLElement;

class V20CodelistParser implements CodelistParser
{

    /**
     * Parses codelist into a hash indexed by codelist name and containing an array of codes
     * @param SimpleXMLElement $data
     * @return string[]
     */
    public function parseCodesFromNode(SimpleXMLElement $data)
    {
        $result = [];

        $codes = $data->xpath('./*[name()="Code"]');

        foreach ($codes as $code){
            $name = $code->xpath('./*[name()="Description"][@xml:lang="en"]');
            if(count($name) > 0){
                $result[(string) $code['value']] = (string)$name[0];
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
        return $this->parseCodesFromNode($xml->xpath('//message:CodeLists/*[name()="CodeList"]')[0]);
    }
}