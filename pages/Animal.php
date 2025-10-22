<?php
// Inheritance example class
final class Animal{

    public $name;
    public $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro(){
        echo "The animal is {$this->name} and the color is {$this->color}.";
    }

    // protected function intro(){
    //     echo "The animal is {$this->name} and the color is {$this->color}.";
    // }

    

}

// Dog class inherits from Animal class
class Dog extends Animal{
    public $weight;

    public function __construct($name, $color, $weight) {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function intro(){
        echo "The animal is {$this->name}, the color is {$this->color} and the weight is {$this->weight} kg.";
    }
    // public function message(){
    //     echo "Am I a animal or a dog?";
    
    // // call protected method from within derived class - OK
    // $this -> intro();
}

// Create an object of the Dog class
$dog = new Dog("Dog", "Brown", 25);
//$dog->message();  // OK. message() is public and it calls intro()
// (which is protected) from within the derived class
//$dog->intro(); //error. intro() is protected
$dog->intro();
?>