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

jimport( 'joomla.application.component.model' );

class SophiaModelNotaCurso extends JModel
{
	function __construct()
	{
		parent::__construct();
	}

	public function getTable($type = 'nota', $prefix = 'SophiaTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}

	function store($data)
	{
		$row =& $this->getTable();

		if (!$row->bind($data)) {
			return false;
		}

		if (!$row->check()) {
			return false;
		}

		if (!$row->store()) {
			return false;
		}

		return true;
	}

	function delete()
	{
		$cids = JRequest::getVar( 'cid', array(0), 'post', 'array' );
		$row =& $this->getTable();

		if (count( $cids )) {
			foreach($cids as $cid) {
				if (!$row->delete( $cid )) {
					$this->setError( $row->getErrorMsg() );
					return false;
				}
			}
		}
		return true;
	}

	function getData()
	{
		$id = JRequest::getVar('cid');
		$row =& $this->getTable('evaluacion');
		//$row =& $this->getTable('curso');

		$row->load($id[0]);
		return $row;
	}

	function getCurso($evaluacion_id)
	{


		$db = &JFactory::getDBO();
	  
		$query = "SELECT cur.id as curso_id,mat.id As matricula_id,eva.id As evaluacion_id"
		." FROM"
		."  #__sophia_evaluacion AS eva"
		.", #__sophia_materias AS mat"
		.", #__sophia_curso AS cur"
		." WHERE "
		."   mat.id = eva.materia_id"
		." AND  cur.id = mat.curso_id"
		." AND  eva.id = ".$evaluacion_id;
		 
		echo $query;

		$db->setQuery($query);
		$row = $db->loadObjectList();
		return $row;
	}


	 


}
