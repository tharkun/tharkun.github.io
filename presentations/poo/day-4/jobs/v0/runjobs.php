<?php

// Includes
include __DIR__ . '/vendor/Handler/Type1.php';
include __DIR__ . '/vendor/Handler/Type2.php';

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

foreach ($jobs as $job)
{
    switch ($job['type'])
    {
        case 'type1':
            $result = (new Clever\Institut\Poe\Php\Job\Handler\Type1())->run(json_decode($job['params']));
            break;
        case 'type2':
            $result = (new Clever\Institut\Poe\Php\Job\Handler\Type2())->run(json_decode($job['params']));
            break;
        default:
            break;
    }
}

exit(0);
