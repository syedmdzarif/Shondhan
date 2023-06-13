<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applications</title>
</head>
<body>


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
        $sql = "SELECT job.title, js_info.first_name, js_info.last_name, js_info.phone, js_info.address, js_info.gender, js_info.ssc, js_info.hsc, js_info.cgpa from js_info JOIN (job JOIN application ON job.id = application.job_id) on js_info.id = application.js_id WHERE job.company_id = '$company_id'";

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

                ?>


                <html>

              

                <a href="#" type="submit">Contact</a>


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