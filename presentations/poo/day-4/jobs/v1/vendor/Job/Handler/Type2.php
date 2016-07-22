<?php

namespace Clever\Institut\Poe\Php\Job\Handler;

use Clever\Institut\Poe\Php\Job\Job;

/**
 * Class Type2
 * @package Clever\Institut\Poe\Php\Job\Handler
 */
class Type2 extends Job
{
    public function run()
    {
        echo "Lancement du job de type 2\n";
        print_r($this->params);

        return false;
    }
}
