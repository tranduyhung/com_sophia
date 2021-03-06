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

class SophiaViewmateria extends JView
{
	function display($tpl = null)
	{
		require_once( JPATH_ADMINISTRATOR.DS.'components'.DS.'com_sophia'.DS.'helpers'.DS.'load.helper.php' );
		JHTML::stylesheet( 'nom.css', 'administrator/components/com_sophia/assets/' );

		//Data from model
		$materias		=& $this->get('Data');
		$isNew		= ($materias->id < 1);
		$text = $isNew ? JText::_( 'New' ) : JText::_( 'Edit' );

		JToolBarHelper::title(   '&nbsp;&nbsp;' .JText::_( 'Materias' ).': <small><small>[ ' . $text.' ]</small></small>', 'materias');

		JToolBarHelper::save('save');
		JToolBarHelper::cancel();

		$lists['asignatura'] = nomHelperLoad::getlist_Asignatura($materias->asignatura_id);
		$lists['curso'] = nomHelperLoad::getlist_Curso($materias->curso_id);
		$lists['profesor'] = nomHelperLoad::getlist_Profesor($materias->profesor_id);

		$lists['published'] = JHTML::_('select.booleanlist',  'published', 'class="inputbox"', $materias->published );
		$editor =& JFactory::getEditor();

		$this->assignRef('materias', $materias);
		$this->assignRef('editor', $editor);
		$this->assignRef('lists', $lists);

		parent::display($tpl);
	}
}
