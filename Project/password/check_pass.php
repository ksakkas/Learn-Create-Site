<?php
 	
  $pass = $_POST['pass'];

  if(empty($pass)){
      echo '<script>alert("please give password");</script>';
      $sin = 0;
  }
 if (strlen($pass) > 0)
  {
  	$m = strlen($pass);
  }
  	$sin=0;
	$kefa=0;
	$mik=0;
	$ar=0;
	$ch=0;
	for($i=0; $i<strlen($pass); $i++)
	{
		if($pass[$i] >= 'A' && $pass[$i] <='Z')
		{
			$kefa++;
		}

		if($pass[$i] >= 'a' && $pass[$i] <='z')
		{
			$mik++;
		}

		if($pass[$i] >= '0' && $pass[$i] <= '9')
		{
			$ar++;
		}

		if($pass[$i] == '!')
		{
			$ch++;
		}

		else if($pass[$i] == '@')
		{
			$ch++;
		}

		else if($pass[$i] == '#')
		{
			$ch++;
		}

		else if($pass[$i] == '$')
		{
			$ch++;
		}

		else if($pass[$i] == '%')
		{
			$ch++;
		}

		else if($pass[$i] == '&')
		{
			$ch++;
		}

		else if($pass[$i] == '^')
		{
			$ch++;
		}

		else if($pass[$i] == '*')
		{
			$ch++;
		}
	}

	if(($kefa == 1) && ($ch ==0))
	{
		$sin = 1;
	}

	else if(($kefa>1  && $kefa<4 ) && ($ch>0 && $ch<4))
	{
		$sin = 2;
	}

	else if(($kefa >= 3) && ($ch>=3))
	{
		$sin = 3;
	}
	else if($mik>0)
	{
		$sin = 0;
	}


 $m = strlen($pass);

if ($sin == 0)
{ 	echo '<script>alert("the password is very bad");</script>';
}
else if ($sin == 1 && $m >=8)
{
	echo '<script>alert("the password is medium");</script>';
}
else if ($sin == 2 && $m >=8)
{
	echo '<script>alert("the password is good");</script>';
}
else if ($sin == 3 && $m >=8)
{
	echo '<script>alert("the password is very good");</script>';
}
else if($sin == 0 || ($m >0 && $m <8))
{
	echo '<script>alert("the password is very bad");</script>';
}


require("form.html");

?>


