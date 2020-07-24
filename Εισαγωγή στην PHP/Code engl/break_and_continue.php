<!DOCTYPE html>
<html>
<body>

<?php
    $sum=0;
    $sumn=0;
    for($i=0;$i<5;$i++)
    {
        if($i==2)
        continue; /*the continue statement "jumps over" one iteration in the loop.*/
        else
        $sumn+=$i;
    }
    echo $sumn;
    echo "<br>";
    for($i=0;$i<5;$i++)
    {
        if($i==3)
        break; /*the break statement "jumps out" of a loop.*/
        else
        $sum+=$i;
    }
    echo $sum;
       
?>

</body>
</html>
