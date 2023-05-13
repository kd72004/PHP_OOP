<?php
    //define one class 
    class Parent1{
        private $name;
        private $age;

        public function __construct($name,$age){
            echo __CLASS__; //class name 
            echo "<br><br>"; 
            var_dump($this); //class Information
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
            //destroy object 
        }

    }

    //define object :
    $parent1=new Parent1('kalyani',17);
    // $parent1->setName();
    // $parent1->setAge(17);

    echo $parent1->getName();
    echo $parent1->getAge();

?>