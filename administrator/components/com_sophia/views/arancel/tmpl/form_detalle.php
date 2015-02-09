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
JHTML::_('behavior.calendar');
?>
<form action="index.php" method="post" name="adminForm" id="adminForm">
	<fieldset class="adminform">
		<div id="tablecell">
			<table class="adminlist">
				<thead>
					<tr>
						<th width="5"><?php echo JText::_( 'NUM' ); ?>
						</th>
						<th width="5%"><input type="checkbox" name="toggle" value=""
							onclick="checkAll(<?php echo count( $this->detalle ); ?>);" />
						</th>

						<th width="5%" class="title"><?php echo JHTML::_('grid.sort',   'id', 'id', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
						</th>
						<th width="5%" class="title"><?php echo JText::_( 'Anno' ); ?>
						</th>
						<th width="30%" class="title"><?php echo JText::_( 'Cuota' ); ?>
						</th>
						<th width="30%" class="title"><?php echo JText::_( 'Alumno' ); ?>
						</th>
						<th width="30%" class="title"><?php echo JText::_( 'Estado' ); ?>
						</th>
						<th width="5%" align="center"><?php echo JHTML::_('grid.sort',   'Published', 'published', @$this->lists['order_Dir'], @$this->lists['order'] ); ?>
						</th>
					</tr>
				</thead>

				<tbody>
				<?php
				$k = 0;
					

				for ($i=0, $n=count( $this->detalle ); $i < $n; $i++)
				{
					$row = &$this->detalle[$i];


					$checked 	= JHTML::_('grid.id',  $i, $row->id );
					$published 	= JHTML::_('grid.published', $row, $i );
					$pagar 		= JRoute::_( 'index.php?option=com_sophia&controller=arancel&task=pagado&cid[]='. $row->id);
					$anular 	= JRoute::_( 'index.php?option=com_sophia&controller=arancel&task=nopagado&cid[]='. $row->id);
					$imgY = 'templates/bluestork/images/admin/tick.png';
					$imgX = 'templates/bluestork/images/admin/publish_x.png';


					?>
					<tr class="<?php echo "row$k"; ?>">
						<td width="5%"><?php echo $i; ?>
						</td>
						<td width="5%"><?php echo $checked; ?>
						</td>
						<td align="center"><?php echo $row->id; ?>
						</td>
						<td align="center"><?php echo $row->anno; ?>
						</td>
						<td align="center"><?php echo $row->cuota; ?>
						</td>
						<td align="center"><?php echo $row->nombre; ?>
						</td>
						<td align="center"><?php if ($row->estado==0) { ?> <a
							href="<?php echo $pagar; ?>"> <img src="<?php echo $imgX; ?>"
								border="0" alt="pagar"> </a> <?php  }else {  ?> <a
							href="<?php echo $anular; ?>"> <img src="<?php echo $imgY; ?>"
								border="0" alt="anular"> </a> <?php  }
								?>
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
						<td colspan="13"></td>
					</tr>
				</tfoot>
			</table>
		</div>

	</fieldset>

	<input type="hidden" name="cid[]"
		value="<?php echo $this->detalle->id; ?>" /> <input type="hidden"
		name="option" value="com_sophia" /> <input type="hidden" name="task"
		value="" /> <input type="hidden" name="controller" value="arancel" />
</form>
