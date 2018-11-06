<?php
	
	if(isset($_GET['error'])){
		echo $_GET['error'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login to the Shopping.com</title>
</head>
<body>
		<form action='loginValidation.php' method='post' target="_top">
		<fieldset>
			<table><h1>LOGIN</h1>
				<tr>
					<td>USERNAME</td>
					<td><input type="text" name="user_name"></td>
				</tr>
				<tr>
					<td>PASSWORD</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>UserType</td>
					<td>
					<input type="radio" name ="type" value="user" />User
					<input type="radio" name ="type" value="admin"/>Admin
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
				
			</table>
		</fieldset>
	</form>
</body>
</html>