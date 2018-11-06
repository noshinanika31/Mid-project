<?php
	session_start();
	if($_SESSION['name'])
	{

	}
	else
	{

		header('location:index.php');
	}
?>
<html>
	<head>
		<title>Logged</title>
	</head>
	<body>
		<form target="_top" action="" method="post">
		<table  align="center" border="1" width="1000" height="500">
		<tr height="100">
		<hr align="center" style ="border:1px solid brown">
		<a  align="center" href="addproducts.php" align="center">Add products</a>
		<a  align="center" href="viewproduct.php" align="center">View products</a>
		<a  align="center" href="contact.php" align="center">contact</a>
		<a  align="center" href="approveuser.php" align="center">Approve a user</a>
		<a  align="center" href="approvedm.php" align="center">Approve a delivary man</a>
		
		<hr style ="border:1px solid brown">
			<td>
			<table border="0">
				<tr>
				<td width="1000">
					<img src="anika.JPG">
					
				</td>
					<td>
						Logged in as
					</td>
					<td >
						<?php echo $_SESSION['name'];?>
					</td>
					<td>
						<input type="submit" name="logout" value="logout"/>
					</td>
					</tr>
			</table>
			</td>
		</tr>
		<tr>
				<td>
				<table border="0">
				<tr>
					<td valign="top" width="300">
					<h1>Account</h1>
					<ul>
					<li><a href="profile_data.php" target="myframe">View Profile</a></li>
					<li><a href="edit_profile.php"target="myframe">Edit Profile</a></li>
					<li><a href="profilepic.php" target="myframe">Change Profile Picture</a></li>
					<li><a href="change_pass.php"target="myframe">Change Password</a></li>
					<li><a href ="viewusers.php" target="myframe">View All users </a></li>
					<li><a href="adduser.php"target="myframe">Add a new user!</a></li>
					<li><a href="addadmin.php"target="myframe">Add a new admin!</a></li>
					
					</ul>
				</td>
			</tr>
			</td>
	
			</table>
		</form>
	</body>
	
	
</html>
<?php
	if(isset($_POST['logout']))
	{
		session_destroy();
		header("Location:login.php");
	}
	
?>
