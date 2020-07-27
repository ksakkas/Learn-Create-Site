<!--
Οι ιδιότητες και οι μέθοδοι μπορούν να έχουν τροποποιητές πρόσβασης που ελέγχουν πού μπορούν 
να έχουν πρόσβαση.

Υπάρχουν τρεις τροποποιητές πρόσβασης:

public (δημόσια) - η ιδιοκτησία ή η μέθοδος είναι προσβάσιμη από παντού. Αυτό είναι προεπιλογή
protected (προστατευμένο) - η ιδιοκτησία ή η μέθοδος είναι προσβάσιμη μέσα στην τάξη 
                            και από τάξεις που προέρχονται από αυτήν την κλάση
provate (ιδιωτικό) - η ιδιοκτησία ή η μέθοδος είναι ΜΟΝΟ προσβάσιμη μέσα στην τάξη
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
