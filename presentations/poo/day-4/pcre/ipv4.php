<?php

$values = array(
    '0.0.0.0',
    '0.0.0.10',
    '0.0.0..10',
    '11.0.0.10',
    '113.0.0.10',
    '350.0.0.10',
    '252.23.125.215',
);

$pattern = "([0-9]|[1-9][0-9]|1[0-9]{2}|(2([0-4][0-9]|5[0-5])))";
$pattern = "/^".implode('\.', array_fill(0, 4, $pattern))."$/";

foreach ($values as $value)
{
    echo $value, preg_match($pattern, $value) ? ' is' : ' is not', " an ip v4\n";
}
