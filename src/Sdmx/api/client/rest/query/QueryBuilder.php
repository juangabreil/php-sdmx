<?php

namespace Sdmx\api\client\rest\query;


interface QueryBuilder
{
    /**
     * @param string $agency
     * @param string $dataflow
     * @param string $version
     * @return string
     */
    public function getDataflowQuery($agency, $dataflow, $version);

    /**
     * @param string $id
     * @param string $agency
     * @param string $version
     * @param boolean $full
     * @return string
     */
    public function getDsdQuery($id, $agency, $version, $full);
}