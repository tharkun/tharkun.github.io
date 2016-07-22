<?php

//Produire des triangles rectangles avec différentes orientations.
//Envisager les mêmes figures mais creuses et non plus pleines.


function dessinerTriangle($hauteur, $empty = false)
{
    for ($i=1; $i<=$hauteur; $i++) {
        for ($j=1; $j<=$i; $j++) {
            echo (!$empty || in_array($j, array(1, $i)) || $i==$hauteur) ? '*' : ' ';
        }
        echo "\n";
    }
}

dessinerTriangle(5);
dessinerTriangle(9, true);
