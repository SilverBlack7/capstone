<?php
require 'database.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>

	<div class="header">
		Cybersecurity capstone project
	</div>


	<h1>Database</h1>
	<div>
		
	

	
	<table align="center" cellpadding=5px border=1px solid border-collapse=collapse style="margin-bottom:3em cellpadding:2px;border-collapse:collapse;">
		<tr>
			<th> Id</th>
			<th> Username</th>
			<th> Password</th>
			
		</tr>
		<?php

$user = $_SESSION['username'];
$sql = "SELECT * FROM users";
$result = mysqli_query($dbc, $sql);
	if(mysqli_num_rows($result) > 0)
	{
		
		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
                        echo "<td>   ".$row['id']." </td>";


                        echo "<td>".$row['uname']." </td>";


                        echo "<td>  ".$row['pass']." </td>";
						echo "</tr>";
		}
		      
        }
?>
	</table>
</div>


<p>
<a href="index.php">Back to Home Page</a>
</p>

</body>
</html>