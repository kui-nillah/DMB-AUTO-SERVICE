<?php
include ("db_connection.php");
$k=$_GET['uid'];
$cc="SELECT * FROM shipping WHERE id='$k'";
$vv=mysqli_query($conn,$cc);
$row=mysqli_fetch_array($vv);
$k=$row['id'];
$fname=$row['fname'];
$loc=$row['loc'];
$mail=$row['mail'];
$d_age=$row['d_age'];
$tel=$row['tel'];
$vehc=$row['vehc'];

if (isset($_POST['send'])) {
$k=$_POST['uid'];   
$fname=$_POST['fname'];
$loc=$_POST['loc'];
$mail=$_POST['mail'];
$d_age=$_POST['d_age'];
$tel=$_POST['tel'];
$vehc=$_POST['vehc'];
$set="UPDATE shipping SET fname='$fname',loc='$loc',mail='$mail',d_age='$d_age',tel='$tel',vehc='$vehc' WHERE id='$k'";
    if (mysqli_query($conn,$set)) {
        header("location:order.php");
        die();

    }
    else
    {

    echo "wrong entry";
    }
}
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Update informations - DMB AUTO SERVICES</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">        
        <link rel="stylesheet" href="doc/css/update1.css">
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
    <center><h1 id="two"><big>Update information</big></h1></center>
    </span>
    <div class="log">
   <center><form method="POST" action="update1.php" autocomplete="off">
   <br>
   <br>
    <label>Full name</label><br>
    <input type="text" name="fname" maxlenght="100" placeholder="" value="<?php echo $fname;?>" required>
    <br>
    <br>
    <label>Location</label><br>
    <input type="text" name="loc" maxlenght="50" placeholder="" value="<?php echo $loc;?>" required>
    <br>
    <br>
    <label>Email address</label><br>
    <input type="email" name="mail" maxlenght="250" placeholder="" value="<?php echo $mail;?>" required>
    <br>
    <br>
        <label>Driver age</label><br>
    <input type="text" name="d_age" maxlenght="3" placeholder="" value="<?php echo $d_age;?>" required>
    <br>
    <br>
    <label>Phone number</label><br>
    <input type="text" name="tel" maxlenght="25" placeholder="" value="<?php echo $tel;?>" required>
    <br>
    <br>
    <label>Vehicle</label><br>
    <input type="text" name="vehc" maxlenght="100" placeholder="" value="<?php echo $vehc;?>" required>
    <br>
    <br>
    <input type="hidden" name="uid" value="<?php echo $k;?>">
    <input type="submit" name="send" value="UPDATE">
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
</body>
</html>