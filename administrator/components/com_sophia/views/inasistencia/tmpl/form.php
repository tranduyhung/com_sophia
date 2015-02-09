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
<form action="index.php" method="post" name="adminForm" id="adminForm">
	<fieldset class="adminform">
		<legend>
		<?php echo JText::_( 'DETALLES' ); ?>
		</legend>
		<table class="admintable">
			<tbody>
			<?php /*  <tr>
			<td width="20%" class="key">
			<label>
			<?php echo JText::_( 'Curso' ); ?>:
			</label>
			</td>
			<td width="80%">
			<?php echo $this->lists['curso']; ?>
			</td>
			</tr>
			*/?>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'Alumno' ); ?>:
					</label>
					</td>
					<td width="80%"><?php echo $this->lists['alumno']; ?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'Semestre' ); ?>:
					</label>
					</td>
					<td width="80%"><?php echo $this->lists['periodo']; ?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'Fecha' ); ?>:
					</label>
					</td>
					<td><?php
					$ver = new JVersion();
					if ($ver->RELEASE >= '1.6') {
						jimport( 'joomla.html.html' );
						echo JHtml::_('calendar',  $this->inasistencia->fecha, 'fecha', 'fecha', "%Y-%m-%d", '');
					} else { ?> <input class="inputbox" size="12" name="fecha"
						id="fecha" value="<?php echo $this->inasistencia->fecha; ?>" /> <input
						type="reset" class="button" value="..."
						onclick="return showCalendar('fecha','%Y-%m-%d');" /> <?php } ?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'Atraso/Inasistencia' ); ?>:
					</label>
					</td>
					<td width="80%"><?php echo $this->lists['tipo']; ?>
					</td>
				</tr>
				<tr>
					<td class="key"><?php echo JText::_( 'PUBLICAR' ); ?>:</td>
					<td><?php echo $this->lists['published']; ?>
					</td>
				</tr>
			</tbody>
		</table>
	</fieldset>

	<input type="hidden" name="cid[]"
		value="<?php echo $this->inasistencia->id; ?>" /> <input type="hidden"
		name="option" value="com_sophia" /> <input type="hidden" name="task"
		value="" /> <input type="hidden" name="controller"
		value="inasistencia" />
</form>
