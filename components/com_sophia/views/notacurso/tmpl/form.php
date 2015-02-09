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

JHTML::_('behavior.tooltip');
JHTML::_('behavior.calendar');
?>
<table>
<?php
//echo $this->getToolbar();
echo SophiaHelperToolbar::IconButtonHome( 'nom', 'icons/back.png', JText::_( 'Atras' ),JText::_( 'Atras' ),JText::_( 'Atras' ) );
?>
</table>
<form action="index.php" method="post" name="adminForm" id="adminForm">
	<fieldset class="adminform">

		<div id="tablecell">
			<table class="adminlist">
				<thead>
					<tr>
						<th width="1%"><?php echo JText::_( 'NUM' ); ?>
						</th>
						<th width="5%"><input type="checkbox" name="toggle" value=""
							onclick="checkAll(<?php echo count( $this->alumnos ); ?>);" />
						</th>
						<th width="20%" class="title"><?php echo JText::_( 'EVALUACION' ); ?>
						</th>
						<th width="50%" class="title"><?php echo JText::_( 'ALUMNO' ); ?>
						</th>
						<th width="10%" class="title"><?php echo JText::_( 'NOTA' ); ?>
						</th>

					</tr>
				</thead>

				<tbody>
				<?php
				$k = 0;
				for ($i=0, $n=count( $this->alumnos ); $i < $n; $i++)
				{
					$row = &$this->alumnos[$i];
					?>
					<tr class="<?php echo "row$k"; ?>">
						<td width="5%"><?php echo $i; ?>
						</td>
						<td align="center"><input type="checkbox" id="cb<?php echo $i;?>"
							name="alumno[]" value="<?php echo $row->matricula_id; ?>"
							onclick="isChecked(this.checked);" />
						</td>
						<td align="left"><?php echo $this->evaluacion->titulo; ?>
						</td>
						<td align="left"><?php echo $row->nombre; ?>
						</td>
						<td align="center"><input class="inputbox" type="text"
							name="nota[]" id="nota<?php echo $i;?>" size="5" value="0" />
						</td>

					</tr>
					<?php
					$k = 1 - $k;

				}
					
				?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="13"></td>
					</tr>
				</tfoot>
			</table>
		</div>
	</fieldset>

	<input type="submit" name="save"
		value="<?php echo JText::_( 'GUARDAR' ); ?>" /> <input type="hidden"
		name="curso_id" value="<?php echo $this->alumnos->curso_id; ?>" /> <input
		type="hidden" name="evaluacion_id"
		value="<?php echo $this->evaluacion->id; ?>" /> <input type="hidden"
		name="option" value="com_sophia" /> <input type="hidden"
		name="boxchecked" value="0" /> <input type="hidden" name="task"
		value="save" /> <input type="hidden" name="controller"
		value="notacurso" />
</form>
