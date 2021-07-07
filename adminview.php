<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registered admins - DMB AUTO SERVICES</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">        
        <link rel="stylesheet" href="doc/css/adminview.css">
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
    <center><h1 id="two"><big>Registered admins</big></h1></center>
    </span>
    <br>
   <center><label id="label">REGISTERED SYSTEM ADMINS</label></center> 
    <br>
    <table width="100%" align="center" cellpadding="10" cellspacing="1" border="2">
        <tr>
            <td>S/N</td>
            <td>First name</td>
            <td>Last name</td>
            <td>Address</td>
            <td>Phone no</td>
            <td>Email</td>
            <td colspan="2">ACTION</td>   
        </tr>
          <?php 
        include 'db_connection.php';
        $kk="SELECT * FROM register";
        $aa=mysqli_query($conn,$kk);
        $rw=mysqli_fetch_array($aa);
        $n=1;

        while ($rw=mysqli_fetch_array($aa)) {
            $k=$rw['id'];
            $fname=$rw['fname'];
            $lname=$rw['lname'];
            $addr=$rw['addr'];
            $tel=$rw['tel'];
            $mail=$rw['mail'];

            echo "<tr>";
            echo "<td>$n</td>";
            echo "<td>$fname</td>";
            echo "<td>$lname</td>";
            echo "<td>$addr</td>";
            echo "<td>$tel</td>";
            echo "<td>$mail</td>";
            echo "<td><a href='update2.php?uid=$k'>Update</td>";
            echo "<td><a href='delete2.php?uid=$k'>Delete</td>";
            echo "</tr>";
            $n++;
            
        }


         ?>
    </table>
    <br>
    <br>

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