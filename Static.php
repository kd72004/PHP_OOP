<?php
// Static method used by self
//static method can't access non static properties 

class Name {
    private static $university="Atmiya";
    public $name;
    function __construct($name)
    {
        $this->name=$name;
    }
    public static function Show_name(){
        echo self::$university;
    }
}

    echo Name::Show_name();
?>