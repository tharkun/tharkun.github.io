<?php

namespace Clever\Institut\Poe\Php\Job\Handler;

class Type2
{
    public function run($params)
    {
        echo "Lancement du job de type 2\n";
        print_r($params);

        // Does something B

        return false;
    }
}
