<?php
include "connection.php";

if(isset($_POST["username"]) && $_POST["username"] != "" && strlen($_POST["username"]) >= 3) {
    $username = $_POST["username"];
}else{
    die ("Enter a valid input");
}

if(isset($_POST["pass"]) && $_POST["pass"] != "" ) {
    $password = $_POST["pass"];
}else{
    die ("Enter a valid input");
}

if(isset($_POST["confpass"]) && $_POST["confpass"] != "" ) {
    $confirmPassword = $_POST["confpass"];
}else{
    die ("Enter a valid input");
}


if ( $password != $confirmPassword){
	session_start();
    $_SESSION["flash"] = "Please Confirm Password!";
    header('location:signup.php');
	exit;
}
	

$sql1="Select * from users where username=?"; #Check if the username already exists in the database
$stmt1 = $connection->prepare($sql1);
$stmt1->bind_param("s",$username);
$stmt1->execute();
$result = $stmt1->get_result();
$row = $result->fetch_assoc();

if(empty($row)){
$sql2 = "INSERT INTO `users` (`username`, `password`) VALUES (?, ?);"; #add the new user to the database
$hash = hash('sha256', $password);
$stmt2 = $connection->prepare($sql2);
$stmt2->bind_param("ss",$username,$hash);
$stmt2->execute();
$result2 = $stmt2->get_result();
$_SESSION["flash"] = "";
header('location:index.php');
}
else{
    session_start();
    $_SESSION["flash"] = "Username Already Exists";
    header('location:signup.php');
}
?>