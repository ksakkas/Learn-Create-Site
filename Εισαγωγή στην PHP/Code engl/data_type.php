<!--
PHP supports the following data types:
String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource
-->

<!DOCTYPE html>
<html>
<body>

<?php
$s = "Kostas"; //string
echo $s; //display variable content

$i = 5; //integer
echo $i;

$f = 2.3; //double - float
echo $f;

$b = true; //boolean
echo $b;

$a = array("Kostas", "Giannis", "Spyros"); //array
var_dump($a); //returns the data type and value

class person { //object - class
    function person() { //function
      $this->name = "Kostas"; //field class
    }
  }
  
  // create an object
  $prs = new person();
  
  // show object properties
  echo $prs->name;

$n = null; //null var
?>

</body>
</html>
