<?php
include "connection.php";
$stmt = $connection->prepare("INSERT INTO expenses (date,amount,category,user_id) Values (?,?,?,?)");
$stmt->bind_param("sssi",$date,$amount ,$categ,$user_id);
$stmt->execute();

$query = "Select * from expenses where id =?";
$stmt = $connection->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$json = json_encode($row,JSON_PRETTY_PRINT);
echo $json;