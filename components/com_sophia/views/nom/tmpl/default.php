<?php
//----------------------------------------------------------------------
// Sophia
// Sophia by Alex Olave - http://www.alfazeta.cl
//----------------------------------------------------------------------

//----------------------------------------------------------------------
// Author: 	Alex Olave - http://www.alfazeta.cl
// Copyright: copyright (C) 2012 - Alex olave.
// License: 	GNU/GPL, http://www.gnu.org/copyleft/gpl.html
// Pack: 	Sophia
// File: 	default.php
//----------------------------------------------------------------------

//----------------------------------------------------------------------
// Sophia is free software. This version may have been modified pursuant
// to the GNU General Public License, and as distributed it includes or
// is derivative of works licensed under the GNU General Public License or
// other free or open source software licenses.
//----------------------------------------------------------------------


defined( '_JEXEC' ) or die( 'Restricted access' ); ?>

<?php
JHTML::_('behavior.mootools');
$pane1 =& JPane::getInstance('sliders');
?>
<table class="adminform">
<?php
?>
	<tr>
		<td width="65%" valign="top"><?php
		echo '<div id="cpanel">';
		echo $this->loadTemplate('menu');
		echo '</div>';


		?>
		</td>
	</tr>
	<tr>
		<td><?php echo "<br><p>". JText::_( 'GUARDAR' )."</p>";	?>
		</td>
	</tr>
	<?php
	// echo $pane1->endPanel();
	// echo $pane1->endPane();
	?>
</table>
<div class="clr"></div>
<p>
<?php echo JHTML::_('credit.credit');?>
</p>

