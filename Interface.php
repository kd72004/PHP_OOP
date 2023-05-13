<?php

interface Parent1{
    public function setName($name);
    public function setAge($age);
    public function getName();
    public function getAge();
}

interface Parent2{
    public function setName($name);
    public function setAge($age);
    public function getName();
    public function getAge();
}

class Child implements Parent1,Parent2{
    private $name;
    private $age;

    public function __construct($name,$age)
    {
        $this->name=$name;
        $this->age=$age;
    }

    public function setName($name){
        $this->name=$name;
    }

    public function setAge($age){
        $this->age=$age;
    }

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

    public function __destruct()
    {
        //delete object 
    }

}
$parent1 = new Child('Jalpa Dave',45);
$parent2 = new Child('Sanjay Dave',50);
$child = new Child('Kalyani Dvae',18);

echo $parent1->getName()."<br>";
echo $parent1->getAge()."<br>";

echo $parent2->getName()."<br>";
echo $parent2->getAge()."<br>";

echo $child->getName()."<br>";
echo $child->getAge()."<br>";


?>