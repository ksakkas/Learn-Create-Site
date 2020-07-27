<!--
    Constants cannot be changed once it is declared.

Class constants can be useful if you need to define some constant data within a class.

A class constant is declared inside a class with the const keyword.

Class constants are case-sensitive. However, it is recommended to name the constants in 
all uppercase letters.

We can access a constant from outside the class by using the class name followed by the 
scope resolution operator (::) followed by the constant name, like here:
-->
<!DOCTYPE html>
<html>
<body>

<?php
class name {
  const namec = "Konstantinos";
}

echo name::namec;
?>

</body>
</html>
