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

class SophiaViewcursos extends JView
{
	function display($tpl = null)
	{
		JHTML::stylesheet( 'nom.css', 'administrator/components/com_sophia/assets/' );
		$cursos		= & $this->get( 'Data');
		$pagination =& $this->get('Pagination');

		$lists = & $this->get('List');

		$this->assignRef('cursos',		$cursos);
		$this->assignRef('pagination', $pagination);

		$this->assignRef('lists', $lists);

		parent::display($tpl);
	}
	function getToolbar() {
		jimport('joomla.html.toolbar');
		$bar =& new JToolBar( 'toolbar' );
		//and make whatever calls you require
		$bar->appendButton( 'Standard', 'new', 'Save', 'cursos.new', false );
		$bar->appendButton( 'Separator' );
		$bar->appendButton( 'Standard', 'edit', 'Editar', 'cursos.edit', false );
		$bar->appendButton( 'Separator' );
		$bar->appendButton( 'Standard', 'back', 'back', 'back', false );
		//generate the html and return
		return $bar->render();
	}
}
