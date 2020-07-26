<?php
$myfile = fopen("word.txt", "w") or die("Unable to open file!"); 
// w --> Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
$txt = "UOI\n";
fwrite($myfile, $txt);
$txt = "UOI\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
