<!DOCTYPE html>
<html>
<body>

<?php
    $x = 10;
    var_dump(is_int($x));// ελέγξτε εάν ο τύπος μιας μεταβλητής είναι ακέραιος 

    $x = 10.255;
    var_dump(is_float($x));// ελέγξτε εάν ο τύπος μιας μεταβλητής είναι float

    $x = 2.5e115;
    var_dump($x); // ελέγξτε αν μια αριθμητική τιμή είναι πεπερασμένη ή άπειρη

    $x = acos(8);
    var_dump($x);// μη έγκυρος υπολογισμός θα επιστρέψει μια τιμή NaN

    
    $x = 1525.147;
    $in = (int)$x;// cast float σε int
    echo $in;
?>

</body>
</html>
