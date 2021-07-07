<?php
require_once 'db_connection.php';
require('fpdf/fpdf.php');

$pdf = new FPDF('p','mm','A4');
$pdf->AddPage();
$pdf->SetFont('arial','B',10);
$pdf->Cell(10,10,'S/N',1,0,'c');
$pdf->Cell(30,10,'Full name',1,0,'c');
$pdf->Cell(30,10,'Location',1,0,'c');
$pdf->Cell(45,10,'Email',1,0,'c');
$pdf->Cell(20,10,'Driver age',1,0,'c');
$pdf->Cell(25,10,'Phone no',1,0,'c');
$pdf->Cell(30,10,'Vehicle',1,1,'c');




        $kk="SELECT * FROM shipping";
        $aa=mysqli_query($conn,$kk);
       // $rw=mysqli_fetch_array($aa);
        $n=1;

       while ($rw=mysqli_fetch_array($aa)) {
            $k=$rw['id'];
            $fname=$rw['fname'];
            $loc=$rw['loc'];
            $mail=$rw['mail'];
            $d_age=$rw['d_age'];
            $tel=$rw['tel'];
            $vehc=$rw['vehc'];
          
$pdf->Cell(10,10,$n,1,0,'c');
$pdf->Cell(30,10,$fname,1,0,'c');
$pdf->Cell(30,10,$loc,1,0,'c');
$pdf->Cell(45,10,$mail,1,0,'c');
$pdf->Cell(20,10,$d_age,1,0,'c');
$pdf->Cell(25,10,$tel,1,0,'c');
$pdf->Cell(30,10,$vehc,1,1,'c');

			    
			$n++;
    }
$pdf->Output();
?>