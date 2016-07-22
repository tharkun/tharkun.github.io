<?php

//Calculez votre âge à l’instant actuel à la seconde près

$birth = '1988-03-18';
$array = explode('-', $birth);

$time = mktime(0, 0, 0, $array[1], $array[2], $array[0]);

$diff = time() - $time;

echo "Vous avez : ";
echo $diff, 's', PHP_EOL;
echo "Soit : ";

echo $année = floor( $diff / ( 86400*365 ) ), ' années ';
echo $mois = floor( ($diff - $année * 86400 * 365) / ( floor(365/12) * 86400 ) ), ' mois ';

echo PHP_EOL;
