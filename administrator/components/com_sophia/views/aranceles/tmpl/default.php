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
<form action="index.php" method="post" name="adminForm">
	<table>
		<tr>
			<td align="left" width="100%"><?php echo JText::_( 'Filter' ); ?>: <input
				type="text" name="search" id="search"
				value="<?php echo $this->lists['search'];?>" class="text_area"
				onchange="document.adminForm.submit();" />
				<button onclick="this.form.submit();">
				<?php echo JText::_( 'Go' ); ?>
				</button>
				<button
					onclick="document.getElementById('search').value='';this.form.getElementById('filter_state').value='';this.form.submit();">
					<?php echo JText::_( 'Reset' ); ?>
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
					<th width="2%"><?php echo JText::_( 'NUM' ); ?>
					</th>
					<th width="2%"><input type="checkbox" name="toggle" value=""
						onclick="checkAll(<?php echo count( $this->aranceles ); ?>);" />
					</th>
					<th width="5%" class="title"><?php echo JHTML::_('grid.sort',   'id', 'id', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
					</th>
					<th width="5%" class="title"><?php echo JHTML::_('grid.sort',   'anno', 'anno', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
					</th>
					<th width="30%" class="title"><?php echo JHTML::_('grid.sort',   'alumno', 'alumno', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
					</th>
					<th width="30%" class="title"><?php echo JText::_( 'Detalle' ); ?>
					</th>
					<th width="5%" align="center"><?php echo JHTML::_('grid.sort',   'Published', 'published', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
					</th>
				</tr>
			</thead>

			<tbody>
			<?php
			$k = 0;
			for ($i=0, $n=count( $this->aranceles ); $i < $n; $i++)
			{
				$row = &$this->aranceles[$i];

				$link 		= JRoute::_( 'index.php?option=com_sophia&controller=arancel&task=edit&cid[]='. $row->id);
				$Detalle 		= JRoute::_( 'index.php?option=com_sophia&controller=arancel&task=editDet&cid[]='. $row->id);
					
				$checked 	= JHTML::_('grid.id',  $i, $row->id );
				$published 	= JHTML::_('grid.published', $row, $i );

				?>
				<tr class="<?php echo "row$k"; ?>">
					<td width="5%"><?php echo $this->pagination->getRowOffset( $i ); ?>
					</td>
					<td width="5%"><?php echo $checked; ?>
					</td>
					<td align="center"><span class="editlinktip hasTip"
						title="<?php echo JText::_( 'Edit Item' );?>::<?php echo JText::_( 'Edit Item DESC' );?>">
							<a href="<?php echo $link  ?>"> <?php echo $row->id; ?> </a> </span>
					</td>
					<td align="center"><?php echo $row->anno; ?>
					</td>
					<td align="center"><?php echo $row->alumno; ?>
					</td>
					<td align="center"><a href="<?php echo $Detalle  ?>">Detalle</a>
					</td>
					<td align="center"><?php echo $published;?>
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
		type="hidden" name="controller" value="arancel" /> <input
		type="hidden" name="view" value="aranceles" />
		<?php echo JHTML::_( 'form.token' ); ?>
</form>
