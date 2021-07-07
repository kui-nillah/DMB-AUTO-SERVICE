<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Submitted orders - DMB AUTO SERVICES</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">        
        <link rel="stylesheet" href="doc/css/order.css">
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
    <center><h1 id="two"><big>Submitted Orders</big></h1></center>
    </span>
    <br>
   <center><label id="label">RECENTLY SUBMITTED ORDERS LIST</label></center> 
    <br>
    <table width="100%" align="center" cellpadding="10" cellspacing="1" border="2">
        <tr>
            <td>S/N</td>
            <td>Full name</td>
            <td>Location</td>
            <td>Email</td>
            <td>Driver's age</td>
            <td>Phone no</td>
            <td>Vehicle</td>
            <td>Message</td>
            <td>Check box</td>
            <td colspan="2">ACTION</td>   
        </tr>
                  <?php 
        include 'db_connection.php';
        $kk="SELECT * FROM shipping";
        $aa=mysqli_query($conn,$kk);
        $rw=mysqli_fetch_array($aa);
        $n=1;

        while ($rw=mysqli_fetch_array($aa)) {
            $k=$rw['id'];
            $fname=$rw['fname'];
            $loc=$rw['loc'];
            $mail=$rw['mail'];
            $d_age=$rw['d_age'];
            $tel=$rw['tel'];
            $vehc=$rw['vehc'];
            $message=$rw['message'];
            $check_box=$rw['check_box'];

            echo "<tr>";
            echo "<td>$n</td>";
            echo "<td>$fname</td>";
            echo "<td>$loc</td>";
            echo "<td>$mail</td>";
            echo "<td>$d_age</td>";
            echo "<td>$tel</td>";
            echo "<td>$vehc</td>";
            echo "<td>$message</td>";
            echo "<td>$check_box</td>";
            echo "<td><a href='update1.php?uid=$k'>Update</td>";
            echo "<td><a href='delete1.php?uid=$k'>Delete</td>";
            echo "</tr>";
            $n++;
            
        }


         ?>
    </table>
        <br>
    <br>
    <center><big><h4><a href="pdf1.php">GENERATE PDF REPORT</a></h4></big></center>
    <br>
    <center><big><h4><a href="excel1.php">GENERATE EXCEL REPORT</a></h4></big></center>
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