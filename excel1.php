<?php 
include 'db_connection.php';
$output='';
	$aa="SELECT * FROM shipping ORDER BY id DESC";
	$result=mysqli_query($conn,$aa);
	if (mysqli_num_rows($result) > 0) {
		$output.='
		<table border="1" padding="15">
		   <tr>
		     <th>S/N</th>
		     <th>Full name</th>
		     <th>Location</th>
		     <th>Email</th>
		     <th>Driver age</th>
		     <th>Phone no</th>
		     <th>Vehicle/th>
		     <th>Message</th>		   
		     <th>Check box</th>  
		  </tr>

		';
		while ($rw=mysqli_fetch_array($result)) {
			$output.='
			 <tr>
		       <td>'.$rw['id'].'</td>
		       <td>'.$rw['fname'].'</td>
		       <td>'.$rw['loc'].'</td>
		       <td>'.$rw['mail'].'</td>
		       <td>'.$rw['d_age'].'</td>
		       <td>'.$rw['tel'].'</td>
		       <td>'.$rw['vehc'].'</td>
		       <td>'.$rw['message'].'</td>
		       <td>'.$rw['check_box'].'</td>
		    </tr>

		   
			';
		}
		$output.=' </table>';
		header("content-Type: application/xls");
		header("content-Disposition:attachment; filename=Order report.xls");
		
		echo $output;
	}


 ?>
