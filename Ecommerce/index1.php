<?php
include "connection.php";

if (isset($_POST["email"]) and $_POST["email"] !="")
	{
		$email = $_POST["email"];
	}else
	{
		die("Try again next time 1");
	}

if (isset($_POST["password"]) and $_POST["password"] !="")
	{
		$password = $_POST["password"];
	}else{
		die("Try again next time 2");
	}
$hash = hash('sha256', $password);
$sql1="Select * from users where email=? and password=?"; #Check if the email already exists in the database
$stmt1 = $connection->prepare($sql1);
$stmt1->bind_param("ss",$email,$hash);
$stmt1->execute();
$result = $stmt1->get_result();
$row = $result->fetch_assoc();

if(empty($row)){
	session_start();
	$_SESSION["flash"] = "Wrong Email or Password!";
	header('location: index.php');
}
else{
	session_start();
	$_SESSION["name"] = $row["first_name"];
	if($row["gender"]==0){
	$_SESSION["gender"] = "Mr";
	}else{$_SESSION["gender"] = "Ms";}
	if($row["user_type"]==0){
		$_SESSION["cust_id"]= $row["id"];
		$_SESSION["type"] = "C";
	header('location: homecust.php');}
	 else{	
	 $_SESSION["type"] = "O";
	 $_SESSION["owner_id"] = $row["id"];
	  $sql2="Select * from stores where owner_id=? "; #Check if the store owner already created a store
      $stmt2 = $connection->prepare($sql2);
      $stmt2->bind_param("i",$row["id"]);
      $stmt2->execute();
      $result = $stmt2->get_result();
      $row1 = $result->fetch_assoc();
	  if(empty($row1)){
	   header('location: createstore.php');}
	   else {
		$_SESSION["store_id"] =$row1["id"];
	   header('location: homestore.php');}
}
}
?>