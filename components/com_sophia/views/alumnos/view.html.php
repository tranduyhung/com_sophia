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
class SophiaViewalumnos extends JView
{
	function display($tpl = null)
	{

		jimport( 'joomla.html.html.grid' );

		JHTML::stylesheet( 'nom.css', 'administrator/components/com_sophia/assets/' );


		$alumnos		= & $this->get( 'Data');
		$pagination =& $this->get('Pagination');

		$lists = & $this->get('List');

		$this->assignRef('alumnos',		$alumnos);
		$this->assignRef('pagination', $pagination);

		$this->assignRef('lists', $lists);
		$this->assignRef('menu', $menu);
		$this->assignRef('bar', $bar);
			
		parent::display($tpl);
	}



}
