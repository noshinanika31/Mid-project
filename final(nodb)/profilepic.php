<?php
	session_start();

?>
<html>
	<head>
		<title>Profile Picture Validation </title>
	</head>
	<body>
	<form action='profilepic.php' method='post'>
		<table>
		     <td>
			<fieldset>
				<legend> Profile Picture </legend>
				<img src = "<?php echo $_SESSION['path']; ?>" width = '130' height = '120'   align = "center">
				<br>
				<input type="file" size="60" name="selected_file" />
				<hr/>
				<input type="submit" name = "photoSubmit" value="submit"/>
				<a href = "admin.php"> go to the homepage</a>
			</fieldset>
		   </td>
		</table>
	<form>
	</body>
</html>
<?php
	if(isset($_POST["photoSubmit"]))
	{
		$info = pathinfo($_POST["selected_file"]);
		if(isset($info["extension"]))
		{
			if (!($info["extension"] == "jpg" || $info["extension"] == "jpeg" || $info["extension"] == "png"))
			{
				echo "Only jpg,jpeg,png files are allowed";
			}
			else
			{
				$_SESSION['path'] = $_POST["selected_file"];
				header("Location:profilepic.php");
			}
		}
		else
		{
			echo "Please select an image";
		}
	}
?>