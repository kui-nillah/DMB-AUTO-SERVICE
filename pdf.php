<?php
require_once 'db_connection.php';
require('fpdf/fpdf.php');

$pdf = new FPDF('p','mm','A4');
$pdf->AddPage();
$pdf->SetFont('arial','B',10);
$pdf->Cell(10,10,'S/N',1,0,'c');
$pdf->Cell(25,10,'First name',1,0,'c');
$pdf->Cell(25,10,'Last name',1,0,'c');
$pdf->Cell(30,10,'Phone no',1,0,'c');
$pdf->Cell(30,10,'Whatsapp no',1,0,'c');
$pdf->Cell(50,10,'Email',1,0,'c');
$pdf->Cell(25,10,'country',1,1,'c');



        $kk="SELECT * FROM enquiry";
        $aa=mysqli_query($conn,$kk);
       // $rw=mysqli_fetch_array($aa);
        $n=1;

       while ($rw=mysqli_fetch_array($aa)) {
            $k=$rw['id'];
            $fname=$rw['fname'];
            $lname=$rw['lname'];
            $tel=$rw['tel'];
            $tsap=$rw['tsap'];
            $mail=$rw['mail'];
            $country=$rw['country'];
          
$pdf->Cell(10,10,$n,1,0,'c');
$pdf->Cell(25,10,$fname,1,0,'c');
$pdf->Cell(25,10,$lname,1,0,'c');
$pdf->Cell(30,10,$tel,1,0,'c');
$pdf->Cell(30,10,$tsap,1,0,'c');
$pdf->Cell(50,10,$mail,1,0,'c');
$pdf->Cell(25,10,$country,1,1,'c');

			    
			$n++;
    }
$pdf->Output();
?>