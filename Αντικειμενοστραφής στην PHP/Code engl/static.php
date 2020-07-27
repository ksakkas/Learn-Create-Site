<!--
Static methods can be called directly - without creating an instance of a class.

Static methods are declared with the static keyword:
-->

<?php
class ClassName {
  public static function staticMethod() {
    echo "Hello World!";
  }
}
?>
 
<!--To access a static method use the class name, double colon (::), and the method name:-->

ClassName::staticMethod();

<?php
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

// Call static method
greeting::welcome();
?>