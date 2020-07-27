<!--Το JSON αντιπροσωπεύει τη Σημείωση αντικειμένου JavaScript ( JavaScript Object Notation) 
και είναι μια σύνταξη για την αποθήκευση και την ανταλλαγή δεδομένων.

Δεδομένου ότι η μορφή JSON είναι μια μορφή που βασίζεται σε κείμενο, μπορεί εύκολα να αποσταλεί σε 
και από έναν διακομιστή, και χρησιμοποιείται ως μορφή δεδομένων από οποιαδήποτε γλώσσα προγραμματισμού.

Η PHP διαθέτει ορισμένες ενσωματωμένες λειτουργίες για τη διαχείριση του JSON.

Πρώτον, θα εξετάσουμε τις ακόλουθες δύο λειτουργίες:
json_encode()
json_decode()
-->


<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);
?>
<br><br>
</body>
</html>


<!DOCTYPE html>
<html>
<body>

<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
 
var_dump(json_decode($jsonobj));
?>

</body>
</html>