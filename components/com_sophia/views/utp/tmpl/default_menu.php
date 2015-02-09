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
echo '<br>';
for ($i=0, $n=count( $this->buttons ); $i < $n; $i++)
{
	$row = &$this->buttons[$i];
	echo '<div class="icon-wrapper">';
	echo '<div class="icon">';
	echo '<div id="cpanel">';
	echo SophiaHelperToolbar::quickIconButton( 'index.php?option=com_sophia&view='.$row->link, $row->image, JText::_( $row->texto ),JText::_( $row->titulo ),JText::_( $row->descripcion )  );
	echo '</div>';
	echo '</div>';
	echo '</div>';
} ?>
