
<!DOCTYPE html>
<html>
<body>

<?php
    $sum=0;
    $sumn=0;
    for($i=0;$i<5;$i++)
    {
        if($i==2)
        continue; /*η continue δήλωση "υπερβαίνει" μία επανάληψη στο βρόχο*/
        else
        $sumn+=$i;
    }
    echo $sumn;
    echo "<br>";
    for($i=0;$i<5;$i++)
    {
        if($i==3)
        break; /*η break δήλωση "πηδά έξω" από έναν βρόχο*/
        else
        $sum+=$i;
    }
    echo $sum;
       
?>

</body>
</html>
