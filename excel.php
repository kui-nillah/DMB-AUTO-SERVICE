<?php 
include 'db_connection.php';
$output='';
	$aa="SELECT * FROM enquiry ORDER BY id DESC";
	$result=mysqli_query($conn,$aa);
	if (mysqli_num_rows($result) > 0) {
		$output.='
		<table border="1" padding="15">
		   <tr>
		     <th>S/N</th>
		     <th>First name</th>
		     <th>Last name</th>
		     <th>Phone no</th>
		     <th>Whatsapp no</th>
		     <th>Email</th>
		     <th>Country</th>
		     <th>Comment</th>		     
		  </tr>

		';
		while ($rw=mysqli_fetch_array($result)) {
			$output.='
			 <tr>
		       <td>'.$rw['id'].'</td>
		       <td>'.$rw['fname'].'</td>
		       <td>'.$rw['lname'].'</td>
		       <td>'.$rw['tel'].'</td>
		       <td>'.$rw['tsap'].'</td>
		       <td>'.$rw['mail'].'</td>
		       <td>'.$rw['country'].'</td>
		       <td>'.$rw['comment'].'</td>
		    </tr>

		   
			';
		}
		$output.=' </table>';
		header("content-Type: application/xls");
		header("content-Disposition:attachment; filename=Enquiry report.xls");
		
		echo $output;
	}


 ?>
