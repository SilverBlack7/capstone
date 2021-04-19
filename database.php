<?php
/*
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$dbc = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db)OR die('Could not connect because: '.mysqli_connect_error());
*/
?>


<?php
/*$server = 'localhost';
$username = 'root';
$password = 'root';
$database = 'auth';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}
*/

$site_title = "Capstone project";
$page_title = "Home page";
$dbc = mysqli_connect('localhost', 'dev', 'lokiuj10!', 'capstone project') OR die('Could not connect because: '.mysqli_connect_error());

?>



