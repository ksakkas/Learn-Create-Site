<!--
    d - Represents the day of the month (01 to 31)
    m - Represents a month (01 to 12)
    Y - Represents a year (in four digits)
    l (lowercase 'L') - Represents the day of the week

    Other characters, like"/", ".", or "-" can also be inserted between the characters to add additional formatting.
-->


<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>
<?php
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l");
?>
</body>
</html>