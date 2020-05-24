<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ditshop";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO register (name, lastname, email, pass)
     VALUES ('$_POST[name]', '$_POST[lastname]', '$_POST[email]', '$_POST[pass]')";
    // use exec() because no results are returned
    $conn->exec($sql);
    include 'index.html';
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
</body>
</html>