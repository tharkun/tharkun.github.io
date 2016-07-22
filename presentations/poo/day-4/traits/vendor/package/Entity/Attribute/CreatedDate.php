<?php

namespace Clever\Institut\Poe\Php\Entity\Attribute;

/**
 * Class CreatedDate
 * @package Clever\Institut\Poe\Php\Entity\Attribute
 */
trait CreatedDate
{
    /**
     * @var
     */
    public $createdDate;

    /**
    /**
     * @return mixed
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param $createdDate
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
        return $this;
    }
}
