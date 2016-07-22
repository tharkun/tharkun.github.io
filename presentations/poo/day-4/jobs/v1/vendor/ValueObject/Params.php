<?php

namespace Clever\Institut\Poe\Php\ValueObject;

/**
 * Class Params
 * @package Clever\Institut\Poe\Php\ValueObject
 */
trait Params
{
    /**
     * @var array
     */
    protected $params = array();

    /**
     * @param array $params
     * @return $this
     */
    public function setParams(array $params)
    {
        $this->params = $params;

        return $this;
    }
}
