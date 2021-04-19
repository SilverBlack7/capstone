<?php
require 'database.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Message Center</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>

	<div class="header">
		USER: <?php echo $_SESSION['username']; ?>
	</div>


	<h1>Message Center</h1>
	<div>
		<h4> Your messages </h4>
		
	

	
	<table align="center" width=30% border=1px solid border-collapse="collapse" style="margin-bottom:3em">
		<tr>
			<th> Message</th>
			
		</tr>
		<?php

$user = $_SESSION['username'];
$sql = "SELECT * FROM $user";
$result = mysqli_query($dbc, $sql);
	if(mysqli_num_rows($result) > 0)
	{
		
		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
                        echo "<td> <a href='message.php'> Message from ".$row['sender']."</a> </td>";
			echo "</tr>";
			$_SESSION['sender'] = $row['sender'];
			$_SESSION['msg'] = $row['message'];
		}
		      
        }
?>
	</table>
</div>

<p>
	<h3 style="margin-bottom:2em"> <a href="send_msg.php">Send a message</a></h3>
</p>
<p>
	<form action="login.php" method="POST">
		
		
		<input type="submit" value="Logout" name="logout_btn">
	
	</form>
</p>

</body>
</html>
