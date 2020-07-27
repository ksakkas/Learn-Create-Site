<!--
Inheritance in OOP = When a class derives from another class.

The child class will inherit all the public and protected properties and methods from the parent class. 
In addition, it can have its own properties and methods.

An inherited class is defined by using the extends keyword.
-->

<!DOCTYPE html>
<html>
<body>

<?php
class Fruit5 {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit5 {
  public function message() {
    echo "Am I a fruit or a berry? "; 
  }
}

$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();
?>
 
</body>
</html>
