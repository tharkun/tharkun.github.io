<?php

namespace Clever\Institut\Poe\Php\Entity\Attribute;

/**
 * Class Role
 * @package Clever\Institut\Poe\Php\Entity\Attribute
 */
trait Id
{
    /**
     * @var
     */
    public $id;
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}
