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
					<td width="20%" class="key"><label for="name"> <?php echo JText::_( 'Region' ); ?>:
					</label>
					</td>
					<td width="80%"><input class="inputbox" type="text" name="region"
						id="region" size="30" value="<?php echo $this->region->region;?>" />
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
		value="<?php echo $this->region->id; ?>" /> <input type="hidden"
		name="option" value="com_sophia" /> <input type="hidden" name="task"
		value="" /> <input type="hidden" name="controller" value="region" />
</form>
