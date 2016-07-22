<?php

include 'vendor/tasks/Task.php';
include 'vendor/tasks/Status.php';
include 'vendor/tasks/CustomField.php';
include 'vendor/tasks/CustomFields.php';

$api = array(
    'id' => 1,
    'title' => uniqid(),
    'description' => uniqid(),
    'status' => array(
        'id' => 1,
        'name' => 'open',
    ),
    'author' => array(
        'id' => 138,
        'username' => 'jpoulain',
    ),
    'createdDate' => time(),
    'modifiedDate' => time(),

    'customFields' => array(
        array(
            'id' => 1,
            'name' => 'CLA',
            'value' => uniqid(),
        ),
        array(
            'id' => 2,
            'name' => 'Contexte',
            'value' => 'Project',
        ),
    ),
);

$task = new \Clever\Institut\Poe\Php\Tasks\Task($api);

//print_r($task);

print_r($task->getCustomFields()->get('Contexte'));
//print_r($customFields);
