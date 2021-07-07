<?php
session_start();
error_reporting(E_ALL); ini_set('display_errors', 'Off');
if(empty($_SESSION['SMSfname']))
	{
	 header("location:../index.php");
	 die();
	}
?>
