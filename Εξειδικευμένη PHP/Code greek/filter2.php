<!DOCTYPE html>
<html>
<body>

<?php
/*μεταβλητή για έλεγχο*/
$int = 122;

/* ελάχιστη τιμή */
$min = 1;
/* μέγιστη τιμή */
$max = 200;

if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
  echo("Εκτός εύρους");
} else {
  echo("Εντός εύρους");
}
?>

</body>
</html>
