<!DOCTYPE html>
<html>
<body>

<?php
    $x = 10;
    var_dump(is_int($x));// check if the type of a variable is integer   

    $x = 10.255;
    var_dump(is_float($x));// check if the type of a variable is float 

    $x = 2.5e115;
    var_dump($x); // check if a numeric value is finite or infinite 

    $x = acos(8);
    var_dump($x);// invalid calculation will return a NaN value

    
    $x = 1525.147;
    $in = (int)$x;// cast float to int
    echo $in;
?>

</body>
</html>
