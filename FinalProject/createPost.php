<?php

include '../dbConnection.php';

$forumID = $_POST['forumID'];
$postTopic = $_POST['postTopic'];
$postText = $_POST['postText'];

$conn =  getDatabaseConnection("FinalProj");

$sql = "INSERT INTO posts (forumID, postTopic, postText)
     VALUES( :forumID, :postTopic, :postText)";
     
$stmt= $conn->prepare($sql);
$stmt->execute(array(":forumID"=>$forumID, ":postTopic"=>$postTopic, ":postText"=>$postText));
header("Location:blog.php?forum=$forumID")
?>