<?php

namespace Sdmx\api\parser\v20;


use Sdmx\api\entities\DataflowStructure;
use Sdmx\api\parser\DataStructureParser;
use SimpleXMLElement;

class V20DataStructureParser implements DataStructureParser
{

    /**
     * @param string $data
     * @return DataflowStructure[]
     */
    public function parse($data)
    {
        $xml = new SimpleXMLElement($data);
        $ns = $xml->getNamespaces(true);
        foreach($ns as $key => $value){
            $xml->registerXPathNamespace($key, $value);
        }
        $result = [];
        $families = $xml->xpath('/message:Structure/message:KeyFamilies/*[name()="KeyFamily"]');

        foreach ($families as $family){
            $result[] = $this->parseStructure($family);
        }

        return $result;
    }

    /**
     * @param SimpleXMLElement $family
     * @return DataflowStructure
     */
    private function parseStructure(SimpleXMLElement $family)
    {
        $result = new DataflowStructure();

        $result->setId((string) $family['id']);
        $result->setAgency((string) $family['agencyID']);

        $name = $family->xpath('./*[name()="Name"][@xml:lang="en"]');
        if(count($name) > 0){
            $result->setName((string)$name[0]);
        }

        return $result;
    }
}