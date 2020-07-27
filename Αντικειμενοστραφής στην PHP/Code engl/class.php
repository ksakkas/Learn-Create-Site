<!--
Define a Class
A class is defined by using the class keyword, followed by the name of the class and 
a pair of curly braces ({}). All its properties and methods go inside the braces:
-->

<!DOCTYPE html>
<html>
<body>

<?php
class Fruit { //create class
  // Properties
  public $name; //public var
  public $color; 

  // Methods
  function set_name($name) { //setter
    $this->name = $name;
  }
  function get_name() { //getter
    return $this->name;
  }
  //The $this keyword refers to the current object, and is only available inside methods.
}

//Objects of a class is created using the new keyword.

$apple = new Fruit(); //create object class
$banana = new Fruit(); 
$apple->set_name('Apple');  //name = apple
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>
</body>
</html>
