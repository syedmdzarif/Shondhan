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
$stmt = $mysqli->prepare("INSERT INTO js_info (id, first_name, last_name, gender, phone, address, nid, ssc, hsc, cgpa) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("isssssssss", $id, $first_name, $last_name, $gender, $phone, $address, $nid, $ssc, $hsc, $cgpa);

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
    $hsc = trim($_POST["hsc"]);
    $cgpa = trim($_POST["cgpa"]);

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
<body class="bgb">




  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div>
          <table class="tclass">
              <td>
                  <labe for="first_name">First Name</label>
              </td>
              <td><input type="text" name="first_name" placeholder="Enter your First Name"></td>
              <tr>
                  <td><label for="last_name">Last Name</label></td>
                  <td><input type="text" name="last_name" placeholder="Enter your Last Name"></td>
              </tr>
              <tr>
                  <td>
                      <label style="margin-right: 8px;" for="gender">Gender:</label>
                  </td>
                  <td>
                      <input style="cursor: pointer;" type="radio" id="male" name="gender" value="Male">
                      <label for="male">Male</label>

                      <input style="cursor: pointer" type="radio" id="female" name="gender" value="Female">
                      <label for="female">Female</label>

                      <input style="cursor: pointer;" type="radio" id="others" name="gender" value="Others">
                      <label style="cursor: pointer" for="others">Others</label>
                  </td>

              </tr>



              <tr>
                  <td><label for="phone">Phone:</label></td>
                  <td><input type="text" name="phone" placeholder="Enter your Phone Number"></td>
              </tr>

              <tr>
                  <td><label for="address">Address</label></td>
                  <td><input type="text" name="address" placeholder="Enter your Address"></td>
              </tr>
              <br>
              <tr>
                  <td><label for="nid">NID</label></td>
                  <td><input type="text" name="nid" placeholder="Enter your NID"></td>
              </tr>

              <tr>
                  <td><label for="ssc">SSC Result</label></td>
                  <td><input type="text" name="ssc" placeholder="Enter your SSC GPA"></td>
              </tr>

              <tr>
                  <td><label for="hsc">HSC Result</label></td>
                  <td><input type="text" name="hsc" placeholder="Enter your HSC GPA"></td>
              </tr>

              <tr>
                  <td><label for="cgpa">Graduation CGPA</label></td>
                  <td><input type="text" name="cgpa" placeholder="Enter your Graduation CGPA"></td>
              </tr>








              <tr>
                  <td>
                      <input type="submit" value="Insert Data" class="submit">
                  </td>

              </tr>

      </div>


  </form>

</body>
</html>