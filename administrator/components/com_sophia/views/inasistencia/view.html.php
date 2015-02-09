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

class SophiaViewInasistencia extends JView
{
	function display($tpl = null)
	{
		require_once( JPATH_ADMINISTRATOR.DS.'components'.DS.'com_sophia'.DS.'helpers'.DS.'load.helper.php' );
		JHTML::stylesheet( 'nom.css', 'administrator/components/com_sophia/assets/' );

		//Data from model
		$inasistencia		=& $this->get('Data');
		$isNew		= ($inasistencia->id < 1);
		$text = $isNew ? JText::_( 'New' ) : JText::_( 'Edit' );

		JToolBarHelper::title(   '&nbsp;&nbsp;' .JText::_( 'Inasistencia ' ).': <small><small>[ ' . $text.' ]</small></small>', 'inasistencias');

		JToolBarHelper::save('save');
		JToolBarHelper::cancel();

		$lists['curso'] = nomHelperLoad::getlist_Curso($inasistencia->curso_id);
		$lists['periodo'] = nomHelperLoad::getlist_Periodo($inasistencia->periodo_id);
		$lists['alumno'] = nomHelperLoad::getlist_AlumnoMatricula($inasistencia->matricula_id);
		$lists['tipo'] = nomHelperLoad::getlist_Tipo($inasistencia->tipo);

		$lists['published'] = JHTML::_('select.booleanlist',  'published', 'class="inputbox"', $inasistencia->published );
		$editor =& JFactory::getEditor();

		$this->assignRef('inasistencia', $inasistencia);
		$this->assignRef('editor', $editor);
		$this->assignRef('lists', $lists);

		$document	= JFactory::getDocument();
		$script = "";
		$document-> addScriptDeclaration ($script);
			
		parent::display($tpl);
	}
}
