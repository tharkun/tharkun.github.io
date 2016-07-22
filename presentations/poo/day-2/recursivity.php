<?php

//Ecrire une fonction permettant de calculer la somme des nombres de 1 à n

function recursive($n)
{
    if (!$n) {
        return $n;
    }

    return $n + recursive($n-1);
}


echo recursive(4), "\n";



function recursive_array_sum(array $array)
{
    $sum = 0;
    foreach ($array as $value)
    {
        if (is_array($value))
        {
            $sum += recursive_array_sum($value);
        }
        else
        {
            $sum += $value;
        }
    }

    return $sum;
}

$array = array(
    1,
    array(
        2,
        4,
        array(
            1253
        )
    )
);

echo recursive_array_sum($array), PHP_EOL;
