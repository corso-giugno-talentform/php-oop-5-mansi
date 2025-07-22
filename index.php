<?php
class Person
{
    public $firstname;
    public $lastname;
    public $age;

    public function __construct($a, $b, $c)
    {
        $this->firstname = $a;
        $this->lastname = $b;
        $this->age = $c;
    }


    public function sayHello()
    {
        echo "Weila, amico. Mi chiamo" . $this->firstname;
    }
}

class Student
{
    public $firstname;
    public $lastname;
    public $age;
    public $avg;

    public function __construct($a, $b, $c, $d)
    {
        $this->firstname = $a;
        $this->lastname = $b;
        $this->age = $c;
        $this->avg = $d;
    }

    public function sayHello()
    {
        echo "Buongiorno. Mi chiamo" . $this->firstname;
    }
}

class Teacher
{
    public $firstname;
    public $lastname;
    public $age;
    public $salary;

    public function __construct($a, $b, $c, $d)
    {
        $this->firstname = $a;
        $this->lastname = $b;
        $this->age = $c;
        $this->salary = $d;
    }

    public function sayHello()
    {
        echo "Salve ragazzi,mi chiamo" . $this->firstname;
    }
}
