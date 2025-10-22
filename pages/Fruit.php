<?php
class Fruit{

    // properties
    public $name;
    public $color;

    // The __construct Function
    function __construct($name = null, $color = null){
        $this->name = $name;
        $this->color = $color;
        
    
    }

    
    // The __destruct Function

    function __destruct() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }

    // methods

    function setname($name, $color = null){
        $this->name = $name;
        if ($color !== null) {
            $this->color = $color;
        }
    }

    function get_name(){    
        return $this->name;
    }    
    function set_color($color){
        $this->color = $color;
    }

    function get_color(){
        return $this->color;
    }
    
}

// define objects

$apple = new Fruit();
$banana = new Fruit();

$apple->setname('Apple', 'Red');
$banana->setname('Banana', 'Yellow');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();

echo "<br>";

echo $banana->get_color();
echo $apple->get_color();

var_dump($apple instanceof Fruit); // true
?>