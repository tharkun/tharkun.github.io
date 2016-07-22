<?php

namespace Clever\Institut\Poe\Php\Figure;

/**
 * Class Figure
 * @package Clever\Institut\Poe\Php\Figure
 */
abstract class Figure
{
    /**
     * @var string
     */
    private $name;

    /**
     * Figure constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = (string)$name;
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
     * @return Figure
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    abstract public function aire();

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf("This figure is an %s", get_class($this));
    }
}
