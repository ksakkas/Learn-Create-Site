<!--
    A destructor is called when the object is destructed or the script is stopped or exited.

If you create a __destruct() function, PHP will automatically call this function at the end of the script.

Notice that the destruct function starts with two underscores (__)!

The example below has a __construct() function that is automatically called when you create an 
object from a class, and a __destruct() function that is automatically called at the end of the script:
-->

<!DOCTYPE html>
<html>
<body>

<?php
class Fruit3 {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name; 
  }
  function __destruct() {
    echo "The fruit is {$this->name}."; 
  }
}

$apple = new Fruit3("Apple");
?>
 
</body>
</html>
