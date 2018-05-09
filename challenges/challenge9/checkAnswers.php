<?php

include '../../dbConnection.php';

$conn = getDatabaseConnection("challenge9");

$answer = $data[0];

//next query allows for SQL injection because of the single quotes
//$sql = "SELECT * FROM lab9_user WHERE username = '$username'";

$sql = "UPDATE * FROM answer SET'".$answer."'='".$answer."'+1";

$stmt = $conn->prepare($sql);
$stmt->execute();
$record = $stmt->fetch(PDO::FETCH_ASSOC);

//print_r($record);

echo json_encode($record);

?>