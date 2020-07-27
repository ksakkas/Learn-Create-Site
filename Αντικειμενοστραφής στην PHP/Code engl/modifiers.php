<!--
Properties and methods can have access modifiers which control where they can be accessed.

There are three access modifiers:

public - the property or method can be accessed from everywhere. This is default
protected - the property or method can be accessed within the class and by classes derived from that class
private - the property or method can ONLY be accessed within the class
-->

<!DOCTYPE html>
<html>
<body>

<?php
class Fruit4 {
  public $name;
  protected $color;
  private $weight;
}

$mango = new Fruit4();
$mango->name = 'Mango'; // OK
$mango->color = 'Yellow'; // ERROR
$mango->weight = '300'; // ERROR
?>
 
</body>
</html>
