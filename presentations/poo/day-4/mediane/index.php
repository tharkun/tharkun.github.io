<?php

function medianArray(array $values)
{
    if (empty($values)) {
        return 0.0;
    }

    sort($values);
    $length = count($values);

    if ($length % 2) {
        $median = $values[(int) floor($length/2)];
    } else {
        $median = ($values[(int) ($length / 2 - 1)] + $values[(int) ($length / 2)]) / 2;
    }

    return (float) $median;
}

echo medianArray(array(
    1,
    2,
    3.1,
    125,
    15445,
    10E5,
)), "\n";

echo medianArray(array(
    1,
    2,
    3.1,
    15445,
    10E5,
)), "\n";
