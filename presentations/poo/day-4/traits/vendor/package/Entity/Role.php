<?php

namespace Clever\Institut\Poe\Php\Entity;

use Clever\Institut\Poe\Php\Entity\Attribute\Id;
use Clever\Institut\Poe\Php\Entity\Attribute\CreatedDate;
use Clever\Institut\Poe\Php\Entity\Attribute\ModifiedDate;

/**
 * Class Role
 * @package Clever\Institut\Poe\Php\Entity
 */
class Role
{
    use Id;
    use CreatedDate, ModifiedDate;

    /**
     * @var
     */
    public $name;

    /**
     * user constructor.
     * @param array $row
     */
    public function __construct(array $row)
    {

    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
