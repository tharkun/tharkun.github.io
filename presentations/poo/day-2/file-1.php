<?php

//Lire un fichier nommé “file-1.txt” avec des données “fake” et afficher son contenu

$file = 'file-1.txt';

echo "Contenu global du fichier", PHP_EOL;
echo file_get_contents($file), PHP_EOL;


$resource = fopen($file, 'r');
while ($s = fread($resource, 3))
{
    echo "$s--";
}
fclose($resource);
