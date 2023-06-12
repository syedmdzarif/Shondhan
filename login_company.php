
<?php

$conn = mysqli_connect('localhost','root','','shondhan') or die('connection failed');

session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `company` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['id'] = $row['id'];
      $_SESSION['name']= $row["name"];
      $_SESSION['email']= $row["email"];
      header('location:profile_company.php');
   }else{
      $message[] = 'Incorrect email or password!';
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="css/login_company.css">

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
      <p>Email</p>
      <input type="email" name="email" placeholder="Enter email" class="box" required>
      <p>Password</p>
      <input type="password" name="password" placeholder="Enter password" class="box" required>
      <button type="submit" name="submit" value="login now">Log In</button>
      <br>
      <br>
      <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDon't have an account? <a href="signup_company.php">Sign Up</a></p>
   </form>

   </div>

<div class="right">

<img src="images/office3.jpg" alt="" width:200px height:200px>


</div>


</div>

</body>
</html>
