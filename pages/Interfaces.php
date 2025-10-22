<?php
interface Animal {
    public function makeSound();
  
}
class Cat implements Animal{
    public function makeSound(){
        echo "Meow";
    }
}
class Dog implements Animal {
  public function makeSound() {
    echo " Bark ";
  }
}

class Mouse implements Animal {
  public function makeSound() {
    echo " Squeak ";
  }
   
}
// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Iterate through the list and make each animal sound
foreach ($animals as $animal) {
    $animal->makeSound();
}

?>