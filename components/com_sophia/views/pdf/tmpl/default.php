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
$pdf=new PDF(); // vertical, milimetros y tama�o
$pdf->Open();
$pdf->AddPage(); // agregamos la pagina
$pdf->SetMargins(10,10,10); // definimos los margenes en este caso estan en milimetros
$pdf->Ln(10); // dejamos un peque�o espacio de 10 milimetros

$pdf->SetFont('Arial','B',10);
for ($i=0, $n=count( $this->colegio ); $i < $n; $i++)
{
	$row = &$this->colegio[$i];
	$director = $row->director;
	$pdf->Text(30,10,'Colegio :'.$row->establecimiento,0,'C', 0);
	$pdf->Text(30,14,'Direccion :'.$row->direccion,0,'C', 0);
	$pdf->Text(30,18,'Telefono :'.$row->telefono,0,'C', 0);
}
// listamos los datos con Cell
$pdf->SetFont('Arial','B',10);

for ($i=0, $n=count( $this->alumno ); $i < $n; $i++)
{
	$row = &$this->alumno[$i];
	$profesor =    $row->profesorjefe;
	$pdf->Cell(0,6,'Rut			: '.$row->rut ,0,1);
	$pdf->Cell(0,6,'Nombre		: '.$row->nombre,0,1);
	$pdf->Cell(0,6,'Curso	: '.$row->curso,0,1);
	$pdf->Ln(10);
}

// Para realizar esto utilizaremos la funcion Row()
// tipo y tama�o de letra
$pdf->SetFont('Arial','',8);

// Definimos el tama�o de las columnas, tomando en cuenta que las declaramos en milimetros, ya que nuestra hoja esta en milimetros.
$pdf->SetWidths(array(40, 50,12,50,12,12));

$pdf->Row(array('ASIGNATURAS', 'NOTAS', 'P.P.1','NOTAS','P.P.2','P.F.'));

$promedioFinal=0;
for ($i=0, $n=count( $this->asignaturas ); $i < $n; $i++)
{
	$row = &$this->asignaturas[$i];


	// semestre 1
	$this->s1notas = nomHelperLoad::getNotas($row->materia_id,1,$row->matricula_id);
	$s1p2 =0;
	$s1sumdiv=0;
	$textnotas1='';
	$ctasemestre =1;
	$ctareg1=count( $this->s1notas );
	for ($x=0, $con=count( $this->s1notas ); $x < $con; $x++)
	{
		$s1rownotas = &$this->s1notas[$x];
		$textnotas1 = $textnotas1.$s1rownotas->nota." | " ;
		$s1p2 = $s1p2 + $s1rownotas->nota;
		$s1sumdiv = $s1sumdiv + ($x * $s1rownotas->coeficiente);
		$ctasemestre =1;
	}

	if (($ctareg1)> 0 ){
		$pf1= round(($s1p2/$s1sumdiv),2);
	}else{
		$pf1= round(($s1p2/1),2);
	}

	// semestre 2
	$this->s2notas = nomHelperLoad::getNotas($row->materia_id,2,$row->matricula_id);
	$s2p2 =0;
	$s2sumdiv=0;
	$textnotas2='';
	$ctareg2=count( $this->s2notas );
	for ($x=0, $con=count( $this->s2notas ); $x < $con; $x++)
	{
		$s2rownotas = &$this->s2notas[$x];
		$textnotas2 = $textnotas2.$s2rownotas->nota." | " ;
		$s2p2 = $s2p2 + $s2rownotas->nota;
		$s2sumdiv = $s2sumdiv + ($x * $s2rownotas->coeficiente);
		$ctasemestre =2;
	}

	if (($ctareg2)> 0 ){
		$pf2= round(($s2p2/$s2sumdiv),2);
	}else
	{
		$pf2= round(($s2p2/1),2);
	}
	$pf= ($pf1+$pf2)/$ctasemestre;
	$promedioFinal=$promedioFinal + $pf;
	$pdf->SetFont('Arial','',8);
	$pdf->Row(array($row->asignatura, $textnotas1,$pf1,$textnotas2,$pf2,$pf));
}

$pff= round(($promedioFinal/$i),2);
//$pdf->FancyTable($header,$this->asignaturas);
$pdf->Ln(10);
$pdf->Cell(10,6 ,'PROMEDIO FINAL : '.$pff ,0,'',1);

$pdf->Ln(30);

$pdf->Image('media/com_sophia/images/firma.png',100);
$pdf->Cell(50,6 ,'Profesor Jefe: '.$profesor ,0,'',0);
$pdf->Cell(80,6 ,'Director: '.$director ,0,'',0);
$pdf->Ln(10);
//La ultima linea
ob_start();
$pdf->Output();
$output = ob_get_contents();
ob_end_clean();
echo $output;
exit;

?>