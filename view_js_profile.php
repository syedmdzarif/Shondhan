<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="css/profile_jobseeker.css">


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
            <a class="w_login" href="profile_company.php">Back to Profile</a>
            <!-- <a class="w_login" href="data_jobseeker.php">Portfolio</a>
            <a class="w_login" href="update_jobseeker.php">Update Profile</a>
            <a class="e_login" href="courses_list.php">Courses</a> -->
       
            <!-- <a class="e_signup" href="logout.php">Logout</a> -->
        </ul>
    </div>
</nav>

<!-- 
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="jsdata.php">Add Information for Job</a>
  <a href="jsupdate.php">Update Information</a>
  <a href="readjob.php">Apply for Job</a>
  <a href="courseread.php">Enroll Course</a>
  <a href="logout.php" id="logout">Logout</a>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
</div>
-->
<div id="main">

<div class="details">


  <h2>
    
    <?php

    $conn = mysqli_connect('localhost', 'root', '', 'shondhan');

    if(isset($_GET['js_id'])){
      $js_id = mysqli_real_escape_string($conn, $_GET['js_id']);
    }

    $sql = "SELECT name from jobseeker where id = '$js_id'";

    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
          $js_name = $row['name'];
    }


    ?>

    <p style="font-size: 24px"><b><?php echo $js_name; echo " #"."".$js_id;  ?></b></p>

    <?php
      
      
      
      echo "<br><br>"."Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";


     ?>
     </h2>
       </div>

       <div class="profile_picture"> 
       <img src="images/pfp_avatar.jpg" width:"300px" height:"300px">

</div>



  </div>





            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "shondhan";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            $sql_info = "SELECT filename, js_info.first_name, js_info.last_name, js_info.phone, js_info.address, js_info.gender, js_info.ssc, js_info.ssc_passing_year, js_info.ssc_institute, js_info.hsc, js_info.hsc_passing_year, js_info.hsc_institute, js_info.cgpa, js_info.uni_passing_year, js_info.uni_institute from js_info JOIN cv ON cv.js_id = js_info.id WHERE js_info.id = '$js_id'";

            // Execute SQL query
            $result = mysqli_query($conn, $sql_info);



   
            if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            $row = mysqli_fetch_assoc($result);
               
         
                ?>
<div class="container_2">

<div class="left">
           
                  <h3><b>Personal Information</b></h3>
                  <br>
                  <label><b>First Name: </b></label>
                  <?php echo $row["first_name"];  ?>
                  <br>
                 
                  <label><b>Last Name: </b></label>
                  <?php echo $row["last_name"];  ?>
                  <br>
                  <label><b>Phone Number: </b></label>
                  <?php echo $row["phone"]; ?>
                  <br>
                  <label><b>Address: </b></label>
                  <?php echo  $row["address"];  ?>
                  <br>
                  <label><b>Gender: </b></label>
                  <?php echo $row["gender"];  ?>
                  <br>
                  <br>

                  <h3><b>Uploaded CV</b></h3>
           

                  <a href="uploads/<?php echo $row['filename']; ?>" target="_blank">View</a>
                  <a href="uploads/<?php echo $row['filename']; ?>" download>Download</a>

                  </div>


                  

                  <div class="right">

                  <h3><b>Educational Qualifications</b></h3>

                  <br>

                  <h4><b>Secondary School Certificate</b></h4>
                  
                  <label><b>Institution: </b></label>
                  <?php  echo $row["ssc_institute"];  ?>
                  <br>
                  <label><b>Passing Year: </b></label>
                  <?php echo $row["ssc_passing_year"]; ?>
                  <br>
                  <label><b>Result: </b></label>
                  <?php echo $row["ssc"] ;  ?>
                  <br>
                  <br>
                  
                 
                  
            

            

                  <h4><b>Higher Secondary Certificate</b></h4>
                  
                  <label><b>Institution: </b></label>
                  <?php  echo $row["hsc_institute"];  ?>
                  <br>
                  <label><b>Passing Year: </b></label>
                  <?php echo $row["hsc_passing_year"]; ?>
                  <br>
                  <label><b>Result: </b></label>
                  <?php echo $row["hsc"] ;  ?>
                  <br>
                  <br>


          

        

                  <h4><b>University</b></h4>
                  
                  <label><b>Institution: </b></label>
                  <?php  echo $row["uni_institute"];  ?>
                  <br>
                  <label><b>Passing Year: </b></label>
                  <?php echo $row["uni_passing_year"]; ?>
                  <br>
                  <label><b>Result: </b></label>
                  <?php echo $row["cgpa"] ;  ?>
                  <br>
                  <br>



                  


           

                  </div>

                <?php
                
                
                

              

            

          }
                

                ?>


            </div>

</html>





<!-- <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script> -->

</body>
</html>
