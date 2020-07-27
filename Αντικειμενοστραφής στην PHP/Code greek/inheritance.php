<!--
Κληρονομικότητα στο Αντικειμενοσταφή Προγραμματισμό (OOP) = Όταν μια κλάση προέρχεται από άλλη κλάση.

Η κλάση παιδί θα κληρονομήσει όλες τις δημόσιες και προστατευμένες ιδιότητες και μεθόδους από την τάξη 
γονέων.
Επιπλέον, μπορεί να έχει τις δικές του ιδιότητες και μεθόδους.

Μια κληρονομική κλάση ορίζεται χρησιμοποιώντας τη λέξη-κλειδί extends.
-->

<!DOCTYPE html>
<html>
<body>

<?php
class Fruit5 {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

// Η φράουλα κληρονομείται από τα φρούτα
class Strawberry extends Fruit5 {
  public function message() {
    echo "Am I a fruit or a berry? "; 
  }
}

$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();
?>
 
</body>
</html>
