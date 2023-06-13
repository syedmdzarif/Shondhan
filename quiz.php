5<?php

error_reporting(0);

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

echo "$job_type";

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

        
        
        
        
        
        
        
        
        <!-- Data Scientist -->
        
        
        <?php

        if($job_type == "Data Scientist")
        {

        ?>

        <tr>
            <td>1. Identify the language which is used in data science?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_1" value="Wrong Answer_1">
                <label for="male">C++</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Wrong Answer_2">
                <label for="female">R</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Wrong Answer_3">
                <label for="female">Java</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Correct Answer">
                <label for="female">Ruby</label>
            </td>
        </tr>


        <tr>
            <td>2. Choose the correct components of data science.</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_2" value="Wrong Answer_1">
                <label for="male">Domain expertise</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Wrong Answer_2">
                <label for="female">Data Engineering</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Wrong Answer_3">
                <label for="female">Advanced Computing</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Correct Answer">
                <label for="female">All of the above</label>
            </td>
        </tr>



        <tr>
            <td>3. Which of the following is not a part of the data science process?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_3" value="Correct Answer">
                <label for="male">Communication Building</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_1">
                <label for="female">Operationalize</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_2">
                <label for="female">Model Planning</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_3">
                <label for="female">Discovery</label>
            </td>
        </tr>



        <tr>
            <td>4. Total groups in which data can be characterized is?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_4" value="Wrong Answer_1">
                <label for="male">1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Correct Answer">
                <label for="female">2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Wrong Answer_2">
                <label for="female">3</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Wrong Answer_3">
                <label for="female">4</label>
            </td>
        </tr>

        <tr>
            <td>5. Choose whether the following statement is true or false - "Unstructured data is not organized"</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_5" value="Correct Answer">
                <label for="male">True</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_1">
                <label for="female">False/label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_2">
                <label for="female">May be true or false</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_3">
                <label for="female">Cannot be determined</label>
            </td>
        </tr>

        <tr>
            <td>6. Among the following identify the one in which dimensionality reduction reduces.</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_6" value="Wrong Answer_1">
                <label for="male">Performance</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_2">
                <label for="female">Entropy</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_3">
                <label for="female">Stochastics</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Correct Answer">
                <label for="female">Collinearity</label>
            </td>
        </tr>


        <tr>
            <td>7. Machine learning is a subset of which of the following?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_7" value="Correct Answer">
                <label for="male">Artificial Intelligence</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_1">
                <label for="female">Deep Learning</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_2">
                <label for="female">Data Learning</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_3">
                <label for="female">None of the above</label>
            </td>
        </tr>

        <tr>
            <td>8. FIND-S algorithm ignores?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_8" value="Wrong Answer_1">
                <label for="male">Positive</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Correct Answer">
                <label for="female">Negative</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_2">
                <label for="female">Both</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_3">
                <label for="female">None</label>
            </td>
        </tr>

        <tr>
            <td>9. Procedural Domain Knowledge in a rule-based system, is in the form of?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_9" value="Wrong Answer_1">
                <label for="male">Meta-Rules</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_2">
                <label for="female">Control Rules</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Correct Answer">
                <label for="female">Production Rules</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_3">
                <label for="female">None of the above</label>
            </td>
        </tr>

        <tr>
            <td>10. A hybrid Bayesian Network consists of?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_10" value="Wrong Answer_1">
                <label for="male">Discrete Variables</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_2">
                <label for="female">Continuous Variables</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Correct Answer">
                <label for="female">Both A and B</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_3">
                <label for="female">None of the above</label>
            </td>
        </tr>


        <?php

        }


      
        // DATA SCIENTIST END

        // SENIOR SOFTWARE DEVELOPER


    

        elseif($job_type == "Senior Software Developer")
        {

        ?>

        <tr>
            <td>1. What is the first step in the software development lifecycle?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_1" value="Wrong Answer_1">
                <label for="male">System Design</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Wrong Answer_2">
                <label for="female">Coding</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Wrong Answer_2">
                <label for="female">System Testing</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Correct Answer">
                <label for="female">Preliminary Investigation and Analysis</label>
            </td>
        </tr>


        <tr>
            <td>2. What does the study of an existing system refer to?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_2" value="Wrong Answer_1">
                <label for="male">Details of DFD</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Wrong Answer_2">
                <label for="female">Feasibility Analysis</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Correct Answer">
                <label for="female">System Analysis</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Wrong Answer_3">
                <label for="female">System Planning</label>
            </td>
        </tr>



        <tr>
            <td>3. Which of the following is involved in the system planning and designing phase of the Software Development Life Cycle (SDLC)?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_3" value="Wrong Answer_1">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_2">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_3">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Correct Answer">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>



        <tr>
            <td>4. What does RAD stand for?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_4" value="Wrong Answer_1">
                <label for="male">Rapid Application Document</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Correct Answer">
                <label for="female">Rapid Application Development</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Wrong Answer_2">
                <label for="female">Relative Application Development</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Wrong Answer_3">
                <label for="female">None of the above</label>
            </td>
        </tr>

        <tr>
            <td>5. Which of the following prototypes does not associated with Prototyping Model?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_5" value="Wrong Answer_1">
                <label for="male">Domain Prototype</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_2">
                <label for="female">Vertical Prototype</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_3">
                <label for="female">Horizontal Prototype</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Correct Answer">
                <label for="female">Diagonal Prototype</label>
            </td>
        </tr>


        <tr>
            <td>6. The major drawback of RAD is?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_6" value="Wrong Answer_1">
                <label for="male">It requires highly skilled developers/designers.</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_2">
                <label for="female">It necessitates customer feedbacks.</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_3">
                <label for="female">It increases the component reusability.</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Correct Answer">
                <label for="female">Both A & C</label>
            </td>
        </tr>

        <tr>
            <td>7. Which of the following does not relate to Evolutionary Process Model?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_7" value="Wrong Answer_1">
                <label for="male">Incremental Model</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_2">
                <label for="female">Concurrent Development Model</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_3">
                <label for="female">WINWIN Spiral Model</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Correct Answer">
                <label for="female">All of the above</label>
            </td>
        </tr>

        <tr>
            <td>8. What is the major drawback of the Spiral Model?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_8" value="Wrong Answer_1">
                <label for="male">Higher amount of risk analysis</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Correct Answer">
                <label for="female">Doesn't work well for smaller projects</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_2">
                <label for="female">Additional functionalities are added later on</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_3">
                <label for="female">Strong approval and documentation control</label>
            </td>
        </tr>

        <tr>
            <td>9. Model selection is based on?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_9" value="Wrong Answer_1">
                <label for="male">Wrong Answer_1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_1">
                <label for="female">Development team & users</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_2">
                <label for="female">Project type & associated risk</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Correct Answer">
                <label for="female">All of the above</label>
            </td>
        </tr>

        <tr>
            <td>10. Which of the following option is correct?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_10" value="Wrong Answer_1">
                <label for="male">The prototyping model facilitates the reusability of components.</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_2">
                <label for="female">RAD Model facilitates reusability of components</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Correct Answer">
                <label for="female">Both RAD & Prototyping Model facilitates reusability of components</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_3">
                <label for="female">None</label>
            </td>
        </tr>


        <?php

        }



        // SENIOR SOFTWARE DEVELOPER END

        // JUNIOR SOFTWARE DEVELOPER


    

        elseif($job_type == "Junior Software Developer")
        {

        ?>

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

        <tr>
            <td>1. Question 5</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_5" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>


        <tr>
            <td>1. Question 6</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_6" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 7</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_7" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 8</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_8" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 9</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_9" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 10</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_10" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>


        <?php

        }




        // Govt. Developer


    

        elseif($job_type == "Govt. Developer")
        {

        ?>

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

        <tr>
            <td>1. Question 5</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_5" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>


        <tr>
            <td>1. Question 6</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_6" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 7</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_7" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 8</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_8" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 9</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_9" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 10</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_10" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>


        <?php

        }




        // Front Desk Attendee


    

        elseif($job_type == "Front Desk Attendee")
        {

        ?>

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

        <tr>
            <td>1. Question 5</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_5" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>


        <tr>
            <td>1. Question 6</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_6" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 7</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_7" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 8</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_8" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 9</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_9" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 10</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_10" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td5
        </tr>


        <?php

        }



        // Quality Assurance Engineer


    

        elseif($job_type == "Quality Assurance Engineer")
        {

        ?>

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

        <tr>
            <td>1. Question 5</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_5" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>


        <tr>
            <td>1. Question 6</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_6" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 7</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_7" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 8</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_8" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 9</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_9" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 10</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_10" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>


        <?php

        }




        // Human Resource


    

        elseif($job_type == "Human Resource")
        {

        ?>

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

        <tr>
            <td>1. Question 5</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_5" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>


        <tr>
            <td>1. Question 6</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_6" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 7</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_7" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 8</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_8" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 9</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_9" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 10</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_10" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>


        <?php

        }




        // Busniness Analyst


    

        elseif($job_type == "Busniness Analyst")
        {

        ?>

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

        <tr>
            <td>1. Question 5</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_5" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>


        <tr>
            <td>1. Question 6</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_6" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 7</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_7" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 8</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_8" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 9</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_9" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 10</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_10" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>


        <?php

        }


  

        // Medical Practioner


    

        elseif($job_type == "Medical Practioner")
        {

        ?>

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

        <tr>
            <td>1. Question 5</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_5" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>


        <tr>
            <td>1. Question 6</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_6" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 7</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_7" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 8</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_8" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 9</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_9" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 10</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_10" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>


        <?php

        }




        // Faculty Member


    

        elseif($job_type == "Faculty Member")
        {

        ?>

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

        <tr>
            <td>1. Question 5</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_5" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>


        <tr>
            <td>1. Question 6</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_6" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 7</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_7" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 8</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_8" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 9</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_9" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>

        <tr>
            <td>1. Question 10</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_10" value="Correct Answer">
                <label for="male">Correct answer</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_1">
                <label for="female">Wrong answer 1</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_2">
                <label for="female">Wrong answer 2</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_3">
                <label for="female">Wrong answer 3</label>
            </td>
        </tr>


        <?php

        }




        // Faculty Member end




        
        
        
        
        
        
        ?>






    </table>

    <input type="submit" name="submit" vlaue="Submit">

