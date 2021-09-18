<?php
include "connection.php";
//$id = $_GET["id"];
$query = "SELECT c.name , sum(e.amount) s FROM `expenses` e,`categories` c where e.category_id = c.cid  group by c.name;";
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