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
	<tr>
		<td width="65%" valign="top"><?php
		echo $pane1->startPane( 'pane1' );
		echo $pane1->startPanel( JTEXT::_('Sophia'), 'nom_cp_menu' );
		echo '<div id="cpanel">';
		echo $this->loadTemplate('sophia');
		echo '</div>';
		echo $pane1->endPanel();
		echo $pane1->startPanel( JTEXT::_('Mantenedores'), 'nom_cp_menu' );
		echo '<div id="cpanel">';
		echo $this->loadTemplate('mantenedor');
		echo '</div>';
		echo $pane1->endPanel();
		echo $pane1->startPanel( JTEXT::_('Contabilidad'), 'nom_cp_conta' );
		echo '<div id="cpanel">';
		echo $this->loadTemplate('contabilidad');
		echo '</div>';
		echo $pane1->endPanel();
		?>
		</td>

		<td width="35%" valign="top">
			<div class="nom_cp_info">
				<div style="text-align: center; border-bottom: 1px solid #115fb2;">
				<?php
				echo JHTML::_('image.site',  'alfazeta.png', '/components/com_sophia/assets/images/', NULL, NULL, 'Sophia' )
				?>
				</div>
				<h3>
				<?php echo JText::_('Copyright');?>
				</h3>
				<h3>
				<?php echo JText::_('Sophia Team');?>
				</h3>
				<div class="nom_cp_info_box">
					<p>
					<?php echo JText::_('WebSite');?>
						: <a href="http://www.alfazeta.cl">Sophia</a><br />
					
					
					<p>
					<?php echo JText::_('Desarrollador');?>
						: <a href="http://www.alfazeta.cl">Alex Olave</a><br />
					</p>
				</div>
		
		</td>
	</tr>
</table>
<div class="clr"></div>
<p>
<?php echo JHTML::_('credit.credit');?>
</p>

