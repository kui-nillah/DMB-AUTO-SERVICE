<?php 
include 'db_connection.php';
if (isset($_POST['send'])) {
  $fname=$_POST['fname'];
  $loc=$_POST['loc'];
  $mail=$_POST['mail'];
  $d_age=$_POST['d_age'];
  $tel=$_POST['tel'];
  $vehc=$_POST['vehc'];
  $message=$_POST['message'];
  $check_box=$_POST['check_box'];

  $aa="INSERT IGNORE INTO shipping (fname,loc,mail,d_age,tel,vehc,message,check_box) VALUES ('$fname','$loc','$mail','$d_age','$tel','$vehc','$message','$check_box')";
  $con=mysqli_query($conn,$aa);

  if ($con) {
    header("location:received.php");
    die();
  }
  else{
    header("location:failled.php");
  }
}
?>
<!DOCTYPE html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="doc/css/shipping.css">
<head>
<title>Shipping</title>
</head>
<body>
	<div class="menu">
       <div class="nav">
       			<div class="head">
               <a href="index.php" id="logo">DMB AUTO<br>SERVICES</a>
	</div>
	<div class="nav2">
             <a href="index.php.#pop">Popular</a>
             <a href="aquarium.php">Aquiarim</a>
             <a href="dealers.php">Dealers</a>
             <a href="Shipping.php">Shipping</a>
             <a href="sumatra.php">SUMATRA</a>
             <a href="contact.php">Contact Us</a>
     </div>
          <div class="social">
     	    <a href="#"><i class="fa fa-twitter"></i></a><br>
            <a href="#"><i class="fa fa-facebook"></i></a><br>
            <a href="#"><i class="fa fa-instagram"></i></a><br>
     </div>
     </div>
	</div>
	<div class="main">
		<div class="header1" style=" background-image: url(doc/img/shipping/1.JPG);">
        <div id="heading"><center><h1><big>Shipping</big></h1></center></div>
	</div>
    <div class="disc">
    <div class="disc1">
    <p id="two"><b>The Complete Solution for Your Fleet Relocation
</b></p>
<p id="one">
Our network of certified transport experts have the experience and resources required to provide a full-service solution for
your fleet shipping needs. We understand the importance of keeping your fleet on the road, and to ensure that we provide
you with the highest level of service.
</p>
    </div>
    </div>
    <div class="form">
    <form action="shipping.php" method="POST" autocomplete="off">
    <table cellpadding="10" cellspacing="10" align="center" width="70%%" border="0">
    <tr>
    <td colspan="3"><center><p id="three"><big>Shipping form</big></p></center></td>
    </tr>
        <tr>
    <td>
    <input type="text" maxlenght="250" name="fname" placeholder="Full Name" required>
    </td>
    <td>
    <div class="custom-select" style="width:200px;">
  <select name="loc">
    <option value="0">Pick up location</option>
    <option value="1">Audi</option>
    <option value="2">BMW</option>
    <option value="3">Citroen</option>
    <option value="4">Ford</option>
    <option value="5">Honda</option>
    <option value="6">Jaguar</option>
    <option value="7">Land Rover</option>
    <option value="8">Mercedes</option>
    <option value="9">Mini</option>
    <option value="10">Nissan</option>
    <option value="11">Toyota</option>
    <option value="12">Volvo</option>
  </select>
</div>
</td>
    <td>
    <input type="checkbox" name="check_box" value="Drop off at a different location">Drop off at a different location
    </td>
    </tr>
        <tr>
    <td>
    <input type="email" name="mail" maxlenght="250" placeholder="Email address" required>
    </td>
    <td>
    <input type="text" name="d_age" maxlenght="3" placeholder="Drivers age" required>
    </td>
    <td></td>
    </tr>
        <tr>
    <td>
    <input type="text" name="tel" maxlenght="25" placeholder="Phone" required>
</td>
    <td>
     <input type="text" name="vehc" placeholder="Vehical" required>
    </td>
    <td>
    </td>
    </tr>
        <tr>
    <td colspan="3">
    <textarea name="message" placeholder="Any message about the car your fleet" required cols="90" rows="5" maxlength="300"></textarea>
    </td>
    </tr>
        <tr>
    <td colspan="3">
    <center><button type="submit" class="signupbtn" name="send">SEND</button></center>
    </td>
    </tr>
    </table>
    </form>
    </div>
    <div class="fleet">
    <div id="fleet">
    <center><h3><big><b>FLEET MANAGEMENT</b></big></h3></center>
    </div>
    <div class="manage">
    <center><h4><big><b><a href="#">Trucks</a> |<a href="#"> Mini vans </a>|<a href="#"> Buses </a>|<a href="#"> SUVs</a>
</b></big></h4></center>
    </div>
    </div>

    </div>
    <script src="doc/js/shipping.js"></script>
</body>
</html>