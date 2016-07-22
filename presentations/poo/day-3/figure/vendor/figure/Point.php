<?php

namespace Clever\Institut\Poe\Php\Figure;

/**
 * Class Point
 * @package Clever\Institut\Poe\Php\Figure
 */
class Point
{
    /**
     * @var float
     */
    private $x;

    /**
     * @var float
     */
    private $y;

    /**
     * Point constructor.
     * @param $x
     * @param $y
     */
    public function __construct($x, $y)
    {
        $this->x = (float)$x;
        $this->y = (float)$y;
    }

    /**
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param float $x
     * @return Point
     */
    public function setX($x)
    {
        $this->x = (float)$x;
        return $this;
    }

    /**
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param float $y
     * @return Point
     */
    public function setY($y)
    {
        $this->y = (float)$y;
        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "($this->x, $this->y)";
    }
}
