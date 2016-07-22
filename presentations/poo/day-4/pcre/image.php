<?php

$values = array(
    '/s/php.ini',
    '/var/www/tmp.jpeg',
);

foreach ($values as $value)
{
    echo $value, preg_match('/\.('.implode('|', array('png', 'jpe?g')).')$/i', $value) ? ' is' : ' is not', " an image\n";
}
