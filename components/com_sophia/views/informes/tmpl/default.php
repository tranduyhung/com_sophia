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
?>
<table>
<?php
echo SophiaHelperToolbar::IconButtonHome( 'utp', 'icons/back.png', JText::_( 'Atras' ),JText::_( 'Atras' ),JText::_( 'Atras' ) );
?>
</table>
<form action="index.php" method="post" name="adminForm">
	<div id="tablecell">
		<table class="adminlist">
		<?php
		$k = 0;
		$contador =0;
		for ($i=0, $n=count( $this->cursos ); $i < $n; $i++){
		 $row = &$this->cursos[$i];
		 $cur = $row->id;

		 $this->alumnos = nomHelperLoad::getAlumnoInfome($row->id);


		 ?>
			<thead>
				<tr>
					<th width="1%"><?php echo JText::_( 'NUM' ); ?></th>
					<th width="10%" class="title"><?php echo JText::_( 'CURSO' ); ?>
					</th>
					<th width="80%" align="center"><?php echo JText::_( 'ALUMNOS' ); ?>
					</th>
				</tr>
			</thead>
			<tbody>
				<tr class="<?php echo "row$k"; ?>">
					<td width="1%"><?php echo $row->id; ?></td>
					<td width="10%"><?php echo $row->curso; ?></td>
					<td width="80%" align="center">
						<table class="adminlist">
							<thead>
								<tr>
									<th width="10"><?php echo JText::_( 'Matricula' ); ?></th>
									<th width="30%" class="title"><?php echo JText::_( 'ALUMNO' ); ?>
									</th>
									<th width="10%" align="center"><?php echo JText::_( 'INFORME' ); ?>
									</th>

								</tr>
							</thead>
							<tbody>
							<?php
							for ($al=0, $n=count( $this->alumnos ); $al < $n; $al++){
								$rows = &$this->alumnos[$al];
									
		 				 $link		= JRoute::_( 'index.php?option=com_sophia&view=pdf&cid[]='.$rows->matricula_id);
		 				 	
		 				 	
		 				 ?>
								<tr>
									<td width="5%"><?php echo $rows->matricula; ?></td>
									<td width="30%"><?php echo $rows->nombre; ?></td>
									<td width="10%"><a href="<?php echo $link; ?>"><?php echo JText::_( 'IMP_PDF' ); ?>
									</a></td>
								</tr>
								<?php }
								?>
							</tbody>
						</table>
					</td>
				</tr>
				<?php

				$k = 1 - $k;
		}
		?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="13"></td>
				</tr>
			</tfoot>
		</table>

	</div>

	<input type="hidden" name="option" value="com_sophia" /> <input
		type="hidden" name="task" value="" /> <input type="hidden"
		name="boxchecked" value="0" /> <input type="hidden"
		name="filter_order" value="<?php echo $this->lists['order']; ?>" /> <input
		type="hidden" name="filter_order_Dir"
		value="<?php echo $this->lists['order_Dir']; ?>" /> <input
		type="hidden" name="controller" value="informe" /> <input
		type="hidden" name="view" value="informes" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
