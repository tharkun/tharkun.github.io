<?php

namespace Clever\Institut\Poe\Php\Entity\Attribute;

/**
 * Class ModifiedDate
 * @package Clever\Institut\Poe\Php\Entity\Attribute
 */
trait ModifiedDate
{
    /**
     * @var
     */
    public $modifiedDate;
    
    /**
     * @return mixed
     */
    public function getModifiedDate()
    {
        return $this->modifiedDate;
    }

    /**
     * @param $modifiedDate
     * @return $this
     */
    public function setModifiedDate($modifiedDate)
    {
        $this->modifiedDate = $modifiedDate;
        return $this;
    }
}
