<!DOCTYPE html>
<html>
<body>

<?php
    echo strlen("DIT UOI"); //επιστρέφει το μήκος μιας συμβολοσειράς

    echo str_word_count("DIT UOI"); //μετρά τον αριθμό των λέξεων σε μια συμβολοσειρά

    echo strrev("DIT UOI"); //αντιστρέφει μια συμβολοσειρά

    echo strpos("DIT UOI", "UOI"); //αναζητά ένα συγκεκριμένο κείμενο μέσα σε μια συμβολοσειρά, επιστρέφει τη θέση χαρακτήρων

    echo str_replace("DIT","Departmen Informatics and Telecomunication","DIT UOI"); //αντικαθιστά μερικούς χαρακτήρες με μερικούς άλλους χαρακτήρες σε μια συμβολοσειρά
?>

</body>
</html>
