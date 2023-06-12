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
            <a class="w_login" href="job_list.php">Jobs</a>
            <a class="w_login" href="data_jobseeker.php">Portfolio</a>
            <a class="w_login" href="update_jobseeker.php">Update Profile</a>
            <a class="e_login" href="courses_list.php">Courses</a>
       
            <a class="e_signup" href="logout.php">Logout</a>
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

    session_start();

    if ($_SESSION['name']==true)
    {
      echo $_SESSION['name'];
      

      echo " #"."".$_SESSION['id'];
      echo "<br><br>"."Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

    }
    else
    {
      header('location:login_jobseeker.php');
    }

     ?>
     </h2>
       </div>

       <div class="profile_picture"> 
       <img src="images/pfp.jpg" width:"300px" height:"300px">

</div>





<div class="container">
<div class="row">

  <div class="a">





  <div class="col-sm-4">
    <div class="panel panel-danger">
      <div class="panel-heading"><a href="company_list.php" class="link2">Companies Count</a></div>
      <div class="panel-body">

        <h3 class="text-center"><b>

              <?php
              $connection = mysqli_connect("localhost","root","","shondhan");

              $query = "SELECT id FROM company ORDER BY id";
              $query_run = mysqli_query($connection,$query);
              $row = mysqli_num_rows($query_run);

              echo "$row";
               ?>

            </b></h3>



      </div>
    </div>
  </div>


  <div class="col-sm-4">
    <div class="panel panel-success">
      <div class="panel-heading">  <a href="job_list.php" class="link2">Jobs Count</a></div>
      <div class="panel-body">


                  <h3 class="text-center"><b>

                    <?php
                    $connection = mysqli_connect("localhost","root","","shondhan");

                    $query = "SELECT company FROM job ORDER BY company";
                    $query_run = mysqli_query($connection,$query);
                    $row = mysqli_num_rows($query_run);

                    echo "$row";
                     ?>

                  </b></h3>



      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="panel panel-primary">
    <div class="panel-heading"><a href="course_list.php" class="link">Courses Count</a></div>
      <div class="panel-body">

        <h3 class="text-center"><b>

                 <?php
                 $connection = mysqli_connect("localhost","root","","shondhan");

                 $query = "SELECT name FROM course ORDER BY name";
                 $query_run = mysqli_query($connection,$query);
                 $row = mysqli_num_rows($query_run);

                 echo "$row";
                  ?>

               </b></h3>



      </div>
    </div>
  </div>






    </div>
</div>
</div>






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
