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
echo SophiaHelperToolbar::IconButtonEdit( 'alumno', 'icons/nuevo.png', JText::_( 'Nuevo' ),JText::_( 'Nuevo' ),JText::_( 'descripcion Nuevo Alumno' ) );
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
					<th width="30%" class="title"><?php echo JHTML::_('grid.sort',   'nombre', 'nombre', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
					</th>
					<th width="10%"><?php echo JHTML::_('grid.sort',   'rut', 'rut', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
					</th>
					<th width="10%"><?php echo JHTML::_('grid.sort',   'email', 'email', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
					</th>
					<th width="5%" align="center"><?php echo JHTML::_('grid.sort',   'Publicar', 'Published', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
					</th>
				</tr>
			</thead>

			<tbody>
			<?php
			$k = 0;
			for ($i=0, $n=count( $this->alumnos ); $i < $n; $i++)
			{
				$row = &$this->alumnos[$i];

				$link 		= JRoute::_( 'index.php?option=com_sophia&controller=alumno&task=edit&cid[]='. $row->id);
				$linkpublicar		= JRoute::_( 'index.php?option=com_sophia&controller=alumno&task=publish&cid[]='. $row->id);
				$linkdespublicar	= JRoute::_( 'index.php?option=com_sophia&controller=alumno&task=unpublish&cid[]='. $row->id);

				$checked 	= JHTML::_('grid.id',  $i, $row->id );
				$published 	= JHTML::_('grid.published', $row, $i );
				$imgY = 'administrator/templates/bluestork/images/admin/tick.png';
				$imgX = 'administrator/templates/bluestork/images/admin/publish_x.png';

				?>
				<tr class="<?php echo "row$k"; ?>">
					<td><span class="editlinktip hasTip"
						title="<?php echo JText::_( 'EDITAR' );?>::<?php echo JText::_( 'EDITAR_DESC' );?>">
							<a href="<?php echo $link  ?>"> <?php echo $row->nombre; ?> </a>
					</span>
					</td>
					<td><?php echo $row->rut; ?>
					</td>
					<td><?php echo $row->email_alumno; ?>
					</td>
					<td align="center"><?php //echo $published;?> <?php if ($row->published==0) { ?>
						<a href="<?php echo $linkpublicar; ?>"> <img
							src="<?php echo $imgX; ?>" border="0" alt="despublicar"> </a> <?php  }else {  ?>
						<a href="<?php echo $linkdespublicar; ?>"> <img
							src="<?php echo $imgY; ?>" border="0" alt="publicar"> </a> <?php  }
							?>
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
		type="hidden" name="controller" value="alumno" /> <input type="hidden"
		name="view" value="alumnos" />
		<?php echo JHTML::_( 'form.token' ); ?>
</form>

<div class="clr"></div>
