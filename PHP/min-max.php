<!DOCTYPE html>
<html>
<head>
	<title>1h ask se php</title>
</head>
<body>

<form action="tes.php" method="post">
num:  <input type="text" name="num1"><br>
num2: <input type="text" name="num2"><br>
num3: <input type="text" name="num3"><br>
num4: <input type="text" name="num4"><br>
<input type="submit" value="click me">
</form>


<?php

function minoftwo($a,$b)
{
	$min=0;
	if($a>$b)
		$min=$b;
	else
		$min=$a;
	return $min;
}

$num  = $_post["num1"];
$num2 = $_post["num2"];
$num3 = $_post["num3"];
$num4 = $_post["num4"];

$min1=minoftwo($num, $num2);
$min2=minoftwo($num3, $num4);

$min3=minoftwo($min1, $min2);

echo "to min einai" .$min3;
?>
</body>
</html>