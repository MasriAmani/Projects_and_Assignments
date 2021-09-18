<?php
include("connection.php");
session_start();

if(isset($_POST["username"]) && $_POST["username"] != ""){
		$username = $_POST["username"];
	}
else{
		die("Don't try to mess around bro 1;)");
	}

if(isset($_POST["pass"]) && $_POST["pass"] != ""){
		$password = hash('sha256', $_POST['pass']);

	}
else{
		die("Don't try to mess around bro 2;)");
	}
	
	
$query = "Select * from users";
$stmt = $connection->prepare($query);
$stmt->execute();
$result = $stmt->get_result();

while($row = $result->fetch_assoc()){
    if($username == $row["username"] && $password == $row["password"]){
	     $_SESSION['user_id'] = $row['id'];
  	      header('location: home.php');
		  exit;
		}
	}  
	
$_SESSION['flash']= "Wrong Email or Password!";
 header('location: index.php');
	

?>