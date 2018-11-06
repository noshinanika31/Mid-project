<?php
	session_start();
?>
<html>
	<body>
	<form target="_top" action="profile.php" method="post">
		<table align = 'center' border='1' width='600' height='500'>
			<tr>
				<td colspan='3' height='100'> 
					&nbsp &nbsp &nbsp
					Hello
					<?php
						$hello = "user";
						if(isset($_SESSION['name']))
						{
							$hello = $_SESSION['name'];
						} 
						echo str_repeat('&nbsp;', 30);
						echo "Logged in as ";
						$arr = explode(' ',trim($hello));
						echo $arr[0];
						echo str_repeat('&nbsp;', 2)." |";
					?>
					<input type="submit" name="logout_button" value="logout"></br>
					
				</td>
			</tr>
			
			<tr>
				<td valign="top" width='200'> 
					<b>  Links </b></br><hr>
					<a href="profile_data.php" target="profileIframe"><u>* View Profile</u></a></br>
					 <a href="edit_profile.php" target="profileIframe"><u>* Edit Profile</u></a></br> 
					 <a href="profilepic.php" target="profileIframe"><u>* Change Profile Pic</u></a></br>
					 <a href="change_pass.php" target="profileIframe"><u>* Change password</u></a></br> 
					 <input type="submit" name="logout_button" value="logout"></br>
				</td>
				
				<td valign="top"> 
					<iframe name="profileIframe" src="home_text.html" ></iframe>
				</td>
			</tr>	
		</table>
	</form>
		
	</body>	
</html>
<?php
	if(isset($_POST['logout_button']))
	{
		session_unset();
		session_destroy();
		header("Location:home.php");
	}
?>