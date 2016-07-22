<?php

$values = array(
    md5(uniqid()),
    'z'.md5(uniqid()),
);

foreach ($values as $value)
{
    echo $value, preg_match('/^[a-f0-9]{32}$/i', $value) ? ' is' : ' is not', " an md5\n";
}
