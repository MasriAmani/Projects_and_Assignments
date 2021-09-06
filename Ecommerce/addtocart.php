<?php
include "connection.php";
session_start();

if(isset($_GET["selquan"]) &&$_GET["selquan"] != "" ) {
    $selquan = $_GET["selquan"];
}else{
    die ("Enter a valid input");
}

$id = $_SESSION['productid'] ;

$sql1="Select * from purchased where product_id=?";
$stmt1 = $connection->prepare($sql1);
$stmt1->bind_param("i",$id);
$stmt1->execute();
$result = $stmt1->get_result();
$row = $result->fetch_assoc();

if(empty($row)){
$sql2 = "INSERT INTO `purchased` (`product_id`, `quantity`) VALUES (?,?);";
$stmt2 = $connection->prepare($sql2);
$stmt2->bind_param("ii",$id,$selquan);
$stmt2->execute();
header('location: ViewCart.php');

}
else { 
$quan = $selquan + $row['quantity'];
$sql2 = "Update `purchased` set `quantity` = $quan where `product_id`=$id;";
$stmt2 = $connection->prepare($sql2);
$stmt2->execute();
header('location: ViewCart.php');

}
?>
	   
	    
	   
	   
