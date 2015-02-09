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

class SophiaViewNotaCurso extends JView
{
	function display($tpl = null)
	{
		require_once( JPATH_ADMINISTRATOR.DS.'components'.DS.'com_sophia'.DS.'helpers'.DS.'load.helper.php' );
		JHTML::stylesheet( 'nom.css', 'administrator/components/com_sophia/assets/' );
		$model = $this->getModel();

		//Data from model
		$evaluacion		=& $this->get('Data');
		//$curso		= & nomHelperLoad::getCurso($evaluacion->id);

		$alumnos = & nomHelperLoad::getAlumnocurso($evaluacion->id);

		$this->evaluacion_id= $evaluacion->id;


		$this->assignRef('alumnos', $alumnos);
		//$this->assignRef('curso', $curso);
		$this->assignRef('evaluacion', $evaluacion);


		parent::display($tpl);
	}
}
