<?php 

$server = "localhost";
$username = "root";
$password = "";
$dbname = "expensetrackerdb";

$connection = new mysqli($server, $username, $password, $dbname);

if($connection->connect_error){
	die("Failed");
}

?>