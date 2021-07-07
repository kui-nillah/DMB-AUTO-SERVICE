<?php
error_reporting(1);
session_start();
extract($_REQUEST);
$name=$_SESSION['eid'];
if($_REQUEST['send']=='out')
{
session_destroy();
header("location:admin.php");
}
else if($name=="")
{
header("location:dashboard.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
</body>
</html>