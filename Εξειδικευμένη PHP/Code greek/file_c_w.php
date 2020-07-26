<?php
$myfile = fopen("word.txt", "w") or die("Unable to open file!"); 
// w --> Ανοίξτε ένα αρχείο μόνο για εγγραφή. Διαγράφει τα περιεχόμενα του αρχείου ή δημιουργεί ένα νέο αρχείο εάν δεν υπάρχει. Ο δείκτης αρχείου ξεκινά στην αρχή του αρχείου
$txt = "UOI\n";
fwrite($myfile, $txt);
$txt = "UOI\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
