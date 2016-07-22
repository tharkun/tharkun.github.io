<?php

class Magical
{
    /**
     * @var array
     */
    private $attributes = array();

    /**
     * Magical constructor.
     * @param array $attributes
     */
    public function __construct(array $attributes = array())
    {
        $this->attributes = $attributes;
    }

    /**
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        if (isset($this->attributes[$name]))
        {
            return $this->attributes[$name];
        }

        throw new InvalidArgumentException("Unknown $name parameter");
    }

    /**
     * @param $name
     * @param $value
     * @return $this
     */
    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
        return $this;
    }

    public function __call($name, $arguments)
    {
        echo "Appel de la méthode '$name' " . implode(', ', $arguments). "\n";

        call_user_func_array(array(__CLASS__, $name), $arguments);
        call_user_func_array(array($this, $name), $arguments);
    }

    private function jeSuisUneMethodePrivee()
    {
        echo __METHOD__, "\n";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "Appel de la méthode statique '$name' " . implode(', ', $arguments). "\n";
        call_user_func_array(array(__CLASS__, $name), $arguments);
    }

    private function jeSuisUneMethodePriveeStatique()
    {
        echo __METHOD__, "\n";
    }
}

$magical = new Magical();
try {
    echo "Attribute test : ", $magical->test;
} catch (\Exception $e) {
    echo "is not defined";
}
echo "\n";

$magical->test = uniqid(); //$magical->__set('test', uniqid());
echo "Attribute test : ", $magical->test, "\n";


$magical->jeSuisUneMethodePrivee( uniqid() );

$magical::jeSuisUneMethodePriveeStatique( uniqid() );
Magical::jeSuisUneMethodePriveeStatique( uniqid() );
