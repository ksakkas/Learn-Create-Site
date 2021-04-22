<!--
<form action="loginok.php" method="post">
email <input type="email" name="em">
pass <input type="password" name="pas">
<input type="submit">
</form>
-->


<?php
$e = $_POST['em'];
$p = $_POST['pas'];

$servername = "localhost";
$username = "root";
$pass = "";
$db = "eshop";

$conn = new mysqli($servername, $username, $pass, $db);

$sql = "SELECT * FROM user WHERE email='$e' and pass='$p'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "ok";
}
?>