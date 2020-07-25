<!--
    Ποια είναι η μεταβλητή $ _SERVER ["PHP_SELF"];
    Το $ _SERVER ["PHP_SELF"] είναι μια σούπερ καθολική μεταβλητή που επιστρέφει το όνομα αρχείου της τρέχουσας
    εκτέλεσης σεναρίου.

    Τι είναι η συνάρτηση htmlspecialchars ();
    Η συνάρτηση htmlspecialchars () μετατρέπει ειδικούς χαρακτήρες σε οντότητες HTML.
    Αυτό σημαίνει ότι θα αντικαταστήσει χαρακτήρες HTML όπως <και> με & lt; και & gt ;.
    Αυτό εμποδίζει τους εισβολείς να εκμεταλλευτούν τον κώδικα εισάγοντας κώδικα HTML ή Javascript
    (Επιθέσεις επιθέσεων μεταξύ ιστότοπων) σε φόρμες.

-->

<html>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Number: <input type="number" name="nmb"><br>
Gender:<br>
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other<br>
Comment: <br><textarea name="comment" rows="5" cols="40"></textarea><br><br>
<input type="submit">
</form>

<?php
// ορίστε μεταβλητές σε κενές τιμές
$name = $email = $gender = $comment = $nmb = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $nmb = test_input($_POST["nmb"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $nmb;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>


</body>
</html>