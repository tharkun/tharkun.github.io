<?php

namespace Clever\Institut\Poe\Php\Job;

use Clever\Institut\Poe\Php\ValueObject\Params;

/**
 * Class JobHandler
 * @package Clever\Institut\Poe\Php\Job
 */
abstract class Job implements JobInterface
{
    use Params;

    /**
     * @return string
     */
    public function getName()
    {
        return (string)str_replace(
            array(
                __NAMESPACE__,
                '\\Handler\\'
            ),
            array(
                '', 
                ''
            ),
            get_class($this)
        );
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
    }
}
