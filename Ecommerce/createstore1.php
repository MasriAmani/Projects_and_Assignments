<?php
include "connection.php";
session_start();

if(isset($_POST["store_name"]) && $_POST["store_name"] != "" && strlen($_POST["store_name"]) >= 3) {
    $store_name = $_POST["store_name"];
}else{
    die ("Enter a valid input");
}

if(isset($_POST["phone2"]) && $_POST["phone2"] != "" ) {
    $phone = $_POST["phone2"];
}else{
    die ("Enter a valid input");
}

if(isset($_POST["city1"]) && $_POST["city1"] != "" ) {
    $city = $_POST["city1"];
}else{
    die ("Enter a valid input");
}

$owner_id = $_SESSION["owner_id"];


$sql1="Select * from stores where name=?"; #Check if the store name already exists in the database
$stmt1 = $connection->prepare($sql1);
$stmt1->bind_param("s",$store_name);
$stmt1->execute();
$result = $stmt1->get_result();
$row = $result->fetch_assoc();

if(empty($row)){
$sql2 = "INSERT INTO `stores` (`name`, `phone`,`city`, `owner_id`) VALUES (?, ?, ?, ?);"; #add the new store to the database
$stmt2 = $connection->prepare($sql2);
$stmt2->bind_param("sssi",$store_name,$phone,$city,$owner_id);
$stmt2->execute();
$result2 = $stmt2->get_result();
session_start();
$sql3 = "SELECT * FROM stores WHERE id=(SELECT max(id) FROM stores);";
$stmt3 = $connection->prepare($sql3);
$stmt3->execute();
$result3 = $stmt3->get_result();
$row3 = $result3->fetch_assoc();
$_SESSION["store_id"] = $row3['id'];



$_SESSION["flash"] = "";
header('location:homestore.php');
}
else{
    session_start();
    $_SESSION["flash"] = "Store Name Already Exists";
    header('location:createstore.php');
}
?>