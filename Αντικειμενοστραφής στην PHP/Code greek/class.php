<!--
Ορίστε μια κλάση
Η κλάση ορίζεται χρησιμοποιώντας τη λέξη-κλειδί class, ακολουθούμενη από το όνομα της class και
ένα ζευγάρι {}. Όλες οι ιδιότητες και οι μέθοδοι της μπαίνουν μέσα στα {}:
-->

<!DOCTYPE html>
<html>
<body>

<?php
class Fruit { //δημιουργία κλάσης
  // Ιδιότητες
  public $name; //δημόσιες μεταβλητές
  public $color; 

  // Μέθοδοι
  function set_name($name) { //setter
    $this->name = $name;
  }
  function get_name() { //getter
    return $this->name;
  }
  //Το $this λέξη-κλειδί αναφέρεται στο τρέχον αντικείμενο και είναι διαθέσιμο μόνο μέσα σε μεθόδους.
}

//Τα αντικείμενα μιας τάξης δημιουργούνται χρησιμοποιώντας το new λέξη-κλειδί.

$apple = new Fruit(); //δημιουργία αντικειμένου κλάσης
$banana = new Fruit(); 
$apple->set_name('Apple');  //name = apple
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>
</body>
</html>
