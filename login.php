
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>

	<div class="header">
		<?php

require 'database.php';
if(isset($_POST['submit_btn']))
{
	session_start();
	
	$username = mysqli_real_escape_string ($dbc,$_POST['username']);
	$password = mysqli_real_escape_string ($dbc,$_POST['password']);
	
	$sql = "SELECT pass FROM users WHERE uname = '$username'";
	$result = mysqli_query($dbc, $sql);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			if(md5($password) == $row['pass'])
			{
				$_SESSION['username'] = $_POST['username'];
				$name = $_SESSION['username'];
				$sql1 = "CREATE TABLE IF NOT EXISTS $name(message varchar(255),sender varchar(255))";

				if(mysqli_query($dbc, $sql1)){
   					 echo "Table created successfully.";
				} else{
   				 echo "ERROR: Could not able to execute $sql1. " . mysqli_error($dbc);
				}
				header('Location: msg_center.php');		
			}
			else
			{
				echo '<h4 style= "color:red"> Incorrect Username or Password</h4>';
			}
		}
	}
	else
	{
		echo '<h4 style= "color:red"> Username doesn\'t exist</h4>';
	}
}
else{
	echo"<h4>Cybersecurity capstone project</h4>";
}
?>
	</div>


	<h1>Login</h1>
	<span>or <a href="register.php">register here</a></span>

	<form action="login.php" method="POST">
		
		<input type="text" placeholder="Enter your username" name="username" required>
		<input type="password" placeholder="Password" name="password" required>

		<input type="submit" name="submit_btn">

	</form>

</body>
</html>