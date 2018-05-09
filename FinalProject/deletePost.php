<?php

include '../dbConnection.php';

$postID = $_GET['postID'];

$conn = getDatabaseConnection("FinalProj");

$sql = "DELETE FROM posts WHERE postID = :postID";
$stmt = $conn->prepare($sql);
$stmt->execute(array(":postID"=>$postID));

header("Location: blog.php")

?>