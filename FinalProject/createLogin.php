<?php

session_start();

include '../dbConnection.php';

$conn = getDatabaseConnection("FinalProj");

$username = $_POST['username'];
$password = sha1($_POST['password']);
$email = $_POST['email'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

//next query allows for SQL injection because of the single quotes
//$sql = "SELECT * FROM lab9_user WHERE username = '$username'";

$sql = "SELECT * FROM users WHERE username = :username";

$stmt = $conn->prepare($sql);
$stmt->execute(array(":username"=>$username));
$record = $stmt->fetch(PDO::FETCH_ASSOC);

if(empty($record)){
    $sql = "INSERT INTO users (admin, username, password, email, firstName, lastName, creationDate)
        VALUES( 0, :username, :password, :email, :firstName, :lastName, :creationDate)";

        $stmt = $conn->prepare($sql);
        $stmt->execute(array(":username"=>$username, ":password"=>$password, ":email"=>$email, 
        ":firstName"=>$firstName, ":lastName"=>$lastName, ":creationDate"=>date('m/d/Y h:i:s a', time())));
        $_SESSION['username'] = $_POST['username'];
        header("Location:index.php");
} else {
    header("Location:signup.php?signup=false");
}

echo json_encode($record);

?>