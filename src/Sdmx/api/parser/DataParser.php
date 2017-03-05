<?php

namespace Sdmx\api\parser;


use Sdmx\api\entities\DataflowStructure;
use Sdmx\api\entities\PortableTimeSeries;

interface DataParser
{
    /**
     * @param string $data
     * @param DataflowStructure $dsd
     * @param string $dataflow
     * @param boolean $containsData
     * @return PortableTimeSeries[]
     */
    public function parse($data, DataflowStructure $dsd, $dataflow, $containsData);
}