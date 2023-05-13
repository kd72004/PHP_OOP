<?php

//same faunction with same code 

trait Greetable{
    public function greet(){
        
    }
}

class Person{
    use Greetable;
    public function greet(){
        echo "Hello I am a Person <br>";
    }
}

class Robot{
    use Greetable;
    public function greet(){
        echo "Hello I am a Robot <br>";
    }
}

// $person=new Person();

// $person->greet();

$robot=new Robot();

$robot->greet();


?>

