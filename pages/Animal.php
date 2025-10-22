<?php
// Inheritance example class
class Animal{

    public $name;
    public $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro(){
        echo "The animal is {$this->name} and the color is {$this->color}.";
    }

}

// Dog class inherits from Animal class
class Dog extends Animal{
    public function message(){
        echo "Am I a animal or a dog?";
    }
}

// Create an object of the Dog class
$dog = new Dog("Dog", "Brown");
$dog->message();
$dog->intro();
?>