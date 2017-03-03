<?php

namespace Sdmx\api\parser;


use Sdmx\api\entities\DataflowStructure;

interface DataStructureParser
{
    /**
     * @param string $data
     * @return DataflowStructure[]
     */
    public function parse($data);
}