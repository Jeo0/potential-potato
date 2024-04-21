<?php
$host="127.0.0.1";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="test1";

$conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();
# set the root at the base where you can see (back, front, proj_updates, README.md)
#define('ROOT_PATH', getcwd(). '/../');	
#define('ROOT_PATH', dirname(__DIR__) . '/../');	

?>
