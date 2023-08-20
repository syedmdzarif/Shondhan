<?php

$conn = mysqli_connect('localhost', 'root', '', 'shondhan');

session_start();

if(isset($_SESSION['id'])){
    $js_id = $_SESSION['id'];
 }

if(isset($_GET['id'])){
    $job_id = mysqli_real_escape_string($conn, $_GET['id']);
}

$sql = "SELECT type from job where id = '$job_id'";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
        $job_type = $row['type'];
}


// echo "$job_id";
// echo "$js_id";
// echo "$job_type";



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/quiz_confirm.css
    ">
    <title>Shondhan</title>
</head>
<body>

    <div class=box>
        <p class="txt"> Do you want to proceed to quiz? </p>


        <button class="btn"><a href="quiz.php?id=<?php echo $job_id?>" type="submit">Continue</a></button>

    </div>

 
</body>
</html>