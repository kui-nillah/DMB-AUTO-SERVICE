<?php
include 'db_connection.php';
if (isset($_POST['send'])) {
    $mail=$_POST['mail'];
    $pass=$_POST['pass'];
    $rq="SELECT pass FROM register WHERE mail='$mail'";
    $con=mysqli_query($conn,$rq);
    $row=mysqli_fetch_array($con);
    $bpass=$row['pass'];

    if (password_verify($pass,$bpass)) {
        header("location:adminview.php");
        die();
    }
    else
    {
        echo "wrong username or password";
    }
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Login - DMB AUTO SERVICES</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">        
        <link rel="stylesheet" href="doc/css/admin.css">
    </head>
    <body>
    <div class="menu">
    <div class="nav">
	<div class="head">
      <a href="dashboard.php" id="logo">DMB AUTO<br>SERVICES</a>
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
    <center><h1 id="two"><big>Admin Login</big></h1></center>
    </span>
    <div class="log">
   <center><form method="POST" action="admin1.php" autocomplete="off">
   <br>
   <br>
    <label>Username</label><br>
    <input type="email" name="mail" maxlenght="250" placeholder="Email address" required>
    <br>
    <br>
    <label>Password</label><br>
    <input type="password" name="pass" maxlenght="250" required>
    <br>
    <br>
    <input type="submit" name="send" value="LOGIN">
    <input type="reset" name="reset" value="CANCEL">
    </form></center>
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