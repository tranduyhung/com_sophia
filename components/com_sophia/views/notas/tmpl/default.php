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
echo SophiaHelperToolbar::IconButtonEdit( 'nota', 'icons/nuevo.png', JText::_( 'Nuevo' ),JText::_( 'Nuevo' ),JText::_( 'descripcion Nuevo Alumno' ) );
echo SophiaHelperToolbar::IconButtonHome( 'nom', 'icons/back.png', JText::_( 'Atras' ),JText::_( 'Atras' ),JText::_( 'Atras' ) );

?>
</table>
<form action="index.php" method="post" name="adminForm">
	<table>
		<tr>
			<td align="left" width="100%"><?php echo JText::_( 'FILTRO' ); ?>: <input
				type="text" name="search" id="search"
				value="<?php echo $this->lists['search'];?>" class="text_area"
				onchange="document.adminForm.submit();" />
				<button onclick="this.form.submit();">
				<?php echo JText::_( 'BUSCAR' ); ?>
				</button>
				<button
					onclick="document.getElementById('search').value='';this.form.getElementById('filter_state').value='';this.form.submit();">
					<?php echo JText::_( 'LIMPIAR' ); ?>
				</button>
			</td>
			<td nowrap="nowrap"><?php echo $this->lists['state']; ?>
			</td>
		</tr>
	</table>
	<div id="tablecell">
		<table class="adminlist">
			<thead>
				<tr>
					<th width="10%" class="title"><?php echo JHTML::_('grid.sort',   'nota', 'nota', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
					</th>
					<th width="10%" class="title"><?php echo JHTML::_('grid.sort',   'curso', 'curso', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
					</th>
					<th width="10%" class="title"><?php echo JHTML::_('grid.sort',   'profesor', 'profesor', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
					</th>
					<th width="10%" class="title"><?php echo JHTML::_('grid.sort',   'asignatura', 'asignatura', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
					</th>
					<th width="10%" class="title"><?php echo JHTML::_('grid.sort',   'periodo', 'periodo', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
					</th>
					<th width="5%" align="center"><?php echo JHTML::_('grid.sort',   'Published', 'published', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
					</th>
					<th width="1%" nowrap="nowrap"><?php echo JHTML::_('grid.sort',   'id', 'id', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
					</th>
				</tr>
			</thead>

			<tbody>
			<?php
			$k = 0;
			for ($i=0, $n=count( $this->notas ); $i < $n; $i++)
			{
				$row = &$this->notas[$i];

				$link 		= JRoute::_( 'index.php?option=com_sophia&controller=nota&task=edit&cid[]='. $row->id);
				$linkpublicar		= JRoute::_( 'index.php?option=com_sophia&controller=nota&task=publish&cid[]='.$row->id);
				$linkdespublicar	= JRoute::_( 'index.php?option=com_sophia&controller=nota&task=unpublish&cid[]='.$row->id);

				$imgY = 'administrator/templates/bluestork/images/admin/tick.png';
				$imgX = 'administrator/templates/bluestork/images/admin/publish_x.png';

				$checked 	= JHTML::_('grid.id',  $i, $row->id );
				$published 	= JHTML::_('grid.published', $row, $i );

				?>
				<tr class="<?php echo "row$k"; ?>">
					<td><span class="editlinktip hasTip"
						title="<?php echo JText::_( 'EDIT' );?>::<?php echo JText::_( 'EDIT_DESC' );?>">
							<a href="<?php echo $link  ?>"> <?php echo $row->nota; ?> </a> </span>
					</td>
					<td><?php echo $row->curso; ?>
					</td>
					<td><?php echo $row->profesor; ?>
					</td>
					<td><?php echo $row->asignatura; ?>
					</td>
					<td><?php echo $row->periodo; ?>
					</td>
					<td align="center"><?php //echo $published;?> <?php if ($row->published==0) { ?>
						<a href="<?php echo $linkpublicar; ?>"> <img
							src="<?php echo $imgX; ?>" border="0" alt="despublicar"> </a> <?php  }else {  ?>
						<a href="<?php echo $linkdespublicar; ?>"> <img
							src="<?php echo $imgY; ?>" border="0" alt="publicar"> </a> <?php  }
							?>
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

	<input type="hidden" name="option" value="com_sophia" /> <input
		type="hidden" name="task" value="" /> <input type="hidden"
		name="boxchecked" value="0" /> <input type="hidden"
		name="filter_order" value="<?php echo $this->lists['order']; ?>" /> <input
		type="hidden" name="filter_order_Dir"
		value="<?php echo $this->lists['order_Dir']; ?>" /> <input
		type="hidden" name="controller" value="nota" /> <input type="hidden"
		name="view" value="notas" />
		<?php echo JHTML::_( 'form.token' ); ?>
</form>
