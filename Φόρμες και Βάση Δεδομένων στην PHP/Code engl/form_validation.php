<!--
    What is the $_SERVER["PHP_SELF"] variable?
    The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently 
    executing script.

    What is the htmlspecialchars() function?
    The htmlspecialchars() function converts special characters to HTML entities. 
    This means that it will replace HTML characters like < and > with &lt; and &gt;. 
    This prevents attackers from exploiting the code by injecting HTML or Javascript code 
    (Cross-site Scripting attacks) in forms.
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
// define variables and set to empty values
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