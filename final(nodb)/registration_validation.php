<?php
	if(!isset($_SESSION['name']))
	{
		header("Location:login.php");
	}
	session_start();
	
	$flag = false;
	if (isset($_POST['name']))
	{
		$start = ord(substr($_POST['name'],0,1));
		if ($_POST['name']=="")
		{
			$flag = true;
			echo "<br>";
			echo "Name can not be empty";
		}
		elseif(str_word_count($_POST['name'])==1)
		{
			$flag = true;
			echo "<br>";
			echo "Minimum 2 word required";
		}
		elseif(!(($start>64 && $start<91) ||($start>96 && $start<123)))
		{
			$flag = true;
			echo "<br>";
			echo "First word must contaion a letter";
		}
		elseif (!preg_match("/^[a-zA-Z .,-]*$/",$_POST["name"]))
		{
			$flag = true;
			echo "<br>";
			echo "Only letters and white space allowed";
		}
		else
		{
			$_SESSION['name'] = $_POST['name'];
		}
	}
	if(isset($_POST['email']))
	{
		if ($_POST['email']=="")
		{
			$flag = true;
			echo "<br>";
			echo "Email can not be empty";
		}
		elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
			$flag = true;
			echo "<br>";
			echo "Invalid email format"; 
		}
		else 
		{
			$_SESSION['email'] = $_POST['email'];
		}
	}
	if(isset($_POST['submit']))
	{
		if(empty($_POST['gender']))
		{
			$flag = true;
			echo "<br>";
			echo "Gender can't be empty";
		}
		else
		{
			$_SESSION['gender'] = $_POST['gender'];
		}
	}
	if(isset($_POST['submit']))
	{
		if(empty($_POST['address']))
		{
			$flag = true;
			echo "<br>";
			echo "address can't be empty";
		}
		else
		{
			$_SESSION['address'] = $_POST['address'];
		}
	}
	if(isset($_POST['submit']))
	{
		if(empty($_POST['type']))
		{
			$flag = true;
			echo "<br>";
			echo "type can't be empty";
		}
		else
		{
			$_SESSION['type'] = $_POST['type'];
		}
	}
	
	if(isset($_POST['submit']))
	{
		$user_name = $_POST["user_name"];
		$password = $_POST['password'];
		
		if(!preg_match("/^[a-zA-Z0-9.,-]*$/",$user_name))
		{
			$flag = true;
			echo "<br>";
			echo "Only letters and white space allowed in user name";
		}
		elseif(strlen($user_name)<2)
		{
			$flag = true;
			echo "<br>";
			echo "User name must contain at list 2 character";
		}
		elseif(strlen($password)<8)
		{
			$flag = true;
			echo "<br>";
			echo "Password must contain atlist 8 character";
		}
		elseif(!preg_match("/[@,#,$,%]/",$password))
		{
			$flag = true;
			echo "<br>";
			echo "Password must contain at least one of the special characters @, #, $, %";
		}
		else
		{
			$_SESSION['password'] = $_POST['password'];
		}
		
	}
	if(isset($_POST['submit']))
	{
		$newpass = $_POST['password'];
		$repass = $_POST['confirmPassword'];
		
		if($newpass == "")
		{
			$flag = true;
			echo "<br>";
			echo "Password can't be empty";
		}
		elseif($newpass != $repass)
		{
			$flag = true;
			echo "<br>";
			echo "Miss match password";
		}
		else
		{
			$_SESSION['password'] = $_POST['password'];
		}
		
	}
	if(!$flag)
	{
		echo "Successfully registered, Login your account";
		header("Location:login.php");
	}
	
				$data = $user_name."|".$password."|".$type."|";
				$myfile = fopen("login.txt", 'a');
				fwrite($myfile, $data);
				fclose($myfile);

?>
