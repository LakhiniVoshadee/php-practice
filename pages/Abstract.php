<?php
// abstract class ParentClass{
//     abstract public function someMethod();
//     abstract public function someMethod2($name,$color);
//     abstract public function someMethod3() : string;
// }

abstract class Car{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    abstract public function intro() : string;
}

class Audi extends Car{
    public function intro() : string{
        return "Choose German quality! I'm an $this->name!";
    }
}
class Bro extends Car{
    public function intro() : string{
        return "I'm a $this->name!";
    }
}
class Volvo extends Car{
    public function intro() : string{
        return "Proud to be Swedish! I'm a $this->name!";
    }
}

// Create objects from the child classes
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";
$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";
$bro = new Bro("Bro");
echo $bro->intro();

?>