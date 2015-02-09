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

class SophiaViewAnotacion extends JView
{
	function display($tpl = null)
	{
		require_once( JPATH_ADMINISTRATOR.DS.'components'.DS.'com_sophia'.DS.'helpers'.DS.'load.helper.php' );
		JHTML::stylesheet( 'nom.css', 'administrator/components/com_sophia/assets/' );

		//Data from model
		$anotacion		=& $this->get('Data');
		$isNew		= ($anotacion->id < 1);
		$text = $isNew ? JText::_( 'New' ) : JText::_( 'Edit' );

		JToolBarHelper::title(   '&nbsp;&nbsp;' .JText::_( 'Anotacion ' ).': <small><small>[ ' . $text.' ]</small></small>', 'anotaciones');

		JToolBarHelper::save('save');
		JToolBarHelper::cancel();

		$lists['curso'] = nomHelperLoad::getlist_Curso($anotacion->curso_id);
		$lists['periodo'] = nomHelperLoad::getlist_Periodo($anotacion->periodo_id);
		$lists['alumno'] = nomHelperLoad::getlist_AlumnoMatricula($anotacion->matricula_id);

		$lists['published'] = JHTML::_('select.booleanlist',  'published', 'class="inputbox"', $anotacion->published );
		$editor =& JFactory::getEditor();

		$this->assignRef('anotacion', $anotacion);
		$this->assignRef('editor', $editor);
		$this->assignRef('lists', $lists);

		$document	= JFactory::getDocument();
		$script = "";
		$document-> addScriptDeclaration ($script);
			
		parent::display($tpl);
	}
}
