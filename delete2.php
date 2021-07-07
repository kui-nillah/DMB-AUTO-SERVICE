<?php
include("db_connection.php");
$uu=$_GET['uid'];
	$qr="DELETE FROM register WHERE id='$uu'";
	if (mysqli_query($conn,$qr)) {
		header("location:adminview.php");
		die();
	}
	else{
		echo "unable to connect";
	}

?>