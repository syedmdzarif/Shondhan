





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>JobMaker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/payment.css">


  </head>
  <body>
    



<div class="pay">
  <form >
<table>
  <tr>
    <td>
      Name:
    </td>
    <td>
      <?php
      session_start();

      if($_SESSION['name']==true)
      {
        echo $_SESSION['name'];


      }
      else
      {
        header('location:login_jobseeker.php');
      }
       ?>
    </td>
  </tr>
  <tr>
    <td>
    User ID:
    </td>
    <td>
      <?php
        echo $_SESSION['id'];
       ?>
    </td>
  </tr>

  <tr>
    <td>
    Email:
    </td>
    <td>
      <?php
        echo $_SESSION['email'];
       ?>
    </td>
  </tr>

<tr>
  <td>
Agent No.
  </td>
  <td>
    <h6>01815491313</h6>
  </td>
</tr>

<tr>
  <td>

      <input type="radio" id="age1" name="pay_medium" value=Rocket" >
      <img  src="images/bkash.png" alt="Rocket logo">
  </td>
  <td>
      <input type="radio" id="age1" name="pay_medium" value=Rocket" >
      <img  src="images/nogod.png" alt="Rocket logo">
  </td>
  <td>
      <input type="radio" id="age1" name="pay_medium" value=Rocket" >
      <img  src="images/rocket.png" alt="Rocket logo">
  </td>


</tr>

</table>


  </form>

  <a class="button" href="payment_next.php" role="button">Pay</a>
  <a class="button" href="logout.php" role="button">Logout</a>
</div>
  </body>
</html>
