<?php

namespace Clever\Institut\Poe\Php\Figure;

/**
 * Class Disque
 * @package Clever\Institut\Poe\Php\Figure
 */
class Disque extends Figure
{
    /**
     * @var Point
     */
    private $centre;

    /**
     * @var float
     */
    private $rayon;

    /**
     * Disque constructor.
     * @param $name
     * @param Point $centre
     * @param $rayon
     */
    public function __construct($name, Point $centre, $rayon)
    {
        parent::__construct($name);

        $this->centre = $centre;
        $this->rayon = (float)$rayon;
    }

    /**
     * @return float
     */
    public function aire()
    {
        return \M_PI * pow($this->rayon, 2);
    }
}
