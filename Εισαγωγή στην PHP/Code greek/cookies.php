<!--setcookie(όνομα, τιμή, λήξη, διαδρομή (path), domain, secure, httponly);-->

<!--
Το ακόλουθο παράδειγμα δημιουργεί ένα cookie με το όνομα "χρήστης" με την τιμή "Konstantinos Sakkas".
Το cookie θα λήξει μετά από 30 ημέρες (86400 * 30). Το "/" σημαίνει ότι το cookie είναι διαθέσιμο σε
ολόκληρο τον ιστότοπο (διαφορετικά, επιλέξτε τον κατάλογο που προτιμάτε).
-->


<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "Konstantinos Sakkas";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>
</body>
</html>



