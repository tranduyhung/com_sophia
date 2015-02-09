<?php
//----------------------------------------------------------------------
// Sophia
// Sophia by Alex Olave - http://www.alfazeta.cl
//----------------------------------------------------------------------

//----------------------------------------------------------------------
// Author: 	Alex Olave - http://www.alfazeta.cl
// Copyright: copyright (C) 2010 - Alex Olave.
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

class SophiaControllerArancel extends SophiaController
{
	function __construct()
	{
		parent::__construct();
		// Register Extra tasks
		$this->registerTask( 'add'  , 	'edit' );
		$this->registerTask( 'unpublish', 	'publish');
		$this->registerTask( 'nopagado', 	'pagado');

		$this->cid = JRequest::getVar( 'cid', array(0), '', 'array' );
		JArrayHelper::toInteger($this->cid, array(0));
	}
	function _buildQuery()
	{
		$this->_query = 'UPDATE #__sophia_aranceles'
		. ' SET published = ' . (int) $this->publish
		. ' WHERE id IN ( '. $this->cids .' )'
		;
		return $this->_query;
	}
	function edit()
	{
		JRequest::setVar( 'view', 'arancel' );
		JRequest::setVar( 'layout', 'form'  );
		JRequest::setVar('hidemainmenu', 1);
		parent::display();
	}
	function editDet()
	{
		JRequest::setVar( 'view', 'arancel' );
		JRequest::setVar( 'layout', 'form_detalle'  );
		JRequest::setVar('hidemainmenu', 1);
		parent::display();
	}
	function cancel()
	{
		$msg = JText::_( 'Operation Cancelled' );
		$this->setRedirect( 'index.php?option=com_sophia&view=aranceles', $msg );
	}
	function publish()
	{
		$cid		= JRequest::getVar( 'cid', array(), '', 'array' );
		$this->publish	= ( $this->getTask() == 'publish' ? 1 : 0 );

		JArrayHelper::toInteger($cid);
		if (count( $cid ) < 1)
		{
			$action = $publish ? 'publish' : 'unpublish';
			JError::raiseError(500, JText::_( 'Select an item to' .$action, true ) );
		}

		$this->cids = implode( ',', $cid );

		$query = $this->_buildQuery();
		$db = &JFactory::getDBO();
		$db->setQuery($query);
		if (!$db->query())
		{
			JError::raiseError(500, $db->getErrorMsg() );
		}
		$link = 'index.php?option=com_sophia&view=aranceles';
		$this->setRedirect($link, $msg);
	}
	function _buildQueryPago()
	{
		$this->_query = 'UPDATE #__sophia_ara_detalles'
		. ' SET estado = ' . (int) $this->estado
		. ' WHERE id IN ( '. $this->cids .' )'
		;
		return $this->_query;
	}
	function pagado()
	{
		$cid		= JRequest::getVar( 'cid', array(), '', 'array' );
		$this->pagado	= ( $this->getTask() == 'pagado' ? 1 : 0 );

		JArrayHelper::toInteger($cid);
		if (count( $cid ) < 1)
		{
			$action = $pagado ? 'pagado' : 'nopagado';
			JError::raiseError(500, JText::_( 'SELECIONE_ITEM_A_PAGAR' .$action, true ) );
		}

		$this->cids = implode( ',', $cid );

		$query = $this->_buildQueryPago();
		$db = &JFactory::getDBO();
		$db->setQuery($query);
		if (!$db->query())
		{
			JError::raiseError(500, $db->getErrorMsg() );
		}
		$link = 'index.php?option=com_sophia&view=aranceles';
		$this->setRedirect($link, $msg);
	}

	function save()
	{

		$post	= JRequest::get('post');
		$cid	= JRequest::getVar( 'cid', array(0), 'post', 'array' );
		//$tipo = JRequest::getVar('anno', null, 'post', 'array');



		$post['id'] 	= (int) $cid[0];

		$model = $this->getModel( 'arancel' );
		if ($model->store($post)) {
			$msg = JText::_( 'Item Saved',$cid );
		} else {
			$msg = JText::_( 'Error Saving Item' );
		}

		$db = &JFactory::getDBO();
		$newid = $db->insertid() ;
		echo $newid;

		if ($newid<>0){
			for ($i=0, $n=10; $i < $n; $i++)
			{
				$db = JFactory::getDBO();
				$query = "INSERT INTO #__sophia_ara_detalles(arancel_id, cuota, estado) VALUES ($newid,'3000','Pendiente')";
				$db =& JFactory::getDBO();
				$db->setQuery( $query );
				$db->query();
			}
		}
		$link = 'index.php?option=com_sophia&view=aranceles';
		$this->setRedirect( $link, $msg );
	}

	function savedetalle()
	{

		$post	= JRequest::get('post');
		$cid	= JRequest::getVar( 'cid', array(0), 'post', 'array' );

		$post['id'] 	= (int) $cid[0];

		$model = $this->getModel( 'arancel' );
		if ($model->store($post)) {
			$msg = JText::_( 'Item Saved',$cid );
		} else {
			$msg = JText::_( 'Error Saving Item' );
		}

		$db = &JFactory::getDBO();
		$newid = $db->insertid() ;
		echo $newid;

		if ($newid<>0){
			for ($i=0, $n=10; $i < $n; $i++)
			{
				$db = JFactory::getDBO();
				$query = "INSERT INTO #__sophia_ara_detalles(arancel_id, cuota, estado) VALUES ($newid,'3000','Pendiente')";
				$db =& JFactory::getDBO();
				$db->setQuery( $query );
				$db->query();
			}
		}
		$link = 'index.php?option=com_sophia&view=aranceles';
		$this->setRedirect( $link, $msg );
	}

	function remove()
	{
		$model = $this->getModel('arancel');
		if(!$model->delete()) {
			$msg = JText::_( 'Error Deleting Item' );
		} else {
			$cids = JRequest::getVar( 'cid', array(0), 'post', 'array' );
			foreach($cids as $cid) {
				$msg .= JText::_( 'Item Deleted '.' : '.$cid );
			}
		}

		$this->setRedirect( 'index.php?option=com_sophia&view=aranceles', $msg );
	}
}
