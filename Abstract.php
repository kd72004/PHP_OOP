<?php

    abstract class Animal{
        protected $name;
        protected $color;

        public function __construct($name,$color)
        {
            $this->name=$name;
            $this->color=$color;
        }

            public function getName() {
                return $this->name;
            }
            
            public function getColor() {
                return $this->color;
            }

        abstract public function makeSound();
    }

    class Dog extends Animal{
        private $sound;

        public function __construct()
        {
            parent::__construct('Dog','Yellow');
            // $this->makeSound();
        }
        public function makeSound(){
            $this->sound='Bark';
        }

        public function getSound(){
            echo $this->sound;
        }
    }

    $dog=new Dog();
    echo $dog->getName();
    echo $dog->getColor();
    $dog->makeSound();
    $dog->getSound();
?> 