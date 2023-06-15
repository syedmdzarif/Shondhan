<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION["id"])) {
    header("Location: login_jobseeker.php");
    exit;
}

// Connect to database
$mysqli = new mysqli('localhost', 'root', '', 'shondhan');

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Prepare and bind SQL statement
$stmt = $mysqli->prepare("INSERT INTO js_info (id, first_name, last_name, gender, phone, address, nid, ssc, ssc_passing_year,ssc_institute, hsc, hsc_passing_year, hsc_institute, cgpa, uni_passing_year, uni_institute) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("isssssssssssssss", $id, $first_name, $last_name, $gender, $phone, $address, $nid, $ssc, $ssc_passing_year, $ssc_institute, $hsc, $hsc_passing_year, $hsc_institute, $cgpa, $uni_passing_year, $uni_institute);

// Validate form inputs and execute statement
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_SESSION["id"];
    $first_name = trim($_POST["first_name"]);
    $last_name = trim($_POST["last_name"]);
    $gender = trim($_POST["gender"]);
    $phone = trim($_POST["phone"]);
    $address = trim($_POST["address"]);
    $nid = trim($_POST["nid"]);
    $ssc = trim($_POST["ssc"]);
    $ssc_passing_year = trim($_POST["ssc_passing_year"]);
    $ssc_institute = trim($_POST["ssc_institute"]);
    $hsc = trim($_POST["hsc"]);
    $hsc_passing_year = trim($_POST["hsc_passing_year"]);
    $hsc_institute = trim($_POST["hsc_institute"]);
    $cgpa = trim($_POST["cgpa"]);
    $uni_passing_year = trim($_POST["uni_passing_year"]);
    $uni_institute = trim($_POST["uni_institute"]);

    // Validate inputs
    if (empty($first_name) || empty($last_name) || empty($gender) || empty($phone) || empty($address) || empty($nid) || empty($ssc) || empty($hsc) || empty($cgpa)) {
        echo "Please fill in all fields.";
    } else {
        // Execute statement and display success message
        if ($stmt->execute()) {
            echo '<span style="color:white;text-align:center;">Data inserted successfully.</span>';


        } else {
            echo "Error inserting data: " . $stmt->error;
        }
    }
}

// Close statement and connection
$stmt->close();
$mysqli->close();
?>


<!DOCTYPE html>
<html>

<head>
    <title>Insert Data</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="css/data_jobseeker.css">

</head>

<body>


<div class="container">

<div class="left">

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

       


                <!-- <label for="first_name">First Name</label> -->

                <p><b>Personal Information</b></p>
                <input type="text" name="first_name" placeholder="Enter your first name">

                <!-- <label for="last_name">Last Name</label> -->
                <input type="text" name="last_name" placeholder="Enter your last name">

            
                

                <table>

                <th>

                </th>

                <tr>

                <td>

                <label style="margin-right: 8px;" for="gender">Gender:</label>

                </td>

                <td>
        
                <input style="cursor: pointer;" type="radio" id="male" name="gender" value="Male">
                </td>
                <td>
                <label for="male">Male</label>
                </td>

                <td>

                <input style="cursor: pointer" type="radio" id="female" name="gender" value="Female">
                </td>
                <td>
                <label for="female">Female</label>
                </td>
                <td>

                <input style="cursor: pointer;" type="radio" id="others" name="gender" value="Others">

                </td>

                <td>
                <label style="cursor: pointer" for="others">Others</label>

                </td>

                </tr>


                </table>


                <!-- <label for="phone">Phone:</label> -->
                <input type="text" name="phone" placeholder="Enter your phone number">



                <input type="text" name="address" placeholder="Enter your address">


                <input type="text" name="nid" placeholder="Enter your NID">

                <br>

                <p><b>Qualifications</b></p>

            

                <label for="ssc">SSC </label></td>
                <input type="text" name="ssc" placeholder="Enter your SSC GPA">
                <input type="text" name="ssc_passing_year" placeholder="Enter your SSC passing year">
                <input type="text" name="ssc_institute" placeholder="Enter your SSC institute">


            </div>

            <div class="right">


            


                <label for="ssc">HSC </label></td>
                <input type="text" name="hsc" placeholder="Enter your HSC GPA">
                <input type="text" name="hsc_passing_year" placeholder="Enter your HSC passing year">
                <input type="text" name="hsc_institute" placeholder="Enter your HSC institute">


<br>
                <label for="ssc">University </label></td>
                <input type="text" name="cgpa" placeholder="Enter your CGPA">
                <input type="text" name="uni_passing_year" placeholder="Enter your graduation year">
                <input type="text" name="uni_institute" placeholder="Enter your university name">

                

                
              
      

                <table>
                    <th>
                    </th>
                <tr>
                    <td>
                <button type="submit" value="Insert Data" class="submit">Update</button>
                </td>
                <td>
                <a href="profile_jobseeker.php">Profile

                </td>

                </tr>

                </table>

                                






          


    </form>
    

    <form action="uploads.php" method="post" enctype="multipart/form-data">
    <label for="CV"><b>Upload CV</b> </label></td>
    <input type="file" name="file1" />
    <input type="submit" name="submit" value="Upload" class="btn btn-info"/>
    </form>

    </div>

</div>

</body>

</html>