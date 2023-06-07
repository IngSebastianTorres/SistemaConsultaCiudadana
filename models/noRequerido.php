<?php
//  Importe librerias FPDF PARA GENERACION DE USUARIOS REQUERIDOS Y NO REQUERIDOS - INI
require 'fpdf/fpdf.php';

$conexion=mysqli_connect("localhost","root","snopdog","bd_registraduria") or die("No se puede entablar conexion con el servidor de la base de datos");

$sql = "SELECT IDENTIFICACION, NOMBRES, APELLIDOS FROM CIUDADANO, ESTADO_JUDICIAL WHERE 
ciudadano.cod_estado_judicial = estado_judicial.cod_estado_judicial AND ESTADO_JUDICIAL.cod_estado_judicial=2";

 $result = $conexion->query($sql);

$pdf = new FPDF();

$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->setFont('Arial', 'B', 16);
$pdf->Cell(60,6,'',0,1,'C');
$pdf->Cell(60,6,'',0,1,'C');
$pdf->Cell(60,6,'',0,1,'C');
$pdf->Image('../imagenes/registraduria.jpg',155,10,50,30);
$pdf->Cell(60,6,'',0,1,'C');
$pdf->Cell(60,6,'',0,1,'C');
$pdf->Cell(60,6,'',0,1,'C');
$pdf->Cell(60,6,'',0,1,'C');
$pdf->Cell(0, 10, 'Ciudadanos no requeridos por la justicia Colombiana', 0,1, 'C');
$pdf->Cell(60,6,'',0,1,'C');
$pdf->Cell(60,6,'',0,1,'C');


$pdf->SetFillColor(232,232,232);
$pdf->setFont('Arial', 'B', 12);
$pdf->Cell(60,6,'Identificacion',1,0,'C',1);
$pdf->Cell(65,6,'Nombres',1,0,'C',1);
$pdf->Cell(65,6,'Apellidos',1,1,'C',1);


$pdf->SetFont('Arial','',11);

while($row = $result->fetch_assoc()) 
{
  $pdf->Cell(60,6,$row['IDENTIFICACION'],1,0,'C');
  $pdf->Cell(65,6,$row['NOMBRES'],1,0,'C');
  $pdf->Cell(65,6,$row['APELLIDOS'],1,1,'C');
}

$pdf->Output();
$conexion->close();
//  Importe librerias FPDF PARA GENERACION DE USUARIOS REQUERIDOS Y NO REQUERIDOS - FIN
?>

