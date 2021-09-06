<?php
include "connection.php";

$id = $_GET["id"];
$quan =  $_GET["quan"];
if ($quan == 0){
	header('location: homestore.php');}
else {
$quan =  $_GET["quan"] -1;
$sql = "UPDATE products SET quantity = $quan WHERE id = $id ";
$stmt = $connection->prepare($sql);
$stmt->execute();
header('location: homestore.php');}
?>