<?php
    class Shape{
        public $name;

        public function __construct($name)
        {
            $this->name=$name;
        }

        public function area() {
            return 0;
        }
    }

    class Circle extends Shape{
        private $radius;

        public function __construct($radius)
        {
            parent::__construct('Circle');
            $this->radius=$radius;
        }

        public function area() {
            return ($this->radius*3.14*$this->radius);
        }
    }

    class Rectangle extends Shape{
        private $width;
        private $height;

        public function __construct($width,$height)
        {
            parent::__construct('Rectangle');
            $this->width=$width;
            $this->height=$height;
        }

        public function area() {
            return ($this->width*$this->height);
        }
    }

    $circle=new Circle(12);
    $rectangle=new Rectangle(1,2);

    echo $circle->area()."<br>";
    echo $rectangle->area()."<br>";
    echo $circle->name;
    echo $rectangle->name;

    ?>