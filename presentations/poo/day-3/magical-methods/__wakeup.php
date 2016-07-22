<?php

include 'vendor/Connection.php';

$connection = unserialize(file_get_contents('__sleep.txt'));

print_r($connection);
