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
            <a class="w_login" href="job_list_admin.php">Jobs</a>
            <a class="w_login" href="company_list_admin.php">Companies</a>
            <a class="w_login" href="jobseeker_list_admin.php">Users</a>
            <a class="e_login" href="admin_profile.php">Profile</a>
            <a class="e_login" href="courses_list_admin.php">Courses</a>
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
      
      $js_id = $_SESSION['id'];
      echo " #"."".$_SESSION['id'];
      echo "<br><br>"."Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

    }
    else
    {
      header('location:login_admin.php');
    }

     ?>
     </h2>
       </div>

       <div class="profile_picture"> 
       <img src="images/pfp_avatar.jpg" width:"300px" height:"300px">

</div>



  </div>





          

</body>
</html>