</form>


    <?php


    //if($_POST['question_1']  == "Correct Answer"  && $_POST['question_2']  == "Correct Answer"  && $_POST['question_3']  == "Correct Answer"){

    $count = 0;

    if($_POST['question_1'] == "Correct Answer"){
        $count = $count + 1;
    }
    if($_POST['question_2'] == "Correct Answer"){
        $count = $count + 1;
    }
    if($_POST['question_3'] == "Correct Answer"){
        $count = $count + 1;
    }
    if($_POST['question_4'] == "Correct Answer"){
        $count = $count + 1;
    }
    if($_POST['question_5'] == "Correct Answer"){
        $count = $count + 1;
    }
    if($_POST['question_6'] == "Correct Answer"){
        $count = $count + 1;
    }
    if($_POST['question_7'] == "Correct Answer"){
        $count = $count + 1;
    }
    if($_POST['question_8'] == "Correct Answer"){
        $count = $count + 1;
    }
    if($_POST['question_9'] == "Correct Answer"){
        $count = $count + 1;
    }
    if($_POST['question_10'] == "Correct Answer"){
        $count = $count + 1;
    }


    if($count >=8){

    ?>

    <a href="quiz_success.php?id=<?php echo $job_id?>" type="submit">Continue</a>

    <?php

    }   



    elseif($count >= 6){
    ?>

    <a href="quiz_fail_same_type.php?id=<?php echo $job_id?>" type="submit">Continue</a>

    <?php
    }   


    else{
    ?>

    <a href="quiz_fail_other_type.php?id=<?php echo $job_id?>" type="submit">Continue</a>

    <?php
    }   



    ?>


</body>
</html>