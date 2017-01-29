<?php

namespace Sdmx\api\entities;

use Sdmx\util\StringUtils;

/**
 * Class Codelist
 * @package Sdmx\api\entities
 */
class Codelist
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
     * @var array[string]string
     */
    private $codes;

    /**
     * Codelist constructor.
     * @param string $id
     * @param string $agency
     * @param string $version
     * @param array $codes
     */
    public function __construct($id, $agency, $version, array $codes)
    {
        $this->id = $id;
        $this->agency = $agency;
        $this->version = $version;
        $this->codes = $codes;
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
     * @return array
     */
    public function getCodes()
    {
        return $this->codes;
    }

    /**
     * @param array $codes
     */
    public function setCodes($codes)
    {
        $this->codes = $codes;
    }

    /**
     * @inheritDoc
     */
    function __toString()
    {
        $str = 'Codelist [' . "\n";
        $str .= '   id=' . $this->getFullIdentifier() . "\n";
        $str .= '   codes=' . StringUtils::convertArrayToString($this->codes) . "\n";
        $str .= ']';

        return $str;
    }

    /**
     * @return string
     */
    public function getFullIdentifier()
    {
        return StringUtils::joinArrayElements([$this->agency, $this->id, $this->version], '/');
    }

}