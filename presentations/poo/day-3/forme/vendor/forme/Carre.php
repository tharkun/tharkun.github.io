<?php

namespace Clever\Institut\Poe\Php\Forme;

class Carre implements Forme
{
    /**
     * @var float
     */
    private $cote;

    /**
     * Carre constructor.
     * @param $cote
     */
    public function __construct($cote)
    {
        $this->cote = (float)$cote;
    }

    /**
     * @return float
     */
    public function perimetre()
    {
        return $this->cote * 4;
    }

    /**
     * @return float
     */
    public function aire()
    {
        return (float)pow($this->cote, 2);
    }
}
