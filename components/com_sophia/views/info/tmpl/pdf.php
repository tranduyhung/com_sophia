<?php
//----------------------------------------------------------------------
// Sophia
// Sophia by Alex Olave - http://www.alfazeta.cl
//----------------------------------------------------------------------

//----------------------------------------------------------------------
// Author: 	Alex Olave - http://www.alfazeta.cl
// Copyright: copyright (C) 2012 - Alex Olave.
// License: 	GNU/GPL, http://www.gnu.org/copyleft/gpl.html
// Pack: 	Sophia
//----------------------------------------------------------------------

//----------------------------------------------------------------------
// Sophia is free software. This version may have been modified pursuant
// to the GNU General Public License, and as distributed it includes or
// is derivative of works licensed under the GNU General Public License or
// other free or open source software licenses.
//----------------------------------------------------------------------
defined( '_JEXEC' ) or die( 'Restricted access' );
//require_once('fpdf.php');
require_once( 'components' . DS . 'com_sophia' . DS . 'helpers' . DS . 'pdf.helper.php');
// creamos el objeto FPDF
$pdf=new PDF('L','mm','A4'); // vertical, milimetros y tama�o
$pdf->Open();
$pdf->AddPage(); // agregamos la pagina
$pdf->SetMargins(20,20,20); // definimos los margenes en este caso estan en milimetros
$pdf->Ln(10); // dejamos un peque�o espacio de 10 milimetros

// listamos los datos con Cell
$pdf->SetFont('Arial','B',12);

for ($i=0, $n=count( $this->alumno ); $i < $n; $i++)
{
	$row = &$this->alumno[$i];
	$pdf->Cell(0,6,'Rut			: '.$row->rut ,0,1);
	$pdf->Cell(0,6,'Nombre		: '.$row->nombre,0,1);
	$pdf->Cell(0,6,'Domicilio: '.$row->direccion,0,1);
	$pdf->Ln(10);
}


// Para realizar esto utilizaremos la funcion Row()
// tipo y tama�o de letra
$pdf->SetFont('Arial','',10);

// Definimos el tama�o de las columnas, tomando en cuenta que las declaramos en milimetros, ya que nuestra hoja esta en milimetros.
$pdf->SetWidths(array(60, 120, 60));

//$pdf->Row(array('ASIGNATURA', 'NOTAS', 'PROMEDIO'));
//Column titles
$header=array('ASIGNATURAS', 'NOTAS', 'PROMEDIO');

//Data loading


$pdf->AddPage();

/*
 for ($i=0, $n=count( $this->asignaturas ); $i < $n; $i++)
 {
 $row = &$this->asignaturas[$i];

 $profesor =    $row->profesor;
 // los mostramos con la funci�n Row
 $pdf->Row(array($row->asignatura, str_replace(",","   |   ",$row->nota), round($row->promedio,2)));
 }
 */
$pdf->FancyTable($header,$this->asignaturas);

$pdf->Ln(40);

$pdf->Cell(0,6,'Profesor Jefe: '.$profesor.' 								Director :'.$profesor ,0,1);
//La ultima linea
ob_start();
$pdf->Output();
$output = ob_get_contents();
ob_end_clean();
echo $output;
exit;
?>