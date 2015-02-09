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

class SophiaModelArancel extends JModel
{
	function __construct()
	{
		parent::__construct();
	}

	public function getTable($type = 'arancel', $prefix = 'SophiaTable', $config = array())
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

				$db =& JFactory::getDBO();
				$query = "DELETE FROM #__sophia_ara_detalles WHERE arancel_id =".$cid;
				$db->setQuery( $query );
				$db->query();
					
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
		$row =& $this->getTable();
		$row->load($id[0]);
		return $row;
	}

	function getDetalle($arancel_id=0) {
		 
		if($arancel_id<0 ){
			$arancel_id =0;
		}
		$db = &JFactory::getDBO();
		$query = " SELECT det.*,es.nombre AS nombre ,anno.anno As Anno "
		." FROM #__sophia_aranceles AS ara"
		.", #__sophia_ara_detalles AS det"
		.", #__sophia_matricula AS mat"
		.", #__sophia_estudiantes AS es"
		.", #__sophia_anno AS anno"
		." WHERE ara.id = det.arancel_id"
		." AND ara.matricula_id = mat.id"
		." AND mat.alumno_id = es.id"
		." AND ara.anno_id = anno.id"
		." AND ara.id = ".$arancel_id;
		$db->setQuery($query);
		$rows = $db->loadObjectList();
		return $rows;
	}

}
