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

<form action="index.php" method="post" name="adminForm">
	<table class="adminform">
		<tr>
			<td width="65%" valign="top"><?php
			//echo $pane1->startPane( 'pane1' );
			//echo $pane1->startPanel( JTEXT::_('Sophia Menu'), 'nom_cp_menu' );
			echo '<div id="cpanel">';
			$link = 'index.php?option=com_sophia&view=alumnos';
			echo nomHelperCP::quickIconButton( $link, 'apps/alumnos_48x48.png', JText::_( 'Alumnos' ) );
			$link = 'index.php?option=com_sophia&view=profesores';
			echo nomHelperCP::quickIconButton( $link, 'apps/funcionarios_48x48.png', JText::_( 'Profesores' ) );
			$link = 'index.php?option=com_sophia&view=cursos';
			echo nomHelperCP::quickIconButton( $link, 'apps/cursos_48x48.png', JText::_( 'Cursos' ) );
			$link = 'index.php?option=com_sophia&view=asignaturas';
			echo nomHelperCP::quickIconButton( $link, 'apps/asignatura_48x48.png', JText::_( 'Asignaturas' ) );
			$link = 'index.php?option=com_sophia&view=evaluaciones';
			echo nomHelperCP::quickIconButton( $link, 'apps/evaluacion_48x48.png', JText::_( 'Evaluaciones' ) );
			$link = 'index.php?option=com_sophia&view=notas';
			echo nomHelperCP::quickIconButton( $link, 'apps/notas_48x48.png', JText::_( 'Notas' ) );

			//echo $pane1->endPanel();
			// echo $pane1->endPane();
			?></td>

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

	<input type="hidden" name="option" value="com_sophia" /> <input
		type="hidden" name="view" value="nom" /> <input type="hidden"
		name="<?php echo JUtility::getToken(); ?>" value="1" />
</form>
