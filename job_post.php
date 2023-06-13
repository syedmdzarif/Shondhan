<?php

session_start();

if(isset($_SESSION['id'])){
    $company_id = $_SESSION['id'];
 }


$conn = mysqli_connect('localhost','root','','shondhan') or die('connection failed');

if(isset($_POST['submit'])){

   $company = mysqli_real_escape_string($conn, $_POST['company']);
   $title = mysqli_real_escape_string($conn, $_POST['title']);
   $type = mysqli_real_escape_string($conn, $_POST['type']);
   $post = mysqli_real_escape_string($conn, $_POST['post']);
  $salary = mysqli_real_escape_string($conn, $_POST['salary']);
$workhour = mysqli_real_escape_string($conn, $_POST['workhour']);



   $insert = mysqli_query($conn, "INSERT INTO `job`(company, company_id, title, type, post, salary, workhour) VALUES('$company', '$company_id', '$title', '$type', '$post', '$salary', '$workhour')") or die('query failed');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Job Post</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="css/job_post.css">

</head>
<body>

<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
   

      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="text" name="company" placeholder="enter Company Name" class="box" required>
      <input type="text" name="title" placeholder="enter title" class="box" required>
      <select name="type">
          <option value="Data Scientist">Data Scientist</option>
          <option value="Senior Software Developer">Senior Software Developer</option>
          <option value="Junior Software Developer">Junior Software Developer</option>
          <option value="Govt. Developer">Govt. Developer</option>
          <option value="Front Desk Attendee">Front Desk Attendee</option>
          <option value="Quality Assurance Engineer">Quality Assurance Engineer</option>
          <option value="Human Resource">Human Resource</option>
          <option value="Business Analyst">Business Analyst</option>
          <option value="Medical Practitioner">Medical Practitioner</option>
          <option value="Faculty Member">Faculty Member</option>
      </select>
      <input type="text" name="post" placeholder=" your company available post" class="box" required>
      <input type="text" name="salary" placeholder="Salary For this job" class="box" required>
      <input type="text" name="workhour" placeholder="Working Hour" class="box" required>


      <input type="submit" name="submit" value="Post This Job" class="btn">

   </form>

</div>

</body>
</html>
