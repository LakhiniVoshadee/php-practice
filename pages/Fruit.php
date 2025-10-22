<?php
class Fruit{

    // properties
    public $name;
    public $color;
    public $weight;

    // The __construct Function
    function __construct($name = null, $color = null, $weight = null){
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
        
    
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
    protected function set_color($color){
        $this->color = $color;
    }

    function get_color(){
        return $this->color;
    }
    private function set_weight($weight){
        $this->weight = $weight;
    }
    function get_weight(){
        return $this->weight;
    }
    
}

// define objects

$apple = new Fruit();
$banana = new Fruit();

$apple->setname('Apple', 'Red', 300);
$banana->setname('Banana', 'Yellow', 150);

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();

echo "<br>";

echo $banana->get_color();
echo $apple->get_color();

echo "<br>";

$mango = new Fruit();
$mango->setname("Mango");
// $mango->setcolor(" Green");
// $mango->set_weight(300);
var_dump($apple instanceof Fruit); // true
?>