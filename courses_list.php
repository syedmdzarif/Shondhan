<html>
<head>
    <title>Shondhan</title>
    <style>
    *{
    box-sizing: border-box;
}

body{
    background-color:  #f4f4f4;
    color:  #555;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
    line-height: 1.4em;
    margin: 0;
}
        table {
            border-collapse: collapse;
            width: 100%;
        }

        .table_course{
            padding:40px;
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
        }z
        tr:hover {
            background-color: #ddd;
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


<header id="main-header">
    <div class="container">
        <h1>Shondhan</h1>
    </div>
</header>


<nav id="navbar">
    <div class="container">
        <ul>
            <a class="w_login" href="job_list.php">Jobs</a>
            <a class="w_login" href="profile_jobseeker.php">Profile</a>
            <a class="w_login" href="data_jobseeker.php">Portfolio</a>
            <a class="w_login" href="update_jobseeker.php">Update Profile</a>
            <a class="e_login" href="courses_list.php">Courses</a>
       
            <a class="e_signup" href="logout.php">Logout</a>
        </ul>
    </div>
</nav>


<body>


    <div class="table_course">
    <table>
        <tr>
            <th>Image</th>
            <th>Course Name</th>
            <th>Type</th>
            <th>Description</th>
            
            <th>Enroll</th>
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
        $sql = "SELECT name, description, type, image FROM course";

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
</body>
</html>
