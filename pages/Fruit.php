<?php
class Fruit{

    // properties
    public $name;
    public $color;

    // methods

    function setname($name){
        $this->name = $name;
    }

    function get_name(){    
        return $this->name;
    }    
}

// define objects

$apple = new Fruit();
$banana = new Fruit();

$apple->setname('Apple');
$banana->setname('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();

var_dump($apple instanceof Fruit); // true
?>