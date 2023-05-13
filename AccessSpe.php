<?php

// Create a PHP class called Person that has the following properties:

// name (private): the person's name
// age (protected): the person's age
// gender (public): the person's gender

class Person{
    private $name;
    protected $age;
    public $gender;

    public function __construct($name,$age,$gender)
    {
        $this->name=$name;
        $this->age=$age;
        $this->gender=$gender;
    } 

    public function introduce(){
        return "Name ".$this->name."Age ".$this->age."Gender ".$this->gender;
    }
}

class Employee extends Person{
    public $salary;

    public function __construct($name,$age,$gender,$salary)
    {
        parent::__construct($name,$age,$gender);
        $this->salary=$salary;
    }

    public function introduce(){
        return parent::introduce()."Salary ".$this->salary;
    }
}

$employee=new Employee('kalyani',19,'F',50000);
echo $employee->introduce();

?>