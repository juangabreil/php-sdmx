<?php

namespace Sdmx\api\parser;


use Sdmx\api\entities\Dataflow;
use SimpleXMLElement;

class V21DataflowParser implements DataflowParser
{

    /**
     * @param string $data
     * @return Dataflow[]
     */
    public function parse($data)
    {
        $result = array();
        $dataflows = new SimpleXMLElement($data);
    }
}