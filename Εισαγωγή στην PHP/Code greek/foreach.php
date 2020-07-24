<!--Ο βρόγχος επανάληψης foreach λειτουργεί μόνο για πίνακες-->

<!DOCTYPE html>
<html>
<body>

<?php

   $colors = array("κόκκινο", "πράσινο", "μπλέ", "κίτρινο");

   foreach ($colors as $value) {
     echo "$value <br>";
   }
       
?>

</body>
</html>
