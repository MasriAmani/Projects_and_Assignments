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
	 $sql = "update`products` set quantity = quantity -  $quan where`id`= $pid;";  // when the customer buys the items , we should decrement the quantities in the products table
     $stmt = $connection->prepare($sql);
     $stmt->execute();
 }



$sql = "update`customer_order` set `started` = 0 where`customer_id`= $custid;";  // also after buying the items we put "started"=0 so that he can start a new cart if he wants
$stmt = $connection->prepare($sql);
$stmt->execute();

$sql = "update`orders` set `payed` = 1 where`id`= $orderid;";                 // we update the order to be payed (after he buys the items)
$stmt = $connection->prepare($sql);
$stmt->execute();
header("location:  ViewCart.php?orderid=".$orderid." &custid=".$custid);

?>