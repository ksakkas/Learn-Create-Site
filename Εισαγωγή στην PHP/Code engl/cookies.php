<!--setcookie(name, value, expire, path, domain, secure, httponly);-->

<!--The following example creates a cookie named "user" with the value "Konstantinos Sakkas". 
The cookie will expire after 30 days (86400 * 30). The "/" means that the cookie is available in 
entire website (otherwise, select the directory you prefer).
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



