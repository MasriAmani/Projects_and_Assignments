<?php
include "connection.php";

$id = $_GET["id"];

$sql = "delete from products WHERE id = $id ";
$stmt = $connection->prepare($sql);
$stmt->execute();
header('location: homestore.php');
?>