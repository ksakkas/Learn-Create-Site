<!DOCTYPE html>
<html>
<head>
    	<meta charset="UTF-8">
</head>
<body>
	<p>
		Γεια σου 
		<strong>
			<?php 
			echo $_POST['YourName'];
			?>
		</strong>
	</p>
	<p>
		Είναι αυτό:
		<strong>
			<?php 
			echo $_POST['YourEmail'];
			$YourEmail=$_POST['YourEmail'];
			if (empty($_POST['YourEmail']))
			{
				echo "error";
			}
			if (!filter_var($YourEmail, FILTER_VALIDATE_EMAIL))
			{
				echo "Μη αποδεκτή μορφή email";
			}
			?>
		</strong> 
		το email σου!;!
	</p>
	<p>
		Είναι αυτή:
		<strong>
			<?php 
			echo $_POST['YourAddr'];
			?>
		</strong>
		η διεύθυνσή σου !;! 
	</p>
	<p>
	Bye!
	</p>
</body>
</html>