<?php

	if(isset($_POST['submit'])){

		$user_name 	= trim($_POST['user_name']); 
		$password	= trim($_POST['password']);
		$type = ($_POST['type']);

		if($user_name == "" || $password == "" || $type==""){
			
			header('location: login.php?error=null_found');

		}else{

			$file = fopen('login.txt', 'r');
			$userdata = fread($file, filesize('login.txt'));		
			$userArray = explode('|', $userdata);
			
		}header('location: admin.php');
			}else{
				header('location: login.php?error=invalid_user_info');
			}

?>