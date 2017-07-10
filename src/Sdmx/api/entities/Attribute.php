<?php

namespace Sdmx\api\entities;


class Attribute
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
     * @var Codelist $codelist
     */
    private $codelist;

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


}