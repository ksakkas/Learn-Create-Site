<!--
When you work with an application, you open it, do some changes, and then you close it. 
This is much like a Session. The computer knows who you are. It knows when you start the application 
and when you end. But on the internet there is one problem: the web server does not know who you are or 
what you do, because the HTTP address doesn't maintain state.

Session variables solve this problem by storing user information to be used across multiple pages 
(e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.

So; Session variables hold information about one single user, and are available to all pages in one 
application.
-->

<!--
Start a PHP Session
A session is started with the session_start() function.

Session variables are set with the PHP global variable: $_SESSION.

Now, let's create a new page called "demo_session1.php". In this page, we start a new PHP 
session and set some session variables:
-->

<?php
// Start the session
//The session_start() function must be the very first thing in your document. Before any HTML tags.

session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.". "<br>";
?>

</body>
</html>

<!--Get PHP Session Variable Values-->
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . "<br><br>";
//or
print_r($_SESSION);

// remove all session variables
session_unset();

// destroy the session
session_destroy();

?>

</body>
</html>