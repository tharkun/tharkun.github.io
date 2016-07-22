<?php

// Si vous avez le temps, gérez cela via l'autoload
//include __DIR__ . '/ValueObject/Params.php';
//include __DIR__ . '/Job/JobInterface.php';
//include __DIR__ . '/Job/Job.php';
//include __DIR__ . '/Job/JobHandler.php';
//include __DIR__ . '/Job/Handler/Type1.php';
//include __DIR__ . '/Job/Handler/Type2.php';

function __autoload($class)
{
    $fileName = str_replace('Clever\Institut\Poe\Php', '', $class);

    $file = __DIR__ . str_replace('\\', '/', $fileName) . '.php';

    echo "$class, $fileName, $file\n";

    include $file;
}
