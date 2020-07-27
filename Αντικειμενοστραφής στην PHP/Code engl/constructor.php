<!--
 A constructor allows you to initialize an object's properties upon creation of the object.

If you create a __construct() function, PHP will automatically call this function when you 
create an object from a class.

Notice that the construct function starts with two underscores (__)!

We see in the example below, that using a constructor saves us from calling the set_name() 
method which reduces the amount of code:
-->
<!DOCTYPE html>
<html>
<body>

<?php
class Fruit2 {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name; 
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit2("Apple");
echo $apple->get_name();
?>
 
</body>
</html>
