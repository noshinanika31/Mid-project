<!DOCTYPE html>
<html>
<head>
	<title>shopping.com registration</title>

</head>
<body>
	<form action='user_validation.php' method='post'>
		<fieldset class="main">
			<legend>Add a new user admin!</legend>
			<table >
				<tr>
					<td class="label">Name :</td>
					<td>:</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>
				<tr>
					<td class="label">Email :</td>
					<td>:</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>
				<tr>
					<td class="label">User Name :</td>
					<td>:</td>
					<td><input type="text" name="user_name"></td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>
				<tr>
					<td class="label">Address :</td>
					<td>:</td>
					<td><input type="text" name="address"></td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>
				<tr>
					<td class="label">Password :</td>
					<td>:</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>
				<tr>
					<td class="label">Confirm Password :</td>
					<td>:</td>
					<td><input type="password" name="confirmPassword"></td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>
				<tr>
					<td colspan="3">
						<fieldset>
							<legend>Gender :</legend>
							<input type="radio" name="gender" value="male">Male
							<input type="radio" name="gender" value="female">Female
							<input type="radio" name="gender" value="other">Other
						</fieldset>
					</td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>
				<tr>
					<td colspan = "3">UserType</td>
					<td>
					<input type="radio" name ="type" value="admin"/>Admin
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>
				<tr>
					<td colspan="3">
						<input type="submit" name="submit" value="ADD ADMIN">
						<a href = "admin.php">Go back</a>
					</td>
					</tr>
					
			</table>
			
		</fieldset>
	</form>
</body>
</html>