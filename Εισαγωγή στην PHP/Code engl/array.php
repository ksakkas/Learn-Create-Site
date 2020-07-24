<!DOCTYPE html>
<html>
<body>

<?php
    $names = array("Kostas", "Maria", "Giannis"); //create array with name: names
    echo $names[0] . ", " . $names[1] . ", " . $names[2] ; //print table contents
    echo "<br>";
    echo count($names); //return the length (the number of elements)

    $age = array("Kostas"=>"21", "Giannis"=>"30", "Joe"=>"40"); //matches of names with prices
    echo "Kostas is " . $age['Kostas'] . " years old."; //call table contents by name
    echo "<br>";

    sort($names); //sort table
    echo  $names[0] . ", " . $names[1] . ", " . $names[2] ;
?>

</body>
</html>
