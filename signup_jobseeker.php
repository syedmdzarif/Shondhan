<?php

$conn = mysqli_connect('localhost','root','','shondhan') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['confirm_password']));
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $select = mysqli_query($conn, "SELECT * FROM `jobseeker` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'User already exist';
   }else{
      if($pass != $cpass){
         $message[] = 'Confirm password not matched!';
      }elseif($image_size > 2000000){
         $message[] = 'Image size is too large!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `jobseeker`(name, email, password, image) VALUES('$name', '$email', '$pass', '$image')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'Sign up successful!';
            header('location:index.php');
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
   <link rel="stylesheet" href="css/signup_jobseeker.css">

</head>
<body>

   <form action="" method="post" enctype="multipart/form-data">
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
 
      <input type="text" name="name" placeholder="Enter your name" class="box" required>
      <br>
      
      <input type="email" name="email" placeholder="Enter your email" class="box" required>
      <br>
 
      <input type="password" name="password" placeholder="Enter your password" class="box" required>
      <br>
     
      <input type="password" name="confirm_password" placeholder="Confirm Password" class="box" required>
      <br>
      
      <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
      <br>
      <input type="submit" name="submit" value="Sign Up">
      <a href="login_jobseeker.php">&nbspAlready have an account? Login In Here</a>
   </form>
</div>

</body>
</html>
