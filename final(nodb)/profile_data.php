<?php
	session_start();
?>
<html>
	<head>
		<title>Profile data </title>
	</head>
	<body>
	<form action='profile_data.php' method='post' target="_top">
		<table >
			<tr>
				 <td>
				
					Name
					<?php
						echo str_repeat('&nbsp;', 9).": ".$_SESSION['name'];
					?>
					
					<br>
					<hr/>
					Email
					<?php
						echo str_repeat('&nbsp;', 10).": ".$_SESSION['email'];
					?> 
					
					<br>
					<hr/>
					Gender
					<?php
						echo str_repeat('&nbsp;', 8).": ".$_SESSION['gender'];
					?>
					
					<br>
					<hr/>
					Address
					<?php
						echo str_repeat('&nbsp;', 1).": ".$_SESSION['address'];
					?>
					 
					<br>
					<hr/>
					<a href="edit_profile.php">Edit Profile</a> <br> <br>
					<a href = "user.php"> go to the homepage</a>
				
			   </td>
			   <td>
			 	<img src = "<?php echo $_SESSION['path']; ?>" alt="profile picture" width="100" height="100"><br>
			 	<a href="profilepic.php">Change the profile picture</a><br>
				
			 </td>
			 </tr>
		</table>
		<form>
	</body>
</html>
