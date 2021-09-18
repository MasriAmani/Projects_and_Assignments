<?php
include "connection.php";
$id = $_GET["id"];
$query = "SELECT * FROM `expenses`,`categories` where expenses.category_id = categories.cid and expenses.user_id=$id;";
$stmt = $connection->prepare($query);
$stmt->execute();
$result = $stmt->get_result();
$array =[];
while($row = $result->fetch_assoc()){

$array[] = $row;
}

$json = json_encode($array,JSON_PRETTY_PRINT);
echo $json;
?>