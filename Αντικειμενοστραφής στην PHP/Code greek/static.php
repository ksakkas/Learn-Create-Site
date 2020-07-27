<!--
Οι στατικές μέθοδοι μπορούν να κληθούν απευθείας - χωρίς να δημιουργηθεί μια παρουσία τάξης.

Οι στατικές μέθοδοι δηλώνονται με τη στατική λέξη-κλειδί:
-->

<?php
class ClassName {
  public static function staticMethod() {
    echo "Hello World!";
  }
}
?>
 
<!--Για να αποκτήσετε πρόσβαση σε μια στατική μέθοδο χρησιμοποιήστε το όνομα κλάσης, 
το διπλό άνω και κάτω τελεία (: :) και το όνομα της μεθόδου:-->

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