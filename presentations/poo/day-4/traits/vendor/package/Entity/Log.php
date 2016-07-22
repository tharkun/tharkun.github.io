<?php

namespace Clever\Institut\Poe\Php\Entity;

use Clever\Institut\Poe\Php\Entity\Attribute\Id;
use Clever\Institut\Poe\Php\Entity\Attribute\CreatedDate;
use Clever\Institut\Poe\Php\Entity\Attribute\ModifiedDate;

/**
 * Class Log
 * @package Clever\Institut\Poe\Php\Entity
 */
class Log
{
    use Id;
    use CreatedDate;

    /**
     * @var
     */
    public $value;

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
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return Log
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}
