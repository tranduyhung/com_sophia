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
//-----------------------------------------------------------------------

defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.controller');

$view	= JRequest::getVar( 'view', '', '', 'string', JREQUEST_ALLOWRAW );

JSubMenuHelper::addEntry(JText::_('Control Panel'), 'index.php?option=com_sophia');
JSubMenuHelper::addEntry(JText::_('Alumnos'), 'index.php?option=com_sophia&view=alumnos');
JSubMenuHelper::addEntry(JText::_('Profesores'), 'index.php?option=com_sophia&view=profesores');

class SophiaController extends JController
{
	function display() {
		parent::display();
	}
}
?>
