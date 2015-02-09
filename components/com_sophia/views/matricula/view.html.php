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

class SophiaViewMatricula extends JView
{
	function display($tpl = null)
	{
		JHTML::stylesheet( 'nom.css', 'administrator/components/com_sophia/assets/' );

		//Data from model
		$matricula		=& $this->get('Data');

		$lists['curso'] = nomHelperLoad::getlist_Curso($matricula->curso_id);
		$lists['anno'] = nomHelperLoad::getlist_Anno($matricula->anno_id);

		$lists['alumno'] = nomHelperLoad::getlist_Alumno($matricula->alumno_id);

		$lists['published'] = JHTML::_('select.booleanlist',  'published', 'class="inputbox"', $matricula->published );
		$editor =& JFactory::getEditor();

		$this->assignRef('matricula', $matricula);
		$this->assignRef('editor', $editor);
		$this->assignRef('lists', $lists);

		parent::display($tpl);
	}
}
