<?php
include "connection.php";
session_start();

if(isset($_POST["product_name"]) && $_POST["product_name"] != "" && strlen($_POST["product_name"]) >= 5) {
    $product_name = $_POST["product_name"];
}else{
    die ("Enter a valid input");
}

if(isset($_POST["product_descrip"]) && $_POST["product_descrip"] != "" && strlen($_POST["product_descrip"]) >= 15) {
    $product_descrip = $_POST["product_descrip"];
}else{
    die ("Enter a valid input");
}

if(isset($_POST["quantity"]) && $_POST["quantity"] != "") {
    $quantity = $_POST["quantity"];
}else{
    die ("Enter a valid input");
}


if(isset($_POST["price"]) && $_POST["price"] != "" ) {
    $price= $_POST["price"];
}else{
    die ("Enter a valid input");
}
$image ="assets/images/".$_FILES["image"]["name"];
move_uploaded_file($_FILES["image"]["tmp_name"],$image);


$img= $_FILES["image"]["name"];
$id = $_SESSION["store_id"];

$sql2 = "INSERT INTO `products` (`name`,`description`, `image`,`quantity`, `price`,`store_id`) VALUES (?, ?, ?, ?, ?, ?);"; 
$stmt2 = $connection->prepare($sql2);
$stmt2->bind_param("sssisi",$product_name,$product_descrip,$img,$quantity,$price,$id);
$stmt2->execute();
header('location: homestore.php');


?>