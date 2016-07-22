<?php

include 'vendor/parallelogramme/Point.php';
include 'vendor/parallelogramme/Rectangle.php';
include 'vendor/parallelogramme/Parallelogramme.php';

use Clever\Institut\Poe\Php\Parallelogramme\Point;

$point = new Point(1.1, 2.5);

print_r($point);

$rectangle = new \Clever\Institut\Poe\Php\Parallelogramme\Rectangle(1.1, 2.5, 10.1, 12);
echo 'Aire du rectangle : ', $rectangle->aire(), "\n";

$parallelogramme = new \Clever\Institut\Poe\Php\Parallelogramme\Parallelogramme(1.1, 2.5, 10.1, 12, 2);
echo 'Aire du parallelogramme : ', $parallelogramme->aire(), "\n";
echo 'Volume du parallelogramme : ', $parallelogramme->volume(), "\n";
