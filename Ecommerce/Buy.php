<?php
include "connection.php";
session_start();
$orderid = $_SESSION["orderid"];
$custid = $_SESSION["custid"] ;


$sql1 = "select * from products_orders where order_id =$orderid ;"; 
$stmt1 = $connection->prepare($sql1);
$stmt1->execute();
$result = $stmt1->get_result();
 while($row = $result->fetch_assoc()){
     $quan =$row["quantity"];
	 $pid =$row["product_id"];
	 $sql = "update`products` set quantity = quantity -  $quan where`id`= $pid;"; 
     $stmt = $connection->prepare($sql);
     $stmt->execute();
 }



$sql = "update`customer_order` set `started` = 0 where`customer_id`= $custid;"; 
$stmt = $connection->prepare($sql);
$stmt->execute();

$sql = "update`orders` set `payed` = 1 where`id`= $orderid;"; 
$stmt = $connection->prepare($sql);
$stmt->execute();
header("location:  ViewCart.php?orderid=".$orderid." &custid=".$custid);

?>