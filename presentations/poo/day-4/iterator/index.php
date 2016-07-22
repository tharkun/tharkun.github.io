<?php

class myIterator implements Iterator
{
    /**
     * @var int
     */
    private $position;

    /**
     * @var array
     */
    private $array;

    /**
     * myIterator constructor.
     * @param array $array
     */
    public function __construct(array $array)
    {
        $this->position = 0;
        $this->array = $array;
    }

    public function rewind()
    {
        echo __METHOD__, "\n";
        $this->position = 0;
    }

    public function current()
    {
        echo __METHOD__, "\n";
        return $this->array[$this->position];
    }

    public function key()
    {
        echo __METHOD__, "\n";
        return $this->position;
    }

    public function next()
    {
        echo __METHOD__, "\n";
        ++$this->position;
    }

    public function valid()
    {
        echo __METHOD__, "\n";
        return isset($this->array[$this->position]);
    }
}

$it = new myIterator(array(
    "premierelement",
    "secondelement",
    "dernierelement",
));


ob_start();
foreach($it as $key => $value) {
    var_dump($key, $value);
    echo "\n";
}

file_put_contents('output.txt', ob_get_flush());

// Affichage

