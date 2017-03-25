<?php

namespace Sdmx\api\parser\v21;


use Sdmx\api\parser\CodelistParser;
use Sdmx\api\parser\ParserUtils;
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

        $codes = $data->xpath('./Code');

        foreach ($codes as $code){
            $name = $code->xpath('./Name[@lang="en"]');
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
        $dataWoNs = ParserUtils::removeNamespaces($data);
        $xml = new SimpleXMLElement($dataWoNs);
        $codelist = $xml->xpath('/Structure/Structures/Codelists/Codelist')[0];

        return $this->parseCodesFromNode($codelist);
    }
}