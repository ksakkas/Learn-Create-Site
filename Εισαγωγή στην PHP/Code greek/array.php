<!DOCTYPE html>
<html>
<body>

<?php
    $names = array("Kostas", "Maria", "Giannis"); //δημιουργία πίνακα με όνομα: names
    echo $names[0] . ", " . $names[1] . ", " . $names[2] ; //εκτύπωση περιεχόμενου πίνακα
    echo "<br>";
    echo count($names); //επιστρέφει το μήκος (τον αριθμό των στοιχείων - δεδομένων)

    $age = array("Kostas"=>"21", "Giannis"=>"30", "Joe"=>"40"); //αντιστοιχεία ονομάτων με τιμές
    echo "Kostas is " . $age['Kostas'] . " years old."; //κλήση πίνακα με όνομα
    echo "<br>";

    sort($names); //ταξινόμηση πίνακα 
    echo  $names[0] . ", " . $names[1] . ", " . $names[2] ;
?>

</body>
</html>
