<?php

//public
//protected
//private 

class Animal
{
    protected $name;
    private $code;

    public function __construct($name, $code)
    {
        $this->name = $name;
        $this->code = $code;
    }
}

class Child extends Animal
{
    public function getName()
    {
        return $this->name; //protetto
    }
}

$bobby = new Child('Cane', 123456789);

$bobby->code = 'ccccccc';
var_dump($bobby);
//echo $bobby->getName();
