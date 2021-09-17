<?php
include "connection.php";

parse_str(file_get_contents("php://input"), $data);             
$data = json_decode(json_encode($data),true);
$date = $data["date"];
$amount = $data["amount"];
$catg = $data["catg"];
$id = $_GET["id"];
//echo $id;
$query = "SELECT * from `categories` where name =?;";
$stmt = $connection->prepare($query);
$stmt->bind_param("s",$catg);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$catg_id =$row["cid"];

$sql = "INSERT INTO `expenses` (`amount`, `date` ,`category_id`,`user_id`) VALUES (?,?,?,?);"; #add the new user to the database
$stmt2 = $connection->prepare($sql);
$stmt2->bind_param("ssii",$amount,$date,$catg_id,$id);
$stmt2->execute();
$result2 = $stmt2->get_result();
$array[] = $row;
$json = json_encode($array,JSON_PRETTY_PRINT);
echo $json;
?>