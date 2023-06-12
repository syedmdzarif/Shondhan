<?php

$conn = mysqli_connect('localhost','root','','shondhan') or die('connection failed');


if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $select = mysqli_query($conn, "SELECT * FROM `company` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'User already exist';
   }else{
      if($pass != $cpass){
         $message[] = 'Confirm password not matched!';
      }elseif($image_size > 2000000){
         $message[] = 'Image size is too large!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `company`(name, email, password, image) VALUES('$name', '$email', '$pass', '$image')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'Signed up successfully!';
            header('location:login_company.php');
         }else{
            $message[] = 'Sign up failed!';
         }
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Shondhan</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/signup_company.css">

</head>
<body>



<div class="container">

        <div class="left">

   <form action="" method="post" enctype="multipart/form-data">
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <p>Company Name</p>
      <input type="text" name="name" placeholder="Enter username" class="box" required>
      <p>Email</p>
      <input type="email" name="email" placeholder="Enter email" class="box" required>
      <p>Password</p>
      <input type="password" name="password" placeholder="Enter password" class="box" required>
      <p>Confirm Password</p>
      <input type="password" name="cpassword" placeholder="Confirm password" class="box" required>
      <p>Choose an Image</p>
      <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
      <button type="submit" name="submit" value="signup now">Sign Up</button>
         <p>&nbsp&nbsp&nbsp&nbspAlready have an account? <a href="login_company.php">Login now</a></p>
   </form>

   </div>

<div class="right">

<img src="images/signup_company.jpg" alt="" width:200px height:200px>


</div>


</div>



</body>
</html>
