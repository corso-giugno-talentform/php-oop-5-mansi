<?php

class Person2
{
    use Life;
}

class Animal2
{
    use Life;
}


trait Life
{
    public function eat()
    {
        echo "Sto mangiando";
    }
}

$rocco = new Person2();
$bobby = new Animal2();

$rocco->eat();
$bobby->eat();
