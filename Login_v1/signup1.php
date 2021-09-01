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
	if(isset($_POST["first_name"]) && $_POST["first_name"] != ""){
		$first_name = $_POST["first_name"];
	}else{
		die("Don't try to mess around bro 3;)");
	}
	if(isset($_POST["last_name"]) && $_POST["last_name"] != ""){
		$last_name = $_POST["last_name"];
	}else{
		die("Don't try to mess around bro  4;)");
	}
	
		if(isset($_POST["gender"]) && $_POST["gender"] != ""){
		$gender = $_POST["gender"];
	}else{
		die("Don't try to mess around bro  4;)");
	}
	
	
	
	$query = "Select email from users";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()){
		if($email == $row["email"]){
			$_SESSION['email'] =$email;
		  header("Location:signup.php");
		  exit;
		}
	}
	
	
	$x = $connection->prepare("INSERT INTO users (email, password,first_name,last_name,gender) VALUES (?, ?,?,?,?)");
	$x->bind_param("sssss", $email, $password ,$first_name,$last_name,$gender);
	$x->execute();
	
	header("Location:index.php");
?>