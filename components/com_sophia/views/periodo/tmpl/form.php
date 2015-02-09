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
echo SophiaHelperToolbar::IconButtonHome( 'utp', 'icons/back.png', JText::_( 'Atras' ),JText::_( 'Atras' ),JText::_( 'Atras' ) );
?>
</table>
<form action="index.php" method="post" name="adminForm" id="adminForm">
	<fieldset class="adminform">
		<table class="admintable">
			<tbody>
				<tr>
					<td width="20%" class="key"><label for="name"> <?php echo JText::_( 'NOMBRE' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text" name="nombre"
						id="nombre" size="30" value="<?php echo $this->periodo->nombre;?>" />
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label for="name"> <?php echo JText::_( 'PERIODO' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text" name="periodo"
						id="periodo" size="30"
						value="<?php echo $this->periodo->periodo;?>" />
					</td>
				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'INICIO' ); ?>:
					</label>
					</td>
					<td><?php
					$ver = new JVersion();
					if ($ver->RELEASE >= '1.6') {
						jimport( 'joomla.html.html' );
						echo JHtml::_('calendar',  $this->periodo->inicio, 'inicio', 'inicio', "%Y-%m-%d", '');
					} else { ?> <input class="inputbox" size="12" name="inicio"
						id="inicio" value="<?php echo $this->periodo->inicio; ?>" /> <input
						type="reset" class="button" value="..."
						onclick="return showCalendar('inicio','%Y-%m-%d');" /> <?php } ?>
					</td>

				</tr>
				<tr>
					<td width="20%" class="key"><label> <?php echo JText::_( 'TERMINO' ); ?>:
					</label>
					</td>
					<td><?php
					$ver = new JVersion();
					if ($ver->RELEASE >= '1.6') {
						jimport( 'joomla.html.html' );
						echo JHtml::_('calendar',  $this->periodo->termino, 'termino', 'termino', "%Y-%m-%d", '');
					} else { ?> <input class="inputbox" size="12" name="termino"
						id="inicio" value="<?php echo $this->periodo->termino; ?>" /> <input
						type="reset" class="button" value="..."
						onclick="return showCalendar('termino','%Y-%m-%d');" /> <?php } ?>
					</td>

				</tr>
				<tr>
					<td width="20%" class="key"><label for="name"> <?php echo JText::_( 'ANNO' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text" name="anno"
						id="anno" size="30" value="<?php echo $this->periodo->anno;?>" />
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
	<input type="submit" name="save" value="Guardar" /> <input
		type="hidden" name="cid[]" value="<?php echo $this->periodo->id; ?>" />
	<input type="hidden" name="option" value="com_sophia" /> <input
		type="hidden" name="task" value="save" /> <input type="hidden"
		name="controller" value="periodo" />
</form>
