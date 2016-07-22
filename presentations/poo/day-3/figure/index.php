<?php

include 'vendor/figure/Point.php';
include 'vendor/figure/Figure.php';
include 'vendor/figure/Disque.php';

use Clever\Institut\Poe\Php\Figure\Point;

$point = new Point(1.1, 2.5);

print_r($point);

$disque = new \Clever\Institut\Poe\Php\Figure\Disque("disque", $point, 1.0);
echo 'Aire du disque : ', $disque->aire(), "\n";
