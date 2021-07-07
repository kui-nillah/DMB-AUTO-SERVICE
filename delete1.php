<?php
include("db_connection.php");
$uu=$_GET['uid'];
	$qr="DELETE FROM shipping WHERE id='$uu'";
	if (mysqli_query($conn,$qr)) {
		header("location:order.php");
		die();
	}
	else{
		echo "unable to connect";
	}

?>