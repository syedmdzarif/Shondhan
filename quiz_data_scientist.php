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

echo "$js_id";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>data</h1>


<form action="" method="post">
    <table border="1">

        <tr>
            <th>Question</th>
            <th>Please pick the best answer</th>                

        </tr>

        <tr>
            <td>1. Question 1</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_1" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>


        <tr>
            <td>2. Question 2</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_2" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>



        <tr>
            <td>3. Question 3</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_3" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>



        <tr>
            <td>4. Question 4</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_4" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>




    </table>

    <input type="submit" name="submit" vlaue="Submit">

</form>


    <?php


    if($_POST['question_1']  == "Correct Answer"  && $_POST['question_2']  == "Correct Answer"  && $_POST['question_3']  == "Correct Answer"){
    ?>

    <a href="quiz_success.php?id=<?php echo $job_id?>" type="submit">Continue</a>

    <?php
    }   



    elseif($_POST['question_1'] == "Correct Answer" && $_POST['question_2']  == "Correct Answer"){
    ?>

    <a href="quiz_fail_data_scientist_same_type.php?id=<?php echo $job_id?>" type="submit">Continue</a>

    <?php
    }   


    else{
    ?>

    <a href="quiz_fail_data_scientist_other_type.php?id=<?php echo $job_id?>" type="submit">Continue</a>

    <?php
    }   



    ?>


</body>
</html>