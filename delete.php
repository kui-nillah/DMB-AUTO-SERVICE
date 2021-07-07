<?php
include("db_connection.php");
$uu=$_GET['uid'];
	$qr="DELETE FROM enquiry WHERE id='$uu'";
	if (mysqli_query($conn,$qr)) {
		header("location:enquiry.php");
		die();
	}
	else{
		echo "unable to connect";
	}

?>