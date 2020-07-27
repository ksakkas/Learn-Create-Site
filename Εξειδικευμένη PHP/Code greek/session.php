<!--
Όταν εργάζεστε με μια εφαρμογή, την ανοίγετε, κάνετε κάποιες αλλαγές και μετά την κλείνετε.
Αυτό μοιάζει πολύ με μια συνεδρία. Ο υπολογιστής γνωρίζει ποιος είσαι. Ξέρει πότε ξεκινάτε την εφαρμογή
και όταν τελειώσεις. Αλλά στο Διαδίκτυο υπάρχει ένα πρόβλημα: ο διακομιστής ιστού δεν γνωρίζει ποιος είστε ή
τι κάνετε, επειδή η διεύθυνση HTTP δεν διατηρεί την κατάσταση.


Οι μεταβλητές περιόδου λειτουργίας επιλύουν αυτό το πρόβλημα αποθηκεύοντας πληροφορίες χρήστη που 
θα χρησιμοποιηθούν σε πολλές σελίδες
(π.χ. όνομα χρήστη, αγαπημένο χρώμα κ.λπ.). Από προεπιλογή, οι μεταβλητές περιόδου λειτουργίας διαρκούν 
έως ότου ο χρήστης κλείσει το πρόγραμμα περιήγησης.

Ετσι; Οι μεταβλητές περιόδου σύνδεσης περιέχουν πληροφορίες για έναν μόνο χρήστη και είναι διαθέσιμες σε όλες τις σελίδες σε έναν
εφαρμογή.
-->

<!--

Ξεκινήστε μια περίοδο σύνδεσης PHP
Μια συνεδρία ξεκινά με τη συνάρτηση session_start ().

Οι μεταβλητές περιόδου λειτουργίας ορίζονται με την καθολική μεταβλητή PHP: $ _SESSION.

Τώρα, ας δημιουργήσουμε μια νέα σελίδα που ονομάζεται "demo_session1.php". Σε αυτήν τη σελίδα, ξεκινάμε ένα νέο PHP
συνεδρία και ορίστε μερικές μεταβλητές συνεδρίας:
-->

<?php
// Ξεκινήστε τη συνεδρία - session
//Η συνάρτηση session_start () πρέπει να είναι το πρώτο πράγμα στο έγγραφό σας. Πριν από οποιαδήποτε ετικέτα HTML.

session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
// Ορισμός μεταβλητών περιόδου λειτουργίας
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.". "<br>";
?>

</body>
</html>

<!--Λάβετε τις τιμές των μεταβλητών περιόδου σύνδεσης PHP-->
<!DOCTYPE html>
<html>
<body>

<?php
// εκτύπωση μεταβλητών session που ορίστηκαν παραπάνω
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . "<br><br>";
//ή
print_r($_SESSION);

// αφαιρέστε όλες τις μεταβλητές περιόδου σύνδεσης
session_unset();

// καταστρέψτε τη συνεδρία
session_destroy();

?>

</body>
</html>