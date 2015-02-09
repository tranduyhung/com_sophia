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
					<td width="20%" class="key"><label for="name"> <?php echo JText::_( 'SIGNATURA' ); ?>:
					</label>
					</td>
					<td width="80%"><?php echo $this->libro->SIGNATURA;?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label for="name"> <?php echo JText::_( 'ISBN' ); ?>:
					</label>
					</td>
					<td width="80%"><?php echo $this->libro->ISBN;?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label for="name"> <?php echo JText::_( 'TITULO' ); ?>:
					</label>
					</td>
					<td width="80%"><?php echo $this->libro->TITULO;?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label for="name"> <?php echo JText::_( 'CIUDAD' ); ?>:
					</label>
					</td>
					<td width="80%"><?php echo $this->libro->CIUDAD;?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label for="name"> <?php echo JText::_( 'AUTOR' ); ?>:
					</label>
					</td>
					<td width="80%"><?php echo $this->libro->AUTOR;?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label for="name"> <?php echo JText::_( 'EDITORIAL' ); ?>:
					</label>
					</td>
					<td width="80%"><?php echo $this->libro->EDITORIAL;?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label for="name"> <?php echo JText::_( 'ANOPUB' ); ?>:
					</label>
					</td>
					<td width="80%"><?php echo $this->libro->ANOPUB;?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label for="name"> <?php echo JText::_( 'EJEMPLAR' ); ?>:
					</label>
					</td>
					<td width="80%"><?php echo $this->libro->EJEMPLAR;?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label for="name"> <?php echo JText::_( 'TIPOEJEMLAR' ); ?>:
					</label>
					</td>

					<td width="80%"><?php echo $this->libro->TIPOEJEMPLAR;?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label for="name"> <?php echo JText::_( 'UBICACION' ); ?>:
					</label>
					</td>
					<td width="80%"><?php echo $this->libro->UBICACION;?>
					</td>
				</tr>

			</tbody>
		</table>
	</fieldset>

	<div class="clr"></div>

	<input type="hidden" name="cid[]"
		value="<?php echo $this->libro->ISBN; ?>" /> <input type="hidden"
		name="option" value="com_sophia" /> <input type="hidden" name="task"
		value="save" /> <input type="hidden" name="controller" value="alumno" />
</form>

<div class="clr"></div>
