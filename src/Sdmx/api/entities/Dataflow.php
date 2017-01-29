<?php

namespace Sdmx\api\entities;

use Sdmx\util\StringUtils;

/**
 * Class Dataflow
 * @package Sdmx\api\entities
 *
 */
class Dataflow
{
    /**
     * @var string $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;
    /**
     * @var string $agency
     */
    private $agency;
    /**
     * @var string $version
     */
    private $version;
    /**
     * @var DsdIdentifier $dsdIdentifier
     */
    private $dsdIdentifier;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getAgency()
    {
        return $this->agency;
    }

    /**
     * @param string $agency
     */
    public function setAgency($agency)
    {
        $this->agency = $agency;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return DsdIdentifier
     */
    public function getDsdIdentifier()
    {
        return $this->dsdIdentifier;
    }

    /**
     * @param DsdIdentifier $dsdIdentifier
     */
    public function setDsdIdentifier($dsdIdentifier)
    {
        $this->dsdIdentifier = $dsdIdentifier;
    }

    function __toString()
    {
        $str = 'Dataflow [' . "\n";
        $str .= '   id=' . $this->getFullIdentifier() . "\n";
        $str .= '   name=' . $this->name . "\n";
        $str .= '   dsd=' . $this->dsdIdentifier . "\n";
        $str .= ']';
        return $str;
    }

    public function getFullIdentifier()
    {
        return StringUtils::joinArrayElements([$this->agency, $this->id, $this->version], '/');
    }
}