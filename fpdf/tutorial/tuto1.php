<?php
require('../fpdf.php');
$y=10;
$x=10;
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFillColor(204,204,204);
$pdf->SetFont('Arial','B',16);
$pdf->SetY($y);
$pdf->SetX($x);
$pdf->MultiCell(40,10,'Username',1,1);
$x=$x+40;
$pdf->SetY($y);
$pdf->SetX($x);
$pdf->Cell(40,10,'Email',1,1);
$x=10;
$y=$y+10;
$pdf->SetFont('Arial','',12);
$pdf->SetY($y);
$pdf->SetX($x);
$pdf->Cell(40,10,'Hello Nigga',1);
$x=$x+40;
$pdf->SetY($y);
$pdf->SetX($x);
$pdf->Cell(40,10,'Ben Ben',1);
$pdf->Output();
?>
