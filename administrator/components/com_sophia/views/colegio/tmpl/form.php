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
		<table class="admintable">
			<tbody>
				<tr>
					<td width="20%" class="key"><label for="name"> <?php echo JText::_( 'Nombre Establecimiento' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text" name="colegio"
						id="colegio" size="30"
						value="<?php echo $this->colegio->establecimiento;?>" />
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label for="name"> <?php echo JText::_( 'Direccion' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text"
						name="direccion" id="direccion" size="30"
						value="<?php echo $this->colegio->direccion;?>" />
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label for="name"> <?php echo JText::_( 'Telefono' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text" name="telefono"
						id="telefono" size="30"
						value="<?php echo $this->colegio->telefono;?>" />
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label for="name"> <?php echo JText::_( 'Director' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text" name="director"
						id="director" size="30"
						value="<?php echo $this->colegio->director;?>" />
					</td>
				</tr>
			</tbody>
		</table>
	</fieldset>

	<input type="hidden" name="cid[]"
		value="<?php echo $this->colegio->id; ?>" /> <input type="hidden"
		name="option" value="com_sophia" /> <input type="hidden" name="task"
		value="" /> <input type="hidden" name="controller" value="colegio" />
</form>
