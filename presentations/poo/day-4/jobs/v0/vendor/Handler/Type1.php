<?php

namespace Clever\Institut\Poe\Php\Job\Handler;

class Type1
{
    public function run($params)
    {
        echo "Lancement du job de type 1\n";
        print_r($params);
        
        // Does something A

        return true;
    }
}
