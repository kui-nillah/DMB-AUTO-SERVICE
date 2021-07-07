<?php
require('.../fpdf.php');

class myPDF extends FPDF
{
function Header()
{
	$this->SetFont('Arial','B',15);
	$this->Cell(80);
	$this->Cell(30,10,'registration',1,0,'C');
}
function Footer()
{
	$this->SetY(-15);
	$this->SetFont('Arial','I',8);
	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
function headerTable(){
	$this->SetFont('Times','',12);
	$this->Cell(40,10,'id',1,0);
    $this->Cell(40,10,'First Name',1,0,'c');
    $this->Cell(40,10,'Last Name',1,0,'c');
    $this->Cell(40,10,'Gender',1,0,'c');
    $this->Cell(40,10,'Email',1,0,'c');
    $this->Cell(40,10,'Password',1,0,'c');
    $this->Ln();


}
}
$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->headerTable();
for($i=1;$i<=40;$i++)
	$pdf->Cell(0,10,'Printing line number '.$i,0,1);
$pdf->Output();
?>
