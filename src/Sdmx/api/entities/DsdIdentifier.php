<?php

namespace Sdmx\api\entities;

/**
 * Class DsdIdentifier
 * @package Sdmx\api\entities
 */
class DsdIdentifier
{
    /**
     * @var string $id
     */
    private $id;

    /**
     * @var string $agency
     */
    private $agency;

    /**
     * @var string $version
     */
    private $version;

    /**
     * DsdIdentifier constructor.
     * @param string $id
     * @param string $agency
     * @param string $version
     */
    public function __construct($id, $agency, $version)
    {
        $this->id = $id;
        $this->agency = $agency;
        $this->version = $version;
    }

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
     * @return string
     */
    public function getFullIdentifier()
    {
        $dsd = $this->id;
        if ($this->agency !== NULL) {
            $dsd = $this->agency . '/' . $dsd;
        }
        if ($this->version !== NULL) {
            $dsd .= '/' . $this->version;
        }

        return $dsd;
    }

    function __toString()
    {
        return $this->getFullIdentifier();
    }
}