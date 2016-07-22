<?php

namespace Clever\Institut\Poe\Php\Job\Handler;

use Clever\Institut\Poe\Php\Job\Job;

/**
 * Class Type1
 * @package Clever\Institut\Poe\Php\Job\Handler
 */
class Type1 extends Job
{
    public function run()
    {
        echo "Lancement du job de type 1\n";
        print_r($this->params);

        return true;
    }
}
