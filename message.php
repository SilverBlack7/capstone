<?php

require 'database.php';
session_start();

//echo $_SESSION['username'];
//$sql = "SELECT pass FROM users WHERE uname = '$_SESSION['username']'";
if(isset($_POST['send_btn']))
{
	$send_to_name = mysqli_real_escape_string ($dbc,$_POST['send_to']);
	$username = $_SESSION['username'];
	$msg = mysqli_real_escape_string ($dbc,$_POST['message']);
	$sql = "INSERT INTO $send_to_name VALUES ('$msg', '$username') ";
	$result = mysqli_query($dbc, $sql);
	if($result)
	{
		//echo "success";
	}
	else{
		echo "Could not send message due to". mysqli_error($dbc);
	}
	//header('Location: login.php');
}
?>




<!DOCTYPE html>
<html>
<head>
	<title>Send Message</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>

	<div class="header">
		USER: <?php echo $_SESSION['username']; ?>
	</div>



	<h1>Message</h1>

		
		<span> From: <?php echo $_SESSION['sender'] ?></span>
		<p style="width:30%; word-break: break-all; margin:auto; margin-top: 1em; margin-bottom: 3em; border-style: ridge"> <?php echo $_SESSION['msg'] ?></p>
		
	
	<span> <a href="msg_center.php">Back to Message Center</a></span>
</body>
</html>