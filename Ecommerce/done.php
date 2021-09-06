<?php
include "connection.php";
$sql1="delete from purchased";
$stmt1 = $connection->prepare($sql1);
$stmt1->execute();

session_destroy();
header('location: index.php');
?>