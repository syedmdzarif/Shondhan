<?php

error_reporting(0);

$conn = mysqli_connect('localhost', 'root', '', 'shondhan');
session_start();


if(isset($_SESSION['id'])){
    $js_id = $_SESSION['id'];
 }

if(isset($_GET['id'])){
    $job_id = mysqli_real_escape_string($conn, $_GET['id']);
}

// echo "$job_id";
 echo "$js_id";

$sql_insert_to_application = "INSERT INTO application (job_id, js_id) VALUES ('$job_id', '$js_id')";

$result = mysqli_query($conn, $sql_insert_to_application);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Congraulation! You have passed the entry quiz!</h1>
        <a href="profile_jobseeker.php">Go to profile</a>
    
</body>
</html>