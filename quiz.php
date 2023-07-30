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
            <td>1. Which of the following programming languages is a statically typed language?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_1" value="Wrong Answer_1">
                <label for="male">Python</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Wrong Answer_2">
                <label for="female">JavaScript</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Correct Answer">
                <label for="female">C++</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Wrong Answer_3">
                <label for="female">Ruby</label>
            </td>
        </tr>


        <tr>
            <td>2. What is the purpose of version control systems (VCS) in software development?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_2" value="Correct Answer">
                <label for="male">To track changes to source code</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Wrong Answer_1">
                <label for="female">To manage project milestones</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Wrong Answer_2">
                <label for="female">To secure the code from unauthorized access</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Wrong Answer_3">
                <label for="female">To enhance code performance</label>
            </td>
        </tr>



        <tr>
            <td>3. What is the difference between an abstract class and an interface in object-oriented programming?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_3" value="Correct Answer">
                <label for="male">An abstract class can have method implementations, whereas an interface cannot.</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_1">
                <label for="female">An interface can have member variables, whereas an abstract class cannot.</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_2">
                <label for="female">An abstract class allows multiple inheritance, whereas an interface allows single inheritance.</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_3">
                <label for="female">An interface is used for code reusability, whereas an abstract class is used for code organization.</label>
            </td>
        </tr>



        <tr>
            <td>4. What is the purpose of unit testing in software development?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_4" value="Wrong Answer_1">
                <label for="male">To verify the integration between different software components</label>

                <input style="cursor: pointer" type="radio" id="female" name="equestion_4" value="Wrong Answer_2">
                <label for="female">To validate the user interface of the softwar</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Wrong Answer_3">
                <label for="female">To verify the integration between different software components</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Correct Answer">
                <label for="female">To test individual functions or methods for expected behavior</label>
            </td>
        </tr>

        <tr>
            <td>5. Which of the following data structures would be most suitable for implementing a LIFO (Last-In, First-Out) behavior?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_5" value="Wrong Answer_1">
                <label for="male">Queue</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_2">
                <label for="female">Linked List</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Correct Answer">
                <label for="female">Stack</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_3">
                <label for="female">Hash Table</label>
            </td>
        </tr>


        <tr>
            <td>6. In the context of object-oriented programming, what is polymorphism?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_6" value="Wrong Answer_1">
                <label for="male">The ability of a class to inherit from multiple base classes</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_2">
                <label for="female">The ability to create objects from a class</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_3">
                <label for="female">The ability to override inherited methods</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Correct Answer">
                <label for="female">The ability of objects of different classes to respond to the same method call</label>
            </td>
        </tr>

        <tr>
            <td>7. Which of the following is an example of a relational database management system (RDBMS)?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_7" value="Wrong Answer_1">
                <label for="male">MongoDB</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Correct Answer">
                <label for="female">PostgreSQL</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_2">
                <label for="female">Redis</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_3">
                <label for="female">Elasticsearch</label>
            </td>
        </tr>

        <tr>
            <td>8. What does the term "agile" refer to in software development?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_8" value="Correct Answer">
                <label for="male">A project management methodology that emphasizes iterative and incremental development.</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_1">
                <label for="female">The process of fixing bugs and errors in software.</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_2">
                <label for="female">The use of automated tools for code testing and analysis.</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_3">
                <label for="female">A programming paradigm based on mathematical logic.</label>
            </td>
        </tr>

        <tr>
            <td>9. What is the purpose of an API (Application Programming Interface)?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_9" value="Correct Answer">
                <label for="male">To facilitate communication between different software applications.</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_1">
                <label for="female">To provide a graphical user interface for end users.</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_2">
                <label for="female">To store and retrieve data from a database.</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_3">
                <label for="female">To compile and execute source code.</label>
            </td>
        </tr>

        <tr>
            <td>10. What is the role of a version control system in collaborative software development?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_10" value="Wrong Answer_1">
                <label for="male">To manage the distribution of software releases to end users</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Correct Answer">
                <label for="female">To track and merge changes made by different developers to the same codebase</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_2">
                <label for="female">To automate the process of code review and quality assurance</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_3">
                <label for="female">To enforce coding standards and conventions across the development team</label>
            </td>
        </tr>


        <?php

        }




        // Govt. Developer


    

        elseif($job_type == "Govt. Developer")
        {

        ?>

<tr>
            <td>1. Which of the following programming languages is commonly used in government?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_1" value="Correct Answer">
                <label for="male">Java</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Wrong Answer_1">
                <label for="female">Ruby</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Wrong Answer_2">
                <label for="female">PHP</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Wrong Answer_3">
                <label for="female">Swift</label>
            </td>
        </tr>


        <tr>
            <td>2. What is the purpose of accessibility guidelines in government software development?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_2" value="Wrong Answer_2">
                <label for="male">To ensure compatibility with various operating systems</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Wrong Answer_1">
                <label for="female">To optimize software performance</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Correct Answer">
                <label for="female">To enhance user experience for individuals with disabilities</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Wrong Answer_3">
                <label for="female">To secure sensitive government datas</label>
            </td>
        </tr>



        <tr>
            <td>3. Which of the following is an example of a government open-source software initiative?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_3" value="Wrong Answer_1">
                <label for="male">Microsoft Office</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_1">
                <label for="female">Adobe Photoshop</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Correct Answer">
                <label for="female">Linux operating system</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_3">
                <label for="female">Oracle Database</label>
            </td>
        </tr>



        <tr>
            <td>4. In the context of government software development, what is meant by "compliance with regulatory requirements"?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_4" value="Wrong Answer_1">
                <label for="female">Adhering to coding best practices and standards</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Wrong Answer_2">
                <label for="female">Ensuring software security and data privacy</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Correct Answer">
                <label for="female">Meeting specific government regulations and policies</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Wrong Answer_3">
                <label for="female">Conducting regular software audits and inspections</label>
            </td>
        </tr>

        <tr>
            <td>5. Which of the following development methodologies is commonly used in government software projects?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_5" value="Wrong Answer_1">
                <label for="male">Waterfall</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_2">
                <label for="female">Agile</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Correct Answer">
                <label for="female">Scrum</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_3">
                <label for="female">Kanban</label>
            </td>
        </tr>


        <tr>
            <td>6. What is the purpose of a security assessment in government software development?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_6" value="Wrong Answer_1">
                <label for="male">To evaluate software performance and scalability</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Correct Answer">
                <label for="female">To identify and mitigate potential security vulnerabilities</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_2">
                <label for="female">To optimize software deployment and configuration</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_3">
                <label for="female">To automate the testing process and improve code quality</label>
            </td>
        </tr>

        <tr>
            <td>7. Which of the following is an example of a government database management system?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_7" value="Wrong Answer_1">
                <label for="male">MySQL</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_2">
                <label for="female">SQLite</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Correct Answer">
                <label for="female">PostgreSQL</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_3">
                <label for="female">MongoDB</label>
            </td>
        </tr>

        <tr>
            <td>8. What is the role of a government developer in ensuring data privacy?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_8" value="Correct Answer">
                <label for="male">Encrypting sensitive data during transmission and storage</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_1">
                <label for="female">Implementing secure authentication and authorization mechanisms</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_2">
                <label for="female">Regularly updating software to patch security vulnerabilities</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_3">
                <label for="female">Conducting security audits and penetration testing</label>
            </td>
        </tr>

        <tr>
            <td>9. What is the purpose of performance testing in government software development?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_9" value="Wrong Answer_1">
                <label for="male">To ensure software compatibility across different platforms</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Correct Answer">
                <label for="female">To measure and optimize software response times and resource usage</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_2">
                <label for="female">To validate software functionality against user requirements</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_3">
                <label for="female">To measure and optimize software response times and resource usage</label>
            </td>
        </tr>

        <tr>
            <td>10. How does government software development differ from private sector software development?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_10" value="Correct Answer">
                <label for="male">Government projects focus more on security and regulatory compliance.</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_1">
                <label for="female">Private sector projects prioritize speed and time-to-market.</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_2">
                <label for="female">Government projects have stricter budget and procurement processes.</label>

                <input style="cursor: pointer" type="radio" id="female" name=".question_10" value="Wrong Answer_3">
                <label for="female">Private sector projects often involve commercial off-the-shelf (COTS) solutions</label>
            </td>
        </tr>


        <?php

        }




        // Front Desk Attendee


    

        elseif($job_type == "Front Desk Attendee")
        {

        ?>

<tr>
            <td>1. What is the primary role of a front desk attendee in a company or organization?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_1" value="Wrong Answer_1">
                <label for="male">Managing employee schedules</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Wrong Answer_2">
                <label for="female">Handling customer complaints</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Wrong Answer_3">
                <label for="female">Maintaining office supplies</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Correct Answer">
                <label for="female">Greeting and assisting visitors</label>
            </td>
        </tr>


        <tr>
            <td>2. Which of the following skills is essential for a front desk attendee?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_2" value="Wrong Answer_1">
                <label for="male">Programming languages</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Wrong Answer_2">
                <label for="female">Data analysis</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Correct Answer">
                <label for="female">Customer service</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Wrong Answer_3">
                <label for="female">Graphic design</label>
            </td>
        </tr>



        <tr>
            <td>3. What is the importance of maintaining a professional appearance as a front desk attendee?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_3" value="Correct Answer">
                <label for="male">It creates a positive first impression for visitors.</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_1">
                <label for="female">It improves employee morale in the office.</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_2">
                <label for="female">It increases productivity and efficiency.</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_3">
                <label for="female">It ensures compliance with company policies.</label>
            </td>
        </tr>



        <tr>
            <td>4. Which of the following software tools or applications may be used by a front desk attendee?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_4" value="Wrong Answer_1">
                <label for="male">Microsoft Excel</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Wrong Answer_2">
                <label for="female">Adobe Photoshop</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Wrong Answer_3">
                <label for="female">AutoCAD</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Correct Answer">
                <label for="female">Salesforce CRM</label>
            </td>
        </tr>

        <tr>
            <td>5. How should a front desk attendee handle difficult or upset visitors?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_5" value="Wrong Answer_1">
                <label for="male">Ignore their concerns and move on to the next visitor.</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Correct Answer">
                <label for="female">Politely listen to their concerns and offer assistance or solutions.</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_2">
                <label for="female">Escalate the issue to a supervisor or manager.</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_3">
                <label for="female">Provide a refund or compensation immediately.</label>
            </td>
        </tr>


        <tr>
            <td>6. What does it mean to maintain confidentiality in the role of a front desk attendee?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_6" value="Wrong Answer_1">
                <label for="male">Sharing sensitive visitor information with colleagues.</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_2">
                <label for="female">Disclosing company trade secrets to visitors.</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Correct Answer">
                <label for="female">Protecting visitor and company information from unauthorized access.</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_3">
                <label for="female">Using personal social media accounts during working hours.</label>
            </td>
        </tr>

        <tr>
            <td>7. How should a front desk attendee handle multiple tasks or responsibilities simultaneously?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_7" value="Wrong Answer_1">
                <label for="male">Prioritize tasks based on personal preferences.</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_2">
                <label for="female">Delegate tasks to colleagues or subordinates.</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_3">
                <label for="female">Seek assistance or clarification from a supervisor.</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Correct Answer">
                <label for="female">Use time management techniques to organize and prioritize tasks.</label>
            </td>
        </tr>

        <tr>
            <td>8. Which of the following communication skills is important for a front desk attendee?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_8 "value="Wrong Answer_1">
                <label for="male">Writing complex technical reports</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_2">
                <label for="female">Delivering presentations to large audiences</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Correct Answer">
                <label for="female">Active listening and clear verbal communication</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_3">
                <label for="female">Negotiating business deals and contracts</label>
            </td>
        </tr>

        <tr>
            <td>9. What is the purpose of maintaining an organized front desk area?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_9" value="Wrong Answer_1">
                <label for="male">To impress visitors with a tidy workspace</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Correct Answer">
                <label for="female">To find necessary documents or resources quickly</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_2">
                <label for="female">To comply with company policies and regulations</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_3">
                <label for="female">To showcase personal organizational skills</label>
            </td>
        </tr>

        <tr>
            <td>10. How can a front desk attendee contribute to creating a positive and welcoming office environment?</td>
            <td>
                <input style="cursor: pointer;" type="radio" id="male" name="question_10" value="Wrong Answer_1">
                <label for="male">Enforcing strict security measures and access control</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Correct Answer">
                <label for="female">Participating in team-building activities and events</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_2">
                <label for="female">Minimizing interactions with colleagues to focus on visitor needs</label>

                <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_3">
                <label for="female">Reporting any policy violations or misconduct to management</label>
            </td>
        </tr>


        <?php

        }



        // Quality Assurance Engineer


    

        elseif($job_type == "Quality Assurance Engineer")
        {

        ?>

<tr>
                   <td>1. What does a quality assurance engineer do?</td>
                   <td>
                       
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Wrong Answer_1">
                       <label for="female">Fix issues</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Wrong Answer_2">
                       <label for="female">Contact with client</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Wrong Answer_3">
                       <label for="female">None</label>
       
                       <input style="cursor: pointer;" type="radio" id="male" name="question_1" value="Correct Answer">
                       <label for="male">Identify issues</label>
       
                   </td>
               </tr>
       
       
               <tr>
                   <td>2. What skills does a quality assurance engineer need?</td>
                   <td>
                       
                       <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Wrong Answer_1">
                       <label for="female">Attention to detail</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Wrong Answer_2">
                       <label for="female">Good communication</label>
       
                       <input style="cursor: pointer;" type="radio" id="male" name="question_2" value="Correct Answer">
                       <label for="male">All</label>
       
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Wrong Answer_3">
                       <label for="female">Good time management</label>
                   </td>
               </tr>
       
       
       
               <tr>
                   <td>3. What is the qualification for quality assurance?</td>
                   <td>
                       
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_1">
                       <label for="female">Skills</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_2">
                       <label for="female">Knowledge</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_3">
                       <label for="female">Degree</label>

                       <input style="cursor: pointer;" type="radio" id="male" name="question_3" value="Correct Answer">
                       <label for="male">All of the above</label>
                   </td>
               </tr>
       
       
       
               <tr>
                   <td>4. How many types of quality assurance are there?</td>
                   <td>

                       <input style="cursor: pointer;" type="radio" id="male" name="question_4" value="Correct Answer">
                       <label for="male">2</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Wrong Answer_1">
                       <label for="female">4</label>
       
       
                       
       
                       
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Wrong Answer_2">
                       <label for="female">6</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Wrong Answer_3">
                       <label for="female">8</label>
                   </td>
               </tr>
       
               <tr>
                   <td>5. What language is required for quality assurance engineering?</td>
                   <td>
                       
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_1">
                       <label for="female">Java</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_2">
                       <label for="female">Python</label>
       
                       <input style="cursor: pointer;" type="radio" id="male" name="question_5" value="Correct Answer">
                       <label for="male">All</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_3">
                       <label for="female">JavaScript</label>
                   </td>
               </tr>
       
       
               <tr>
                   <td>6. What is the first step of QA?</td>
                   <td>
                       
                       <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_1">
                       <label for="female">Communication1</label>
       
                       <input style="cursor: pointer;" type="radio" id="male" name="question_6" value="Correct Answer">
                       <label for="male">Analysis</label>
       
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_2">
                       <label for="female">Listening</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_3">
                       <label for="female">Vission</label>
                   </td>
               </tr>
       
               <tr>
                   <td>7. What are the QA techniques</td>
                   <td>
                       
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_1">
                       <label for="female">Penetration testing</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_2">
                       <label for="female">Fuzz testing</label>
       
                       <input style="cursor: pointer;" type="radio" id="male" name="question_7" value="Correct Answer">
                       <label for="male">All</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_3">
                       <label for="female">Source code audits</label>
                   </td>
               </tr>
       
               <tr>
                   <td>8. How many pillars are their in quality assurance?</td>
                   <td>
                       
                       <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_1">
                       <label for="female">7</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_2">
                       <label for="female">8</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_3">
                       <label for="female">2</label>
       
       
                       <input style="cursor: pointer;" type="radio" id="male" name="question_8" value="Correct Answer">
                       <label for="male">3</label>
       
                   </td>
               </tr>
       
               <tr>
                   <td>9. What is SOP in quality assurance?</td>
                   <td>
                      
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_1">
                       <label for="female">Level 3 quality documents</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_2">
                       <label for="female">Level 10 quality documents</label>
       
                        <input style="cursor: pointer;" type="radio" id="male" name="question_9" value="Correct Answer">
                       <label for="male">Level 2 quality documents</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_3">
                       <label for="female">Level 4 quality documents</label>
                   </td>
               </tr>
       
               <tr>
                   <td>10. What are the levels of QA engineer?</td>
                   <td>
                       <input style="cursor: pointer;" type="radio" id="male" name="question_10" value="Correct Answer">
                       <label for="male">Both</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_1">
                       <label for="female">Junior QA engineer</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_2">
                       <label for="female">Senior QA engineers.</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_3">
                       <label for="female">None</label>
                   </td>
               </tr>


        <?php

        }




        // Human Resource


    

        elseif($job_type == "Human Resource")
        {

        ?>

<tr>
                   <td>1. What do you mean by human resource?</td>
                   <td>
                      
                       <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Wrong Answer_1">
                       <label for="female">Finding, recruiting, and training employees </label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Wrong Answer_2">
                       <label for="female">None</label>
       
                        <input style="cursor: pointer;" type="radio" id="male" name="question_1" value="Correct Answer">
                       <label for="male">Screening, recruiting, and training employees</label>
       
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Wrong Answer_3">
                       <label for="female">Both</label>
                   </td>
               </tr>
       
       
               <tr>
                   <td>2. How many types are their human resource?</td>
                   <td>
                       
                       <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Wrong Answer_1">
                       <label for="female">2</label>
       
                       <input style="cursor: pointer;" type="radio" id="male" name="question_2" value="Correct Answer">
                       <label for="male">5</label>
       
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Wrong Answer_2">
                       <label for="female">4</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Wrong Answer_3">
                       <label for="female">6</label>
                   </td>
               </tr>
       
       
       
               <tr>
                   <td>3. How many functions does HR have?</td>
                   <td>
                       
                       <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_1">
                       <label for="female">9</label>
       
                       <input style="cursor: pointer;" type="radio" id="male" name="question_3" value="Correct Answer">
                       <label for="male">7</label>
       
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_2">
                       <label for="female">5</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_3">
                       <label for="female">4</label>
                   </td>
               </tr>
       
       
       
               <tr>
                   <td>4. What is an HR structure?</td>
                   <td>
                       <input style="cursor: pointer;" type="radio" id="male" name="question_4" value="Correct Answer">
                       <label for="male">How an organization divides its tasks.</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Wrong Answer_1">
                       <label for="female">how an organization does its tasks.</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Wrong Answer_2">
                       <label for="female">None</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Wrong Answer_3">
                       <label for="female">Both</label>
                   </td>
               </tr>
       
               <tr>
                   <td>5. What is the new name for HR?</td>
                   <td>
                       
                       <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_1">
                       <label for="female"> Chief People Officer</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_2">
                       <label for="female">People Operations Manager</label>
       
                       <input style="cursor: pointer;" type="radio" id="male" name="question_5" value="Correct Answer">
                       <label for="male">Both</label>
       
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_3">
                       <label for="female">None</label>
                   </td>
               </tr>
       
       
               <tr>
                   <td>6. Who created human resources?</td>
                   <td>
                       <input style="cursor: pointer;" type="radio" id="male" name="question_6" value="Correct Answer">
                       <label for="male">Peter F. Drucker (1954)</label>
       
                       
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_2">
                       <label for="female">Peter F. Drverer (1954)</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_1">
                       <label for="female">Parte F. Drucker (1954)</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_3">
                       <label for="female">Peter F. Didide (1954)</label>
                   </td>
               </tr>
       
               <tr>
                   <td>7.When did HR started?</td>
                   <td>
                      
                       <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_1">
                       <label for="female">World War 2</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_2">
                       <label for="female">Civil war</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_3">
                       <label for="female">Third industrial war</label>
       
       
                        <input style="cursor: pointer;" type="radio" id="male" name="question_7" value="Correct Answer">
                       <label for="male">World War 1</label>
       
                   </td>
               </tr>
       
               <tr>
                   <td>8. What is the golden rule of HR?</td>
                   <td>
                       
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_1">
                       <label for="female">One should finish others as work</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_2">
                       <label for="female">None</label>
       
                       <input style="cursor: pointer;" type="radio" id="male" name="question_8" value="Correct Answer">
                       <label for="male">One should treat others as one would like others to treat oneself</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_3">
                       <label for="female">One shouldn't treat others as one would like others to treat oneself</label>
                   </td>
               </tr>
       
               <tr>
                   <td>9. What is the highest level of HR?</td>
                   <td>
                       <input style="cursor: pointer;" type="radio" id="male" name="question_9" value="Correct Answer">
                       <label for="male">CHRO</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_1">
                       <label for="female">CEO</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_2">
                       <label for="female">Both</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_3">
                       <label for="female">None</label>
                   </td>
               </tr>
       
               <tr>
                   <td>10. Who is the father of modern HR?</td>
                   <td>
                       <input style="cursor: pointer;" type="radio" id="male" name="question_10" value="Correct Answer">
                       <label for="male">Dave Ulrich</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_1">
                       <label for="female">Dave Marun</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_2">
                       <label for="female">None</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_3">
                       <label for="female">Ichigo Korasaki</label>
                   </td>
               </tr>


        <?php

        }




        // Busniness Analyst


    

        elseif($job_type == "Business Analyst")
        {

        ?>

<tr>
                   <td>1. What is a business analyst role?</td>
                   <td>
                       
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Wrong Answer_1">
                       <label for="female">use data to form business insights and recommend changes in the process businesses and other organizations.</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Wrong Answer_2">
                       <label for="female">None</label>
       
       
                       <input style="cursor: pointer;" type="radio" id="male" name="question_1" value="Correct Answer">
                       <label for="male">Use data to form business insights and recommend changes in businesses and other organizations.</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Wrong Answer_3">
                       <label for="female">Both</label>
                   </td>
               </tr>
       
       
               <tr>
                   <td>2. Is SQL necessary for business analyst?</td>
                   <td>
                       <input style="cursor: pointer;" type="radio" id="male" name="question_2" value="Correct Answer">
                       <label for="male">Yes</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Wrong Answer_1">
                       <label for="female">No</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Wrong Answer_2">
                       <label for="female">Not necessary</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Wrong Answer_3">
                       <label for="female">None</label>
                   </td>
               </tr>
       
       
       
               <tr>
                   <td>3. Is business analyst part of IT?</td>
                   <td>
                      
                       <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_1">
                       <label for="female">Yes</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_2">
                       <label for="female">None</label>
       
                        <input style="cursor: pointer;" type="radio" id="male" name="question_3" value="Correct Answer">
                       <label for="male">No</label>
       
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_3">
                       <label for="female">Sub-part</label>
                   </td>
               </tr>
       
       
       
               <tr>
                   <td>4. Is a business analyst a tester?</td>
                   <td>
                       <input style="cursor: pointer;" type="radio" id="male" name="question_4" value="Correct Answer">
                       <label for="male">Yes</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Wrong Answer_1">
                       <label for="female">No</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Wrong Answer_2">
                       <label for="female">None</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Wrong Answer_3">
                       <label for="female">Beta tester</label>
                   </td>
               </tr>
       
               <tr>
                   <td>5. Which tool is used in business analyst?</td>
                   <td>
                       
                       <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_1">
                       <label for="female">ERD</label>
       
                       <input style="cursor: pointer;" type="radio" id="male" name="question_5" value="Correct Answer">
                       <label for="male">ERP</label>
       
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_2">
                       <label for="female">FRD</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_3">
                       <label for="female">WED</label>
                   </td>
               </tr>
       
       
               <tr>
                   <td>6. What are the three types of business analyst?</td>
                   <td>
                       <input style="cursor: pointer;" type="radio" id="male" name="question_6" value="Correct Answer">
                       <label for="male">Business process analysts, business systems analysts, and generalist business analysts.</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_1">
                       <label for="female">Business process analysts, people Operations Manager  and generalist business analysts.</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_2">
                       <label for="female">None</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_3">
                       <label for="female">People Operations Manager, Business process analysts and business systems analysts</label>
                   </td>
               </tr>
       
               <tr>
                   <td>7. What is another name for business analyst?</td>
                   <td>
                       
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_1">
                       <label for="female">Enterprise analyst</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_2">
                       <label for="female">Process analyst</label>
       
                       <input style="cursor: pointer;" type="radio" id="male" name="question_7" value="Correct Answer">
                       <label for="male">Both</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_3">
                       <label for="female">None</label>
                   </td>
               </tr>
       
               <tr>
                   <td>8. What is the highest position in business analyst?</td>
                   <td>
                       
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_1">
                       <label for="female">CEO</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_2">
                       <label for="female">CHR</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_3">
                       <label for="female">None</label>
       
       
                       <input style="cursor: pointer;" type="radio" id="male" name="question_8" value="Correct Answer">
                       <label for="male">CTO</label>
                   </td>
               </tr>
       
               <tr>
                   <td>9. What software does a business analyst use?</td>
                   <td>
                       <input style="cursor: pointer;" type="radio" id="male" name="question_9" value="Correct Answer">
                       <label for="male">Microsoft's Visio</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_1">
                       <label for="female">Microsoft's Excel</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_2">
                       <label for="female">None</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_3">
                       <label for="female">Both</label>
                   </td>
               </tr>
       
               <tr>
                   <td>10. Does business analyst do coding?</td>
                   <td>
                       
                       <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_1">
                       <label for="female">Yes</label>
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_2">
                       <label for="female">No</label>
       
                       <input style="cursor: pointer;" type="radio" id="male" name="question_10" value="Correct Answer">
                       <label for="male">Not necessary</label>
       
       
                       <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_3">
                       <label for="female">None</label>
                   </td>
               </tr>


        <?php

        }


  

        // Medical Practitioner


    

        elseif($job_type == "Medical Practitioner")
        {

        ?>

<tr>
    <td>1.What is the largest organ in the human body?</td>
    <td>
        <input style="cursor: pointer;" type="radio" id="male" name="question_1" value="Wrong Answer_1">
        <label for="male">Liver</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Correct Answer">
        <label for="female"> Skin</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Wrong Answer_2">
        <label for="female">Brain</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Wrong Answer_3">
        <label for="female">Heart</label>
    </td>
</tr>


<tr>
    <td>2.Which part of the brain is responsible for regulating balance and coordination?</td>
    <td>
        <input style="cursor: pointer;" type="radio" id="male" name="question_2" value="Wrong Answer_1">
        <label for="male">Cerebrum</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Correct Answer">
        <label for="female">Cerebellum</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Wrong Answer_2">
        <label for="female">Medulla oblongata</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Wrong Answer_3">
        <label for="female"> Hypothalamus</label>
    </td>
</tr>



<tr>
    <td>3.What is the medical term for the voice box?</td>
    <td>
        <input style="cursor: pointer;" type="radio" id="male" name="question_3" value="Correct Answer">
        <label for="male"> Larynx</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_1">
        <label for="female">Trachea</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_2">
        <label for="female">Pharynx</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_3">
        <label for="female">Epiglottis</label>
    </td>
</tr>



<tr>
    <td>4.Which hormone is responsible for regulating blood sugar levels?</td>
    <td>
        <input style="cursor: pointer;" type="radio" id="male" name="question_4" value="Wrong Answer_1">
        <label for="male"> Estrogen</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Wrong Answer_2">
        <label for="female">Testosterone</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Wrong Answer_3">
        <label for="female">Thyroxine</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Correct Answer">
        <label for="female"> Insulin</label>
    </td>
</tr>

<tr>
    <td>5.What is the medical term for the thigh bone?</td>
    <td>
        <input style="cursor: pointer;" type="radio" id="male" name="question_5" value="Wrong Answer_1">
        <label for="male">Radius</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Correct Answer">
        <label for="female">Femur</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_2">
        <label for="female">Tibia</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_3">
        <label for="female">Fibula</label>
    </td>
</tr>


<tr>
    <td>6.Which organ produces bile to aid in digestion?</td>
    <td>
        <input style="cursor: pointer;" type="radio" id="male" name="question_6" value="Wrong Answer_1">
        <label for="male">Pancreas</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_2">
        <label for="female"> Gallbladder</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Correct Answer">
        <label for="female"> Liver</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_3">
        <label for="female">Stomach</label>
    </td>
</tr>

<tr>
    <td>7.What is the medical term for a heart attack?</td>
    <td>
        <input style="cursor: pointer;" type="radio" id="male" name="question_7" value="Wrong Answer_1">
        <label for="male"> Myocarditis</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_2">
        <label for="female">Arrhythmia</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_3">
        <label for="female"> Angina</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Correct Answer">
        <label for="female">Myocardial infarction</label>
    </td>
</tr>

<tr>
    <td>8.Which part of the respiratory system carries air into the lungs?</td>
    <td>
        <input style="cursor: pointer;" type="radio" id="male" name="question_8" value="Wrong Answer_1">
        <label for="male"> Bronchi</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_2">
        <label for="female"> Alveoli</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Correct Answer">
        <label for="female">Trachea</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_3">
        <label for="female">Diaphragm</label>
    </td>
</tr>

<tr>
    <td>9.What is the normal range for blood pressure in a healthy adult?</td>
    <td>
        <input style="cursor: pointer;" type="radio" id="male" name="question_9" value="Wrong Answer_1">
        <label for="male"> 80/40 mmHg</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Correct Answer">
        <label for="female">120/80 mmHg</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_2">
        <label for="female">150/90 mmHg</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_3">
        <label for="female">Wrong answer 3</label>
    </td>
</tr>

<tr>
    <td>10.What is the medical term for the eardrum?</td>
    <td>
        <input style="cursor: pointer;" type="radio" id="male" name="question_10" value="Correct Answer">
        <label for="male">Tympanic membrane</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_1">
        <label for="female"> Cochlea</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_2">
        <label for="female">Ossicles</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_3">
        <label for="female"> Auditory canal</label>
    </td>
</tr>


        <?php

        }




        // Faculty Member


    

        elseif($job_type == "Faculty Member")
        {

        ?>

<tr>
    <td>1.Who is responsible for coordinating academic programs, conducting research, and mentoring students?</td>
    <td>
        <input style="cursor: pointer;" type="radio" id="male" name="question_1" value="Wrong Answer_1">
        <label for="male">Dean</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Wrong Answer_2">
        <label for="female">Chairperson</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Correct Answer">
        <label for="female"> Faculty member</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_1" value="Wrong Answer_3">
        <label for="female">Provost</label>
    </td>
</tr>


<tr>
    <td>2.What is the highest academic rank that a faculty member can achieve?</td>
    <td>
        <input style="cursor: pointer;" type="radio" id="male" name="question_2" value="Wrong Answer_1">
        <label for="male">Lecturer</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Wrong Answer_2">
        <label for="female"> Assistant professor</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Wrong Answer_3">
        <label for="female"> Associate professor</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_2" value="Correct Answer">
        <label for="female"> Professor</label>
    </td>
</tr>



<tr>
    <td>3.Which faculty member is responsible for teaching courses in a specific subject area?</td>
    <td>
        <input style="cursor: pointer;" type="radio" id="male" name="question_3" value="Correct Answer">
        <label for="male">Adjunct professor</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_1">
        <label for="female"> Visiting professor</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_2">
        <label for="female"> Tenured professor</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_3" value="Wrong Answer_3">
        <label for="female">Faculty member</label>
    </td>
</tr>



<tr>
    <td>4.Who typically holds the administrative role of overseeing a department within a university?</td>
    <td>
        <input style="cursor: pointer;" type="radio" id="male" name="question_4" value="Wrong Answer_1">
        <label for="male">Lecturer</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Correct Answer">
        <label for="female"> Chair Person</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Wrong Answer_2">
        <label for="female">Researcher</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_4" value="Wrong Answer_3">
        <label for="female">Professor Emeritus</label>
    </td>
</tr>

<tr>
    <td>5.What is the role of an adjunct professor?</td>
    <td>
        <input style="cursor: pointer;" type="radio" id="male" name="question_5" value="Wrong Answer_1">
        <label for="male"> Full-time teaching position</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_2">
        <label for="female"> Tenured faculty member</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Correct Answer">
        <label for="female">Part-time teaching position</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_5" value="Wrong Answer_3">
        <label for="female">Research-focused position</label>
    </td>
</tr>


<tr>
    <td>6.Which faculty member is invited from another institution to teach for a specific period?</td>
    <td>
        <input style="cursor: pointer;" type="radio" id="male" name="question_6" value="Wrong Answer_1">
        <label for="male"> Adjunct professor</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Correct Answer">
        <label for="female">Visiting professor</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_2">
        <label for="female"> Assistant professor</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_6" value="Wrong Answer_3">
        <label for="female">Associate professor</label>
    </td>
</tr>

<tr>
    <td>7.Which faculty member has reached retirement but retains their academic title and privileges?</td>
    <td>
        <input style="cursor: pointer;" type="radio" id="male" name="question_7" value="Correct Answer">
        <label for="male">Emeritus professor</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_1">
        <label for="female">Tenured professor</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_2">
        <label for="female"> Research professor</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_7" value="Wrong Answer_3">
        <label for="female">Clinical professor</label>
    </td>
</tr>

<tr>
    <td>8.What is the primary responsibility of a research professor?</td>
    <td>
        <input style="cursor: pointer;" type="radio" id="male" name="question_8" value="Wrong Answer_1">
        <label for="male">Teaching undergraduate courses</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Correct Answer">
        <label for="female">Conducting research</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_2">
        <label for="female">Mentoring graduate students</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_8" value="Wrong Answer_3">
        <label for="female">Serving on administrative committees</label>
    </td>
</tr>

<tr>
    <td>9.Who is responsible for evaluating and assessing student assignments and examinations?</td>
    <td>
        <input style="cursor: pointer;" type="radio" id="male" name="question_9" value="Wrong Answer_1">
        <label for="male">Dean</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Correct Answer">
        <label for="female"> Faculty member</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_2">
        <label for="female"> Registrar</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_9" value="Wrong Answer_3">
        <label for="female">Provost</label>
    </td>
</tr>

<tr>
    <td>10.Which faculty member is typically involved in the review and approval of research grant applications?</td>
    <td>
        <input style="cursor: pointer;" type="radio" id="male" name="question_10" value="Wrong Answer_1">
        <label for="male"> Lecturer</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_2">
        <label for="female">Research professor</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Wrong Answer_3">
        <label for="female">Department chair</label>

        <input style="cursor: pointer" type="radio" id="female" name="question_10" value="Correct Answer">
        <label for="female">Faculty member</label>
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