<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applications</title>

<style>
    body{
    background-color:  #f4f4f4;
    color:  #555;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
    line-height: 1.4em;
    margin: 0;
}

.table_course{
            padding:40px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #8fbbbc;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        body{
          background-color: white;
        }

        #main-header{
            
            padding-bottom: 16px;
            padding-top: 10px;
            padding-left: 40px;
            padding-right: 1280px;
            font-family: system-ui;
            text-align: left;
            background-color: #669999;
            color: #fff;
        }
        
        #navbar{
            font-family:system-ui;
            font-size: 12px;
            padding-top: 4px;
            padding-bottom: 4px;
            padding-left: 960px;
            padding-right: 40px;
            text-align: right;
            background-color: white;
            color: white;
        }
        
        #navbar ul{
            padding: 0;
            list-style: none;
        
        }
        
        #navbar li{
            display: inline;
        }
        
        #navbar a{
            color: #808080;
            text-decoration: none;
            font-size: 18px;
            padding-right:  15px;
        }

    </style>
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
            <a class="w_login" href="profile_company.php">Profile</a>
            <a class="w_login" href="job_post.php">Post Job</a>
            <a class="w_login" href="applications.php">Applications</a>
            <a class="w_login" href="update_company.php">Update Profile</a>

            <a class="e_signup" href="logout_company.php">Logout</a>
        </ul>
    </div>
</nav>


<div class="table_course">
    <table>
        <tr>
            <th>Job Title</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Gender</th>
            <th>SSC</th>
            <th>HSC</th>
            <th>CGPA</th>
            <th>CV</th>
            <th>Action</th>
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

        session_start();

        if(isset($_SESSION['id'])){
            $company_id = $_SESSION['id'];
        }


        // SQL query to retrieve data from table
        $sql = "SELECT job.title, filename, js_info.id, js_info.first_name, js_info.last_name, js_info.phone, js_info.address, js_info.gender, js_info.ssc, js_info.hsc, js_info.cgpa from js_info JOIN (job JOIN (application JOIN cv ON application.js_id = cv.js_id) ON job.id = application.job_id) on js_info.id = application.js_id WHERE job.company_id = '$company_id'";

        // Execute SQL query
        $result = mysqli_query($conn, $sql);

        // Check if any rows were returned
        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                // echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["title"] . "</td>";
                echo "<td>" . $row["first_name"] . "</td>";
                echo "<td>" . $row["last_name"] . "</td>";
                echo "<td>" . $row["phone"] . "</td>";
                echo "<td>" . $row["address"] . "</td>";
                echo "<td>" . $row["gender"] . "</td>";
                echo "<td>" . $row["ssc"] . "</td>";
                echo "<td>" . $row["hsc"] . "</td>";
                echo "<td>" . $row["cgpa"] . "</td>";
                
                // echo "<td><a href='quiz_confirm.php'>Apply</a></td>";
                echo "<td>";
                    
                    $js_id = $row["id"];
                ?>

                


                <html>

              

                <a href="uploads/<?php echo $row['filename']; ?>" target="_blank">View</a>
                <a href="uploads/<?php echo $row['filename']; ?>" download>Download</a>


                </html>

                <?php
                
                
                

                echo "</td>";
                
                echo "<td>";

                ?>


                <html>

              

                <a href="view_js_profile.php?js_id=<?php echo $js_id?>" type="submit">Profile</a>


                </html>

                <?php
                
                
                

                echo "</td>";
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

    
</body>
</html>