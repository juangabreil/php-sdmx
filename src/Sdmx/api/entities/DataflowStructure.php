<?php

namespace Sdmx\api\entities;

use Sdmx\api\util\StringUtils;

/**
 * Class DataflowStructure
 * @package Sdmx\api\entities
 */
class DataflowStructure
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
     * @var string version
     */
    private $version;
    /**
     * @var string timeDimension
     */
    private $timeDimension;
    /**
     * @var array[string]Dimension
     */
    private $dimensions;

    /**
     * DataflowStructure constructor.
     */
    public function __construct()
    {
        $this->dimensions = array();
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
     * @return string
     */
    public function getTimeDimension()
    {
        return $this->timeDimension;
    }

    /**
     * @param string $timeDimension
     */
    public function setTimeDimension($timeDimension)
    {
        $this->timeDimension = $timeDimension;
    }

    /**
     * @return array
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * @param array $dimensions
     */
    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;
    }

    /**
     * @return array[Dimension]
     */
    public function getListOfDimensions()
    {
        return array_values($this->dimensions);
    }

    /**
     * @param Dimension $dimension
     */
    public function setDimension($dimension)
    {
        $this->dimensions[$dimension->getId()] = $dimension;
    }

    /**
     * @param string $id
     * @return bool
     */
    public function hasDimension($id)
    {
        return in_array($id, $this->dimensions);
    }

    /**
     * @param string $id
     * @return Dimension
     */
    public function getDimensionById($id)
    {
        return $this->dimensions[$id];
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

    /**
     * @inheritDoc
     */
    function __toString()
    {
        $str = 'DSD [' . "\n";
        $str .= '   id=' . $this->getFullIdentifier() . "\n";
        $str .= '   name=' . $this->name . "\n";
        $str .= '   dimensions=' . StringUtils::convertArrayToString($this->dimensions) . "\n";

        return $str;
    }


    public function getMeasure()
    {
        return 'OBS_VALUE';
    }


}