<?php
include "connection.php";
session_start();
$storeid = $_SESSION["storeid"];

if(isset($_GET["selquan"]) &&$_GET["selquan"] != "" ) {
    $selquan = $_GET["selquan"];
}else{
    die ("Enter a valid input");
}

$pid = $_SESSION['productid'] ;
$custid= $_SESSION["cust_id"] ;
				   
$sql4 = "SELECT * FROM `customer_order` WHERE `customer_id`= $custid;"; //to see if the customer has started a cart
$stmt4 = $connection->prepare($sql4);
$stmt4->execute();
$result4 = $stmt4->get_result();
$row4 = $result4->fetch_assoc();

if(empty($row)){
$sql5= "INSERT into`customer_order` (`customer_id`,`started`) values ($custid ,0);"; 
$stmt5 = $connection->prepare($sql5);
$stmt5->execute();
}


if ($row4["started"] == 0){
		
$sql2 = "INSERT INTO `orders` (`customer_id`, `payed`) VALUES (?, 0);";   // if he hasnt started a cart create for him an order
$stmt2 = $connection->prepare($sql2);
$stmt2->bind_param("i",$custid);
$stmt2->execute();

$sql3 = "SELECT * FROM orders WHERE id=(SELECT max(id) FROM orders);";     // get the id of the order
$stmt3 = $connection->prepare($sql3);
$stmt3->execute();
$result3 = $stmt3->get_result();
$row3 = $result3->fetch_assoc();
$_SESSION["orderid"] = $row3["id"]; 
$id = $_SESSION['orderid'] ;

$sql6 = "update`customer_order` set `started` = 1 where`customer_id`= $custid;"; // set the started to 1 because now he has started an order
$stmt6 = $connection->prepare($sql6);
$stmt6->execute();
	}

	
$id = $_SESSION['orderid'] ;
$sql= "SELECT * FROM products_orders WHERE order_id = $id and product_id = $pid;"; // if he already started an order use the same order id to insert the corresponding  product added 
$stmt = $connection->prepare($sql);                                                 // but we have to check if this product is alreday in the cart
$stmt->execute();
$result = $stmt->get_result();
$row= $result->fetch_assoc();


if(empty($row)){

$sql1="INSERT INTO `products_orders` (`order_id`, `product_id`,`quantity`) VALUES (?, ?, ?);"; // if it is not insert it 
$stmt1 = $connection->prepare($sql1);
$stmt1->bind_param("iii",$id,$pid,$selquan);
$stmt1->execute();
header("location: product.php?id=".$storeid."&custid=".$custid);
}
else {


$sql2 = "update `products_orders` set quantity =$selquan WHERE order_id=$id and product_id =$pid;";   // if it is already in the cart update the quantiy selected
$stmt2 = $connection->prepare($sql2); 
$stmt2->execute();
header("location: product.php?id=".$storeid." &custid=".$custid);

}
	



?>
	   
	    
	   
	   
