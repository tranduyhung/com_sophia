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
echo SophiaHelperToolbar::IconButtonHome( 'utp', 'icons/back.png', JText::_( 'ATRAS' ),JText::_( 'ATRAS' ),JText::_( 'ATRAS' ) );
?>
</table>
<form action="index.php" method="post" name="adminForm" id="adminForm">
	<fieldset class="adminform">
		<table class="admintable">
			<tbody>
				<tr>
					<td width="20%" class="key"><label for="name"> <?php echo JText::_( 'NOMBRE_ALUMNO' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text" name="nombre"
						id="nombre" size="30" value="<?php echo $this->alumno->nombre;?>" />
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'SEXO' ); ?>:
					</label>
					</td>
					<td width="80%"><?php echo $this->lists['sexo']; ?>
					</td>
				</tr>

				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'NACIMIENTO' ); ?>:
					</label>
					</td>
					<td><?php
					$ver = new JVersion();
					if ($ver->RELEASE >= '1.6') {
						jimport( 'joomla.html.html' );
						echo JHtml::_('calendar',  $this->alumno->nacimiento, 'nacimiento', 'nacimiento', "%d-%m-%Y", '');
					} else { ?> <input class="inputbox" size="12" name="nacimiento"
						id="nacimiento" value="<?php echo $this->alumno->nacimiento; ?>" />
						<input type="reset" class="button" value="..."
						onclick="return showCalendar('nacimiento','%d-%m-%Y');" /> <?php } ?>
					</td>

				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'REGION' ); ?>:
					</label>
					</td>
					<td width="80%"><?php echo $this->lists['region']; ?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'CIUDAD' ); ?>:
					</label>
					</td>
					<td width="80%"><?php echo $this->lists['ciudad']; ?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'COMUNA' ); ?>:
					</label>
					</td>
					<td width="80%"><?php echo $this->lists['comuna']; ?>
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'TELEFONO' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text" name="telefono"
						id="telefono" size="50"
						value="<?php echo $this->alumno->telefono;?>" />
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'RUT' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text" name="rut"
						id="rut" size="50" value="<?php echo $this->alumno->rut;?>" />
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'FOTO' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text" name="foto"
						id="foto" size="50" value="<?php echo $this->alumno->foto;?>" />
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'PADRE' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text" name="padre"
						id="padre" size="50" value="<?php echo $this->alumno->padre;?>" />
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'CEL_PADRE' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text"
						name="cel_padre" id="cel_padre" size="50"
						value="<?php echo $this->alumno->cel_padre;?>" />
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'EMAIL_PADRE' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text"
						name="email_padre" id="email_padre" size="50"
						value="<?php echo $this->alumno->email_padre;?>" />
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'MADRE' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text" name="madre"
						id="madre" size="50" value="<?php echo $this->alumno->madre;?>" />
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'CEL_MADRE' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text"
						name="cel_madre" id="cel_madre" size="50"
						value="<?php echo $this->alumno->cel_madre;?>" />
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'EMAIL_MADRE' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text"
						name="email_madre" id="email_madre" size="50"
						value="<?php echo $this->alumno->email_madre;?>" />
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'DIRECCION' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text"
						name="direccion" id="direccion" size="50"
						value="<?php echo $this->alumno->direccion;?>" />
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'ISAPRE' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text" name="isapre"
						id="isapre" size="50" value="<?php echo $this->alumno->isapre;?>" />
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'EMAIL_ALUMNO' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text"
						name="email_alumno" id="email_alumno" size="50"
						value="<?php echo $this->alumno->email_alumno;?>" />
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'COMENTARIO' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text"
						name="comentario" id="comentario" size="50"
						value="<?php echo $this->alumno->comentario;?>" />
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'USUARIO_ASOCIADO' ); ?>:
					</label>
					</td>
					<td width="80%"><?php echo $this->lists['user']; ?>
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

	<div class="clr"></div>

	<input type="submit" name="save"
		value="<?php echo JText::_( 'GUARDAR' ); ?>" /> <input type="hidden"
		name="cid[]" value="<?php echo $this->alumno->id; ?>" /> <input
		type="hidden" name="option" value="com_sophia" /> <input type="hidden"
		name="task" value="save" /> <input type="hidden" name="controller"
		value="alumno" />
</form>

<div class="clr"></div>
