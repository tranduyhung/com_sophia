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

jimport( 'joomla.application.component.view' );

class SophiaViewasignatura extends JView
{
	function display($tpl = null)
	{
		JHTML::stylesheet( 'nom.css', 'administrator/components/com_sophia/assets/' );

		//Data from model
		$asignatura		=& $this->get('Data');
			
		$lists['published'] = JHTML::_('select.booleanlist',  'published', 'class="inputbox"', $asignatura->published );
		$editor =& JFactory::getEditor();

		$this->assignRef('asignatura', $asignatura);
		$this->assignRef('editor', $editor);
		$this->assignRef('lists', $lists);

		parent::display($tpl);
	}
}
