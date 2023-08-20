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

$sql = "SELECT type from job where id = '$job_id'";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
        $job_type = $row['type'];
}

//echo "$job_type";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/quiz_fail.css">
    <title>Document</title>
</head>
<body>

<header id="main-header">
    <div class="container">
        <h1>Shondhan</h1>
    </div>
</header>


<nav id="navbar">
    <div class="container">
        <ul>
            <a class="w_login" href="job_list.php">Jobs</a>
            <a class="w_login" href="data_jobseeker.php">Portfolio</a>
            <a class="w_login" href="update_jobseeker.php">Update Profile</a>
            <a class="e_login" href="courses_list.php">Courses</a>
            <a class="e_login" href="profile_jobseeker.php">Profile</a>
            
            <a class="e_signup" href="logout.php">Logout</a>
        </ul>
    </div>
</nav>
    <div class="main">
    <h3>Sorry! You are not qualified to apply for this job! Here are a few job suggestions you should try applying for! </h3>




    <div class="table_course">
    <table>
        <tr>
            <th>Title</th>
            <th>Company Name</th>
            <th>Type</th>
            <th>Post</th>
            <th>Salary</th>
            <th>Work Hour</th>
            <th>Apply</th>
        </tr>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "shondhan";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // SQL query to retrieve data from table
        $sql = "SELECT id, title, company, type, post, salary, workhour FROM job where type != '$job_type'";

        // Execute SQL query
        $result = mysqli_query($conn, $sql);

        // Check if any rows were returned
        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                // echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["title"] . "</td>";
                echo "<td>" . $row["company"] . "</td>";
                echo "<td>" . $row["type"] . "</td>";
                echo "<td>" . $row["post"] . "</td>";
                echo "<td>" . $row["salary"] . "</td>";
                echo "<td>" . $row["workhour"] . "</td>";
                // echo "<td><a href='quiz_confirm.php'>Apply</a></td>";
                echo "<td>";

                ?>


                <html>

              

                <a href="quiz_confirm.php?id=<?php echo $row['id']?>" type="submit">Apply</a>


                </html>

                <?php
                
                
                

                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>0 results</td></tr>";
        }

        
        ?>
    </table>

    </div>

    <div class="table_courses">
        <h3>In order to apply for your desired job, we recommend you check out the following course(s)</h3>

        <table>
        <tr>
            <th>Image</th>
            <th>Course Name</th>
            <th>Type</th>
            <th>Description</th>

            <th>Enroll</th>
        </tr>
        <?php
        
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // SQL query to retrieve data from table
        $sql = "SELECT name, description, type, image FROM course WHERE type='$job_type'";

        // Execute SQL query
        $result = mysqli_query($conn, $sql);

        // Check if any rows were returned
        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td><img src='images/" . $row["image"] . "' alt='" . $row["name"] . "' width='100'></td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["type"] . "</td>";
                echo "<td>" . $row["description"] . "</td>";
                
                echo "<td><a href='payment.php'>Enroll</a></td>";
                echo "</tr>";

            }
        } else {
            echo "<tr><td colspan='4'>0 results</td></tr>";
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </table>


    </div>

    <!-- <a href="profile_jobseeker.php" type="submit">Go to Profile</a> -->

    </div>

    <?php
    // Close connection
        mysqli_close($conn);

    ?>


</body>
</html>