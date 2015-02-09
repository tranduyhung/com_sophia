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
<form action="index.php?option=com_sophia&view=libros" method="post" name="adminForm">
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
		</tr>
	</table>
	<div id="tablecell">
		<table class="adminlist">
			<thead>
				<tr>
					<th width="30%" class="title"><?php echo JHTML::_('grid.sort',   'Titulo', 'titulo', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
					</th>
					<th width="10%"><?php echo JHTML::_('grid.sort',   'autor', 'autor', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
					</th>
					<th width="10%"><?php echo JHTML::_('grid.sort',   'editorial', 'editorial', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
					</th>
					<th width="5%" align="center"><?php echo JText::_( 'ISBN' );?>
					</th>
				</tr>
			</thead>

			<tbody>
			<?php
			$k = 0;
			for ($i=0, $n=count( $this->libros ); $i < $n; $i++)
			{
				$row = &$this->libros[$i];

				$link 		= JRoute::_( 'index.php?option=com_sophia&controller=libro&task=edit&cid[]='. $row->ISBN.'&tmpl=component');


				?>
				<tr class="<?php echo "row$k"; ?>">
					<td><span class="editlinktip hasTip"
						title="<?php echo JText::_( 'VER' );?>::<?php echo JText::_( 'VER_DESC' );?>">
							<a class="modal" rel="{handler: 'iframe', size: {x: 370, y: 370}}" href="<?php echo $link  ?>"> <?php echo $row->TITULO; ?> </a>
					</span>
					</td>
					<td><?php echo $row->AUTOR; ?>
					</td>
					<td><?php echo $row->EDITORIAL; ?>
					</td>
					<td align="center"><?php echo $row->ISBN; ?>
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
	<input	type="hidden" name="task" value="" /> 
	<input type="hidden" name="boxchecked" value="0" /> 
	<input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" /> 
	<input	type="hidden" name="filter_order_Dir"	value="<?php echo $this->lists['order_Dir']; ?>" /> 
	<input	type="hidden" name="controller" value="libro" /> 
	<input type="hidden" name="view" value="libros" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>

<div class="clr"></div>
