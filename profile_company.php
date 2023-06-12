<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profile_company.css">
    <title>Shondhan</title>
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
            <a class="w_login" href="job_post.php">Post Job</a>
            <a class="w_login" href="applications.php">Applications</a>
            <a class="w_login" href="update_company.php">Update Profile</a>

            <a class="e_signup" href="logout_company.php">Logout</a>
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
       <img src="images/company_pfp.jpg" width:"300px" height:"300px">

</div>
</body>
</html>