<?php
include "connection.php";
$id = $_GET["id"];
$query = "Delete from `expenses` where id =$id;";
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