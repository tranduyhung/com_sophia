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
					<td width="20%" class="key"><label for="name"> <?php echo JText::_( 'NOMBRE' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text" name="nombre"
						id="nombre" size="30"
						value="<?php echo $this->profesor->nombre;?>" />
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
					jimport( 'joomla.html.html' );
					echo JHtml::_('calendar',  $this->profesor->nacimiento, 'nacimiento', 'nacimiento', "%Y-%m-%d", '');
					?>
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
						value="<?php echo $this->profesor->telefono;?>" />
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'RUT' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text" name="rut"
						id="rut" size="50" value="<?php echo $this->profesor->rut;?>" />
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'FOTO' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text" name="foto"
						id="foto" size="50" value="<?php echo $this->profesor->foto;?>" />
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'DIRECCION' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text"
						name="direccion" id="direccion" size="50"
						value="<?php echo $this->profesor->direccion;?>" />
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'CELULAR' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text" name="celular"
						id="celular" size="50"
						value="<?php echo $this->profesor->celular;?>" />
					</td>
				</tr>


				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'ISAPRE' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text" name="isapre"
						id="isapre" size="50"
						value="<?php echo $this->profesor->isapre;?>" />
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'EMAIL' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text" name="email"
						id="email" size="50" value="<?php echo $this->profesor->email;?>" />
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'SITIO_WEB' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text" name="sitioweb"
						id="sitioweb" size="50"
						value="<?php echo $this->profesor->sitioweb;?>" />
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'ESPECIALIDAD' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text"
						name="especialidad" id="especialidad" size="50"
						value="<?php echo $this->profesor->especialidad;?>" />
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

	<input type="hidden" name="cid[]"
		value="<?php echo $this->profesor->id; ?>" /> <input type="hidden"
		name="option" value="com_sophia" /> <input type="hidden" name="task"
		value="" /> <input type="hidden" name="controller" value="profesor" />
</form>
