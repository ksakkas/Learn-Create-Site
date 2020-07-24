<!--
Η PHP υποστηρίζει τους ακόλουθους τύπους δεδομένων:
String - Αλφαριθμητικό
Integer - Ακέραιο
Float (floating point numbers - also called double) - Δεκαδικό
Boolean - Λογική τιμή (αληθές - ψευδές)
Array - Πίνακα
Object - Αντικείμενα (κλάσεις)
NULL - Κενό
Resource
-->

<!DOCTYPE html>
<html>
<body>

<?php
$s = "Kostas"; //string - αλφαριθμητικό
echo $s;

$i = 5; //integer - ακέραιος
echo $i;

$f = 2.3; //double - float - δεκαδικό
echo $f;

$b = true; //boolean - λογική τιμή (αληθές/ψευδές)
echo $b;

$a = array("Kostas", "Giannis", "Spyros"); //array - πίνακας
var_dump($a); //var_dump = επιστρέφει τον τύπο και την τιμή δεδομένων

class person { //object - class - αντικείμενα - κλάσεις 
    function person() { //function - συνάρτηση
      $this->name = "Kostas"; //πεδίο κλάσης
    }
  }
  
  //δημιουργία ενός αντικειμένου
  $prs = new person();
  
  //εμφάνιση ιδιοτήτων αντικειμένου
  echo $prs->name;

$n = null; //κενή μεταβλητή
?>

</body>
</html>
