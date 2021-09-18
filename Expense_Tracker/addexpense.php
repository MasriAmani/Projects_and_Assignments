<?php
include "connection.php";


$id = $_POST["id"];
$date = $_POST["date"];
$amount = $_POST["amount"];
$catg = $_POST["catg"];


$time = strtotime($date);
$newformat = date('Y-m-d',$time);


$query = "SELECT * from `categories` where name =?;";
$stmt = $connection->prepare($query);
$stmt->bind_param("s",$catg);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$catg_id =$row["cid"];



$sql = "INSERT INTO `expenses` (`amount`, `date` ,`category_id`,`user_id`) VALUES (?,?,?,?);";
$stmt2 = $connection->prepare($sql);
$stmt2->bind_param("ssii",$amount,$newformat,$catg_id,$id);
$stmt2->execute();
$id = $stmt2->insert_id;

$expense = [];
$expense["id"] = $id;
$expense["date"] = $newformat ;
$expense["amount"] = $amount;
$expense["catg"] = $catg;

$expense_json = json_encode($expense);
echo $expense_json;

?>