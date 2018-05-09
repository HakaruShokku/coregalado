<?php

session_start();

include '../dbConnection.php';

$conn = getDatabaseConnection("FinalProj");

$username = $_POST['username'];
$password = sha1($_POST['password']);

$sql = "SELECT *
        FROM users
        WHERE username = :username
        AND password = :password";

$stmt = $conn->prepare($sql);
$stmt->execute(array(":username"=>$username, ":password"=>$password));
$record = $stmt->fetch(PDO::FETCH_ASSOC);

if(empty($record)){
    header('Location:login.php#');
} else {
    if($record['admin'] == 1){
        $_SESSION['admin'] = $record['admin'];
    }
    $_SESSION['username'] = $record['username'];
    header('Location:index.php');
}

?>