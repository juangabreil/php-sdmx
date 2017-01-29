<?php

namespace Sdmx\api\client;


use Sdmx\api\entities\Dataflow;
use Sdmx\api\entities\DataflowStructure;
use Sdmx\api\entities\DsdIdentifier;

interface SdmxClient
{
    /**
     * Gets all dataflows.
     * @return array[string]Dataflow
     */
    public function getDataflows();

    /**
     * Gets the dataflow information for a given dataflow.
     * @param string $dataflow
     * @param string $agency
     * @param string $version
     * @return Dataflow
     */
    public function getDataflow($dataflow, $agency, $version);

    /**
     * Gets the structure for a given dataflow.
     * @param DsdIdentifier $dsd
     * @param bool $full if true, for 2.1 providers it retrieves the full dsd, with all the codelists.
     * @return DataflowStructure
     */
    public function getDataflowStructure($dsd, $full = false);

    /**
     * Gets all the codes from this provider for a given codelist.
     * @param string $codelist
     * @param string $agency
     * @param string $version
     * @return array[string]string
     */
    public function getCodes($codelist, $agency, $version);
}