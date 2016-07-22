<?php

namespace Clever\Institut\Poe\Php\Parallelogramme;

/**
 * Class Rectangle
 * @package Clever\Institut\Poe\Php\Parallelogramme
 */
class Rectangle extends Point
{
    /**
     * @var float
     */
    private $longueur;

    /**
     * @var float
     */
    private $largeur;

    /**
     * Rectangle constructor.
     * @param $x
     * @param $y
     * @param $longueur
     * @param $largeur
     */
    public function __construct($x, $y, $longueur, $largeur)
    {
        parent::__construct($x, $y);

        $this->longueur = (float)$longueur;
        $this->largeur = (float)$largeur;
    }

    /**
     * @return float
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * @param float $longueur
     * @return Rectangle
     */
    public function setLongueur($longueur)
    {
        $this->longueur = (float)$longueur;
        return $this;
    }

    /**
     * @return float
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * @param float $largeur
     * @return Rectangle
     */
    public function setLargeur($largeur)
    {
        $this->largeur = (float)$largeur;
        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "(".$this->getX().", ".$this->getY().", $this->longueur, $this->largeur)";
    }

    /**
     * @return float
     */
    public function aire()
    {
        return $this->longueur * $this->largeur;
    }
}
