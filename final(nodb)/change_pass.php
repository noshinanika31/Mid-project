<?php
	session_start();
?>
<html>
	<head>
		<title>Change Password </title>
	</head>
	<body>
	<form action='change_pass.php' method='post'>
		<table>
			<tr>
				 <td>
				<fieldset>
					<legend> CHANGE PASSWORD </legend>
					Current Password &nbsp &nbsp &nbsp : 
					<input type="password" name="pass"/> 
					<br>
					<font color="green">New Password &nbsp &nbsp &nbsp &nbsp &nbsp : </font>
					<input type="password" name="new_pass"/>
					<br>
					<font color="red">Retype New Password : </font>
					<input type="password" name="re_new_pass"/>
					<hr/>
					<input type="submit" name = "changePasswordSubmit" value="submit"/>
					<a href = "admin.php">Go to homepage </a>
				</fieldset>
			   </td>
		   </tr>
		</table>
	<form>
	</body>
</html>
<?php
	if(isset($_POST["changePasswordSubmit"]))
	{
		$old_pass = $_POST["pass"];
		$newpass = $_POST["new_pass"];
		$repass = $_POST["re_new_pass"];
		
		if($old_pass == "")
		{
			echo "Password can't be empty";
		}
		elseif($newpass == "")
		{
			echo "Password can't be empty";
		}
		else if($old_pass == $newpass)
		{
			echo "New password can't same as old_pass";
		}
		else if($newpass != $repass)
		{
			echo "Missmatch password";
		}
		else if($old_pass != $_SESSION['password'])
		{
			echo "Incorrect old password";
		}
		else
		{
			$_SESSION['password'] = $newpass;
			echo "Password changed successfully";
		}		
	}
?>