<?php
/*<h1> <?php  echo $this->mensaje ?> </h1>*/

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

JHTML::_('behavior.mootools');
JHTML::_('behavior.tooltip');
// Create shortcuts to some parameters.
$params		= $this->params;

$pane1 =& JPane::getInstance('tabs');

$k = 0;
for ($i=0, $n=count( $this->alumno ); $i < $n; $i++)
{
	$row = &$this->alumno[$i];

	$checked 	= JHTML::_('grid.id',  $i, $row->id );
	$published 	= JHTML::_('grid.published', $row, $i );

	?>

<table border="0">
	<thead>
		<tr>
			<th style="width: 290px; font-size: 18px" nowrap="nowrap"
				align="center"><?php echo $row->nombre; ?> <br> <span
				style="font-size: 12px">(<?php echo $row->curso; ?>)</span>
				&nbsp;&nbsp;&nbsp;</th>
			<th align="left"><?php echo JText::_( 'GLOSA_ALUMNO' ); ?></th>
		</tr>
	</thead>
</table>
	<?php
}
echo $pane1->startPane( 'pane1' );
echo $pane1->startPanel( JTEXT::_('Notas'), 'nom_cp_notas' );
echo '<div id="cpanel">';

?>
<table class="adminlist" border="0">
	<thead>
		<tr>
			<th width="15%"><?php echo JText::_( 'ASIGNATURA' ); ?>
			</th>
			<th width="20" scope="col"><?php echo JText::_( 'NOTAS' ); ?>
			</th>
			<th width="10%"><?php echo JText::_( 'P.P.1' ); ?>
			</th>
			<th width="20" scope="col"><?php echo JText::_( 'NOTAS' ); ?>
			</th>
			<th width="10%"><?php echo JText::_( 'P.P.2' ); ?>
			</th>
			<th width="10%"><?php echo JText::_( 'P.F' ); ?>
			</th>

		</tr>
	</thead>

	<?php
	$k = 0;
	$prom=0;
	$calculo=0;
	for ($i=0, $n=count( $this->asignaturas ); $i < $n; $i++)
	{
		$row = &$this->asignaturas[$i];
		?>
	<tr class="<?php echo "row$k"; ?>">
		<td align="left"><?php echo $row->asignatura; ?>
		</td>
		<td align="left">
			<table class="adminlist" border="0">
				<tbody>
				<?php
				// cargamos las notas correspondientes a la asignatura y perido
				$this->notas = nomHelperLoad::getNotas($row->materia_id,1,$row->matricula_id);
				$this->p2 =0;
				$this->sumdiv=0;
				$this->ctareg=$con=count( $this->notas );
				$this->ctaSemestre=1;
				for ($x=0, $con=count( $this->notas ); $x < $con; $x++)
				{
					$rownotas = &$this->notas[$x];
					$this->p2 = $this->p2 + $rownotas->nota;
					$this->sumdiv = $this->sumdiv +($x * $rownotas->coeficiente);
					?>
					<td><span class="hasTip"
						title="<?php echo JText::_( 'EVALUACION' ); ;?>::<?php echo $rownotas->titulo ;?>">
						<?php
						if($rownotas->coeficiente>1 ){
							echo $rownotas->nota.'<span class="redText">x2</span>';
						}else
						{
							echo $rownotas->nota;
						}




						?> </span>
					</td>

					<?php
				}

				if (($this->ctareg)> 0 ){
					$this->pf1= round(($this->p2/$this->sumdiv),2);
					$this->ctaSemestre=1;
				}else{
					$this->pf1= round(($this->p2/1),2);
				}
				?>
				</tbody>
			</table>
		</td>
		<td align="center"><?php echo $this->pf1;?>
		</td>
		<td align="left">
			<table class="adminlist" border="0">
				<tbody>
				<?php
				// cargamos las notas correspondientes a la asignatura y perido
				$this->notas = nomHelperLoad::getNotas($row->materia_id,2,$row->matricula_id);
				$this->p2 =0;
				$this->sumdiv=0;
				$this->ctareg=$con=count( $this->notas );

				for ($x=0, $con=count( $this->notas ); $x < $con; $x++)
				{
					$rownotas = &$this->notas[$x];
					$this->p2 = $this->p2 + $rownotas->nota;
					$this->sumdiv = $this->sumdiv  + ($x * $rownotas->coeficiente);
					?>
					<td><span class="hasTip"
						title="<?php echo JText::_( 'EVALUACION' ); ;?>::<?php echo $rownotas->titulo ;?>">
						<?php echo $rownotas->nota.'x'.$rownotas->coeficiente;?> </span>
					</td>
					<?php
				}

				if (($this->ctareg)> 0 ){
					$this->pf2= round(($this->p2/$this->sumdiv),2);
					$this->ctaSemestre=2;
				}else{
					$this->pf2= round(($this->p2/1),2);
				}

				?>
				</tbody>
			</table>
		</td>
		<td align="center"><?php echo $this->pf2;?>
		</td>
		<td align="center"><?php //promedio final anual
				$this->pfa= round((($this->pf1+$this->pf2)/$this->ctaSemestre),2);
				echo $this->pfa;?>
		</td>
	</tr>
	<?php
	$k = 1 - $k;
	$calculo = $calculo + $this->pfa;
	$prom++;
	}
	?>
</table>
<br>
<br>
<table class="adminlist" border="0">
	<thead>
		<tr>
			<th width="70%" align="left"><?php echo JText::_( 'PROMEDIO_GENERAL_DEL_CURSO' ); ?>:
			</th>
			<th width="10%"><?php @$Resultado = ($calculo / $prom ); ?> <?php echo round($Resultado,2); ?>
			</th>
			<th width="10%"></th>
			<th width="10%"></th>
		</tr>
	</thead>
</table>
<br>
<br>
<table border="0">
	<thead>
		<tr>
			<th width="90%"><?php echo JText::_( 'DEFINICION_SIGLAS' ); ?>
			</th>
		</tr>
	</thead>
</table>


<table class="adminlist">
	<tbody>
		<tr>
			<td width="20%" class="key"></td>
			<td width="80%"></td>
		</tr>
		<?php
		echo '</div>';

		?>
	</tbody>
</table>
		<?php
		echo $pane1->endPanel();
		echo $pane1->startPanel( JTEXT::_('Anotaciones'), 'nom_cp_anotaciones' );
		echo '<div id="cpanel">';
		//echo SophiaHelperToolbar::IconButtonPdf( 'pdf', 'icons/pdf_32x32.png', JText::_( 'Pdf' ),JText::_( 'Pdf' ));
		//echo SophiaHelperToolbar::IconButtonPdf( 'print', 'icons/printer_32x32.png', JText::_( 'Pdf' ),JText::_( 'Pdf' ));

		?>
<table class="adminlist" border="0">
	<thead>
		<tr>
			<th width="15%"><?php echo JHTML::_('grid.sort',  'fecha', 'Fecha', @$lists['order_Dir'], @$lists['order'] ); ?>
			</th>
			<th width="50" scope="col"><?php echo JText::_( ' A N O T A C I O N E S' ); ?>
			</th>
			<th width="30%"><?php echo JText::_( 'PERIODO' ); ?>
			</th>
		</tr>
	</thead>

	<?php
	$k = 0;
	for ($i=0, $n=count( $this->anotaciones ); $i < $n; $i++)
	{
		$row = &$this->anotaciones[$i];
		?>
	<tr class="<?php echo "row$k"; ?>">
		<td align="left"><?php echo $row->fecha; ?>
		</td>
		<td align="left"><?php echo $row->anotacion?>
		</td>
		<td align="center"><?php echo $row->periodo;?>
		</td>
	</tr>
	<?php
	$k = 1 - $k;
	}
	?>
</table>

	<?php
	echo '</div>';
	// nuevo panel
	echo $pane1->endPanel();
	echo $pane1->startPanel( JTEXT::_('Inacistencias / Atrasos'), 'nom_cp_inasistencias' );
	echo '<div id="cpanel">';
	$imgY = 'components/com_sophia/images/icons/circulo_amarillo.jpg';
	$imgX = 'components/com_sophia/images/icons/circulo_naranjo.jpg';
	?>
<table class="adminlist" border="0">
	<thead>
		<tr>
			<th width="15%"><?php echo JText::_( 'FECHA' ); ?>
			</th>
			<th width="50" scope="col"><?php echo JText::_( 'ATRASO_INASIST4ENCIA' ); ?>
			</th>
			<th width="50" scope="col"><?php echo JText::_( 'PERIODO' ); ?>
			</th>
		</tr>
	</thead>

	<?php
	$k = 0;
	$inasistencia=0;
	$atraso =0;
	for ($i=0, $n=count( $this->inasistencias ); $i < $n; $i++)
	{
		$row = &$this->inasistencias[$i];
		?>
	<tr class="<?php echo "row$k"; ?>">
		<td align="left"><?php echo $row->fecha; ?>
		</td>
		<td align="left"><?php	if ($row->tipo=='Inasistencia'){
			$inasistencia++;
			?> <img src="<?php echo $imgX; ?>" border="0" alt=""> <?php }else {
				$atraso++;
				?> <img src="<?php echo $imgY; ?>" border="0" alt=""> <?php }
				?>
		</td>
		<td align="center"><?php echo $row->periodo;?>
		</td>
	</tr>
	<?php
	$k = 1 - $k;
	}
	?>
</table>
<table class="adminlist">
	<tbody>
		<tr>

		<?php	/*<td width="80%">
		<?php echo $this->Example;?>
		</td>
		*/?>
			<td width="80%"><?php //echo $this->CalendarioInasistencias;?>
			</td>
			<td>
		
		
		<tr>
			<table class="adminlist" border="0">
				<thead>
					<tr>
						<th width="33%" align="left"><?php echo JText::_( 'TOTAL_INASISTENCIAS' ); ?>
							<img src="<?php echo $imgX; ?>" border="0" alt=""> <?php echo $inasistencia; ?>
						</th>
						<th width="33%" align="left"><?php echo JText::_( 'TOTAL_ATRASOS' ); ?>
							<img src="<?php echo $imgY; ?>" border="0" alt=""> <?php echo $atraso; ?>
						</th>
						<th width="33%" align="left"><?php echo JText::_( 'PORCENTAJE_ASISTENCIA' ); ?>
						<?php echo (1-($inasistencia / 200)) * 100 ; ?>%</th>
					</tr>
				</thead>
			</table>
		</tr>
		</td>
		</tr>
	</tbody>
</table>
						<?php
						echo '</div>';

						echo $pane1->endPanel();
						echo $pane1->startPanel( JTEXT::_('Cuotas'), 'nom_cp_cuotas' );
						echo '<div id="cpanel">';
						//echo SophiaHelperToolbar::IconButtonPdf( 'pdf', 'icons/pdf_32x32.png', JText::_( 'Pdf' ),JText::_( 'Pdf' ));
						//echo SophiaHelperToolbar::IconButtonPdf( 'print', 'icons/printer_32x32.png', JText::_( 'Pdf' ),JText::_( 'Pdf' ));

						?>
<table class="adminlist" border="0">
	<thead>
		<tr>
			<th width="15%"><?php echo JText::_( 'Nro' ); ?>
			</th>
			<th width="50" scope="col"><?php echo JText::_( ' C U O T A' ); ?>
			</th>
			<th width="30%"><?php echo JText::_( 'ANNO' ); ?>
			</th>
			<th width="30%"><?php echo JText::_( 'PENDIENTE_PAGADA' ); ?>
			</th>
		</tr>
	</thead>

	<?php
	$k = 0;
	for ($i=0, $n=count( $this->aranceles ); $i < $n; $i++)
	{
		$row = &$this->aranceles[$i];
		?>
	<tr class="<?php echo "row$k"; ?>">
		<td align="left"><?php echo $row->id; ?>
		</td>
		<td align="left"><?php echo $row->cuota?>
		</td>
		<td align="center"><?php echo $row->anno;?>
		</td>
		<td align="center"><?php echo $row->estado ? 'Pagado' : 'No Pagado';?>
		</td>
	</tr>
	<?php
	$k = 1 - $k;
	}
	?>
</table>

	<?php
	echo '</div>';
	// nuevo panel
	echo $pane1->endPanel();
	echo $pane1->endPane();
	?>
<div class="clr"></div>
<p>
<?php echo JHTML::_('credit.credit');?>
</p>
