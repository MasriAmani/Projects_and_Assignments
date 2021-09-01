<?php
	
	include("connection.php");
	session_start();

	if(isset($_POST["email"]) && $_POST["email"] != ""){
		$email = $_POST["email"];
	}else{
		die("Don't try to mess around bro 1;)");
	}

	if(isset($_POST["pass"]) && $_POST["pass"] != ""){
		$password = hash('sha256', $_POST['pass']);

	}else{
		die("Don't try to mess around bro 2;)");
	}
	
	
	
	

	
	$query = "Select * from users";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();

    while($row = $result->fetch_assoc()){
		if($email == $row["email"] && $password == $row["password"]){
			 $_SESSION['first_name'] = $row['first_name'];
			 $_SESSION['last_name']= $row['last_name'];
			 $_SESSION['gender'] = $row['gender'];
  	         header('location: home.php');
			 exit;
		}
	}  
	
	  $_SESSION['error']= "Wrong username or password";
	   header('location: index.php');
	

?>