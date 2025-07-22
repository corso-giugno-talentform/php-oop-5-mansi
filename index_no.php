<?php
//parent
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
        echo "Weila, amico. Mi chiamo" . $this->firstname . "\n";
    }
}

//child
//1) Quando eredito qualcosa dal parent, il child eredita TUTTO
class Student extends Person
{

    public $avg;

    public function __construct($a, $b, $c, $d)
    {
        parent::__construct($a, $b, $c);
        $this->avg = $d;
    }

    public function sayHlelo() //abstract
    {
        echo "Buongiorno. Mi chiamo" . $this->firstname . "\n";;
    }
}


class Pippo extends Student
{
    public $stringa;

    public function __construct($a, $b, $c, $d, $e)
    {
        parent::__construct($a, $b, $c, $d);
        $this->stringa = $e;
    }
}

class Teacher extends Person
{
    public $salary;

    public function __construct($a, $b, $c, $d)
    {
        parent::__construct($a, $b, $c);
        $this->salary = $d;
    }

    public function sayHello()
    {
        echo "Buongiorno a tutti. Sono il docente " . $this->firstname . "\n";
    }
}

$person = new Person('Tizio', 'Caio', 78);
$student = new Student('Sempronio', 'Rossi', 18, 8.90);
$teacher = new Teacher('Pippo', 'Topolino', 18, 1000);

$student->sayHello();
$teacher->sayHello();
