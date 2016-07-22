<?php

include 'vendor/Connection.php';

$connection = new Connection(uniqid(), uniqid());

file_put_contents('__sleep.txt', serialize($connection));
