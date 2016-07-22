<?php

namespace Clever\Institut\Poe\Php\Job;

/**
 * Interface JobInterface
 * @package Clever\Institut\Poe\Php\Job
 */
interface JobInterface
{
    /**
     * @return bool
     */
    public function run();
}
