<?php

use Clever\Institut\Poe\Php\Job\JobHandler;

// Autoload
include __DIR__ . '/vendor/autoload.php';

// Generate some fake params
$customParams = function() {
    return array(
        uniqid() => md5(uniqid()),
        uniqid() => md5(uniqid()),
        uniqid() => md5(uniqid()),
    );
};

// Generate some fake jobs
$jobs = array(
    array(
        'id' => 1256,
        'type' => 'type1',
        'params' => json_encode($customParams()),
    ),
    array(
        'id' => 1257,
        'type' => 'type2',
        'params' => json_encode($customParams()),
    ),
);

$jobHandlers = new JobHandler();

foreach ($jobs as $def)
{
    $job = $jobHandlers->create($def['type'])->setParams((array)json_decode($def['params']));

    echo "Run job : ", $job->getName(), "\n";
    $result = $job->run();

    if (!$result)
    {
        echo "An error occured";
        exit(1);
    }
}

exit(0);
