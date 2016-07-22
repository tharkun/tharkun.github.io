<?php

$values = array(
    'jpoulain@clever-age.com',
    'jpoulain+*/@clever-age.com',
);

foreach ($values as $value)
{
    echo $value, preg_match('/^[a-z-_+]+@[a-z-_]+\.[a-z]{2,5}$/i', $value) ? ' is' : ' is not', " an email\n";
}
