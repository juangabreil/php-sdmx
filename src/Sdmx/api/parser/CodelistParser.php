<?php

namespace Sdmx\api\parser;


use SimpleXMLElement;

interface CodelistParser
{
    /**
     * Parses codelist into a hash indexed by codelist name and containing an array of codes
     * @param SimpleXMLElement $data
     * @return string[]
     */
    public function parse(SimpleXMLElement $data);
}