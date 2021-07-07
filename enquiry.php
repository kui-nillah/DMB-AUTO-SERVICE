<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Submitted enquiries - DMB AUTO SERVICES</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">        
        <link rel="stylesheet" href="doc/css/enquiry.css">
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
    <center><h1 id="two"><big>Submitted Enquiries</big></h1></center>
    </span>
    <br>
   <center><label id="label">RECENTLY SUBMITTED ENQUIRIES LIST</label></center> 
    <br>
    <table width="100%" align="center" cellpadding="10" cellspacing="1" border="2">
        <tr>
            <td>S/N</td>
            <td>First name</td>
            <td>Last name</td>
            <td>Phone no</td>
            <td>Whatsapp no</td>
            <td>Email</td>
            <td>Country</td>
            <td>Comment</td>
            <td colspan="2">ACTION</td>   
        </tr>
          <?php 
        include 'db_connection.php';
        $kk="SELECT * FROM enquiry";
        $aa=mysqli_query($conn,$kk);
        $rw=mysqli_fetch_array($aa);
        $n=1;

        while ($rw=mysqli_fetch_array($aa)) {
            $k=$rw['id'];
            $fname=$rw['fname'];
            $lname=$rw['lname'];
            $tel=$rw['tel'];
            $tsap=$rw['tsap'];
            $mail=$rw['mail'];
            $country=$rw['country'];
            $comment=$rw['comment'];

            echo "<tr>";
            echo "<td>$n</td>";
            echo "<td>$fname</td>";
            echo "<td>$lname</td>";
            echo "<td>$tel</td>";
            echo "<td>$tsap</td>";
            echo "<td>$mail</td>";
            echo "<td>$country</td>";
            echo "<td>$comment</td>";
            echo "<td><a href='update.php?uid=$k'>Update</td>";
            echo "<td><a href='delete.php?uid=$k'>Delete</td>";
            echo "</tr>";
            $n++;
            
        }


         ?>
    </table>
    <br>
    <br>
    <center><big><h4><a href="pdf.php">GENERATE PDF REPORT</a></h4></big></center>
    <br>
    <center><big><h4><a href="excel.php">GENERATE EXCEL REPORT</a></h4></big></center>

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