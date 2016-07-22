<?php

// Inverser une chaine de caractère sans fonction

$string = "abcde";

$i = 0;
$new = '';
while (isset($string[$i]))
{
    $new = $string[$i] . $new;
    $i++;
}
