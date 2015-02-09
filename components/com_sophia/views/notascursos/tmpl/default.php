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
//echo $this->getToolbar();
echo SophiaHelperToolbar::IconButtonHome( 'nom', 'icons/back.png', JText::_( 'Atras' ),JText::_( 'Atras' ),JText::_( 'Atras' ) );

?>
</table>
<form action="index.php" method="post" name="adminForm">
	<div id="tablecell">
		<table class="adminlist">
			<thead>
				<tr>

					<th width="10%" class="title"><?php echo JText::_( 'CURSO' ); ?>
					</th>
					<th width="10%" class="title"><?php echo JText::_( 'ASIGNATURA' ); ?>
					</th>
					<th width="10%" class="title"><?php echo JText::_( 'EVALUACION' ); ?>
					</th>
					<th width="5%" align="center"><?php echo JText::_( 'GENERAR_NOTAS' ); ?>
					</th>
					<th width="1%" nowrap="nowrap"><?php echo JText::_( 'id' ); ?>
					</th>
				</tr>
			</thead>

			<tbody>
			<?php
			$k = 0;
			for ($i=0, $n=count( $this->notas ); $i < $n; $i++)
			{
				$row = &$this->notas[$i];

				$link 		= JRoute::_( 'index.php?option=com_sophia&controller=notacurso&task=edit&cid[]='. $row->id);
					

				?>
				<tr class="<?php echo "row$k"; ?>">
					<td><?php echo $row->curso; ?>
					</td>
					<td><?php echo $row->asignatura; ?>
					</td>
					<td><?php echo $row->evaluacion; ?>
					</td>
					<td align="center"><?php //echo $published;?> <a
						href="<?php echo $link  ?>"> <?php echo JText::_( 'INGRESAR_NOTAS' ); ?>
					</a>
					</td>
					<td align="center"><?php echo $row->id; ?>
					</td>
				</tr>
				<?php
				$k = 1 - $k;
			}
			?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="13"><?php echo $this->pagination->getListFooter(); ?>
					</td>
				</tr>
			</tfoot>
		</table>
	</div>

	<input type="hidden" name="option" value="com_sophia" /> 
	<input type="hidden" name="task" value="" /> 
	<input type="hidden" name="boxchecked" value="0" /> 
	<input type="hidden"name="filter_order" value="<?php echo $this->lists['order']; ?>" /> 
	<input	type="hidden" name="filter_order_Dir"	value="<?php echo $this->lists['order_Dir']; ?>" /> 
	<input	type="hidden" name="controller" value="notacurso" /> 
	<input	type="hidden" name="view" value="notascursos" />
		<?php echo JHTML::_( 'form.token' ); ?>
</form>
