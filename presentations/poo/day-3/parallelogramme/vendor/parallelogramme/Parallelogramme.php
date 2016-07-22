<?php

namespace Clever\Institut\Poe\Php\Parallelogramme;

/**
 * Class parallelogramme
 * @package Clever\Institut\Poe\Php\Parallelogramme
 */
class Parallelogramme extends Rectangle
{

    /**
     * @var float
     */
    private $hauteur;

    /**
     * Parallelogramme constructor.
     * @param $x
     * @param $y
     * @param $longueur
     * @param $largeur
     * @param $hauteur
     */
    public function __construct($x, $y, $longueur, $largeur, $hauteur)
    {
        parent::__construct($x, $y, $longueur, $largeur);

        $this->hauteur = (float)$hauteur;
    }

    /**
     * @return float
     */
    public function getHauteur()
    {
        return $this->hauteur;
    }

    /**
     * @param float $hauteur
     * @return Parallelogramme
     */
    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;
        return $this;
    }

    /**
     * @return float
     */
    public function aire()
    {
        return $this->getLongueur() * $this->hauteur;
    }

    /**
     * @return float
     */
    public function volume()
    {
        return $this->aire() * $this->getLargeur();
    }

}
