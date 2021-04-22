<!--
<form action="registerok.php" method="post">
name <input type="text" name="na"><br>
emai <input type="email" name="em"><br>
pass <input type="password" name="pa"><br>
<input type="submit">
</form>
-->

<?php
session_start();
$n = $_POST['na'];
$e = $_POST['em'];
$p = $_POST['pa'];

//------------------------------------------------
$servername = "localhost";
$username = "root";
$pass = "";
$db = "eshop";

$conn = new mysqli($servername, $username, $pass, $db);

$sql = "INSERT INTO user(name, email, pass) VALUES ('$n', '$e', '$p')";

if($conn->query($sql) === TRUE){
	$_SESSION['name'] = $n;
	header("Location: ./page.php");
}
else{
	header("Location: ./register.php");
}


?>