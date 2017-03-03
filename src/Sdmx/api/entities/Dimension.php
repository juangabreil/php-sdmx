<?php

namespace Sdmx\api\entities;


/**
 * Class Dimension
 * @package Sdmx\api\entities
 */
class Dimension
{
    /**
     * @var string $id
     */
    private $id;

    /**
     * @var int $position
     */
    private $position;

    /**
     * @var Codelist $codelist
     */
    private $codelist;

    /**
     * @var string $name
     */
    private $name;

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
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return Codelist
     */
    public function getCodelist()
    {
        return $this->codelist;
    }

    /**
     * @param Codelist $codelist
     */
    public function setCodelist($codelist)
    {
        $this->codelist = $codelist;
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
     * @inheritDoc
     */
    function __toString()
    {
        $str = 'Dimension [' . "\n";
        $str .= '   id=' . $this->id . "\n";
        $str .= '   position=' . $this->position . "\n";
        $str .= '   codelist=' . $this->codelist . "\n";
        $str .= ']';


        return $str;
    }


}