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
echo SophiaHelperToolbar::IconButtonHome( 'utp', 'icons/back.png', JText::_( 'Atras' ),JText::_( 'Atras' ),JText::_( 'Atras' ) );

?>
</table>
<form action="index.php" method="post" name="adminForm">
	<table class="adminlist">
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
					<th width="5%"><?php echo JText::_( 'NUM' ); ?>
					</th>
					<th width="5%"><input type="checkbox" name="toggle" value=""
						onclick="checkAll(<?php echo count( $this->alumnos ); ?>);" />
					</th>
					<th width="30%" class="title"><?php echo JHTML::_('grid.sort',   'titulo', 'titulo', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
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
			for ($i=0, $n=count( $this->evaluaciones ); $i < $n; $i++)
			{
				$row = &$this->evaluaciones[$i];

				$linkpublicar		= JRoute::_( 'index.php?option=com_sophia&controller=evaluacionutp&task=publish&cid[]='. $row->id);
				$linkdespublicar	= JRoute::_( 'index.php?option=com_sophia&controller=evaluacionutp&task=unpublish&cid[]='. $row->id);

				$checked 	= JHTML::_('grid.id',  $i, $row->id );
				$published 	= JHTML::_('grid.published', $row, $i );

				?>
				<tr class="<?php echo "row$k"; ?>">
					<td width="5%"><?php echo $this->pagination->getRowOffset( $i ); ?>
					</td>
					<td width="5%"><?php echo $checked; ?>
					</td>
					<td><?php echo $row->titulo; ?>
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

						<a href="<?php echo $linkpublicar; ?>">
							<div class="icon-unpublish">.</div> </a> <?php  }else {  ?> <a
						href="<?php echo $linkdespublicar; ?>">
							<div class="icon-publish">.</div> </a> <?php  }
							?></td>
					<td align="center"><?php echo $row->id; ?>
					</td>
				</tr>
				<?php
				$k = 1 - $k;
			}
			?>
			</tbody>
		</table>
	</div>
	<table class="adminlist">
		<tr>
			<td>
				<div class="pagination">
				<?php echo $this->pagination->getListFooter(); ?>
				</div>
			</td>
		</tr>

	</table>

	<input type="hidden" name="option" value="com_sophia" /> <input
		type="hidden" name="task" value="" /> <input type="hidden"
		name="boxchecked" value="0" /> <input type="hidden"
		name="filter_order" value="<?php echo $this->lists['order']; ?>" /> <input
		type="hidden" name="filter_order_Dir"
		value="<?php echo $this->lists['order_Dir']; ?>" /> <input
		type="hidden" name="controller" value="evaluacionutp" /> <input
		type="hidden" name="view" value="evaluacionesutp" />
		<?php echo JHTML::_( 'form.token' ); ?>
</form>
