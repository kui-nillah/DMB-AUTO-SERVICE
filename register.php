<?php 
include 'db_connection.php';
if (isset($_POST['send'])) {
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $addr=$_POST['addr'];
  $tel=$_POST['tel'];
  $mail=$_POST['mail'];
  $pass=password_hash($_POST['pass'], PASSWORD_DEFAULT);

  $aa="INSERT IGNORE INTO register (fname,lname,addr,tel,mail,pass) VALUES ('$fname','$lname','$addr','$tel','$mail','$pass')";
  $con=mysqli_query($conn,$aa);

  if ($con) {
    header("location: admin1.php");
    die();
  }
  else{
    echo "Failled to register";
  }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Register - DMB AUTO SERVICES</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="doc/css/register.css">
    </head>
    <body>
        <div class="menu">
    <div class="nav">
	<div class="head">
      <a href="dashboard.html" id="logo">DMB AUTO<br>SERVICES</a>
	</div>
	<div class="nav2">
             <a href="enquiry.php">Submitted Enquiries</a>
             <a href="order.php">Submitted Orders</a>
             <a href="gear.php">New Gears</a>
             <a href="vgear.php">View Gears</a>
             <a href="register.php">Register Admin</a>
             <a href="logout.php">LOGOUT</a>
     </div>
          <div class="social">
     	    <a href="#"><i class="fa fa-twitter"></i></a><br>
            <a href="#"><i class="fa fa-facebook"></i></a><br>
            <a href="#"><i class="fa fa-instagram"></i></a><br>
     </div>
    </div>
    </div>
    <div class="main">
        <span class="medium">
    <center><h1 id="two"><big>Admin Registration</big></h1></center>
    </span>
    <div class="log">
   <center><form method="POST" action="register.php" autocomplete="off">
   <br>
   <br>
    <label>First name</label><br>
    <input type="text" name="fname" maxlenght="50" placeholder="First name" required>
    <br>
    <br>
    <label>Last name</label><br>
    <input type="text" name="lname" maxlenght="50" placeholder="Last name" required>
    <br>
    <br>
    <label>Address</label><br>
    <input type="text" name="addr" maxlenght="250" placeholder="Street, Region, Country" required>
    <br>
    <br>
    <label>Phone number</label><br>
    <input type="text" name="tel" maxlenght="25" placeholder="+255...." required>
    <br>
    <br>
    <label>Email address</label><br>
    <input type="email" name="mail" maxlenght="250" placeholder="Email address" required>
    <br>
    <br>
    <label>Password</label><br>
    <input type="password" name="pass" maxlenght="250" required>
    <br>
    <br>
    <input type="submit" name="send" value="REGISTER">
    <input type="reset" name="reset" value="RESET">
    </form></center>
    </div>
    </div>
    </div>
        <div class="footer">
      <center>
              <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |
                  This website is made by <a href="https://t.me/black_titan" target="_blank">Black Titan</a></p>
      </center>
    </div>

        <script src="" async defer></script>
    </body>
    </html>