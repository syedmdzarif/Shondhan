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
        $sql = "SELECT id, title, company, type, post, salary, workhour FROM job";

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

        // Close connection
        mysqli_close($conn);
        ?>
    </table>

    </div>

    
</body>
</html>