<?php

namespace Sdmx\api\parser;

use Sdmx\api\entities\Dataflow;

interface DataflowParser
{
    /**
     * @param string $data
     * @return Dataflow[]
     */
    public function parse($data);
}