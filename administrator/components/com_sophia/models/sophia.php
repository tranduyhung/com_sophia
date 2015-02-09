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
// import Joomla modelitem library
jimport('joomla.application.component.modelitem');

//jimport( 'joomla.application.component.model' );

class SophiaModelSophia extends JModel
{
	function __construct()
	{
		parent::__construct();
	}
	public function getTable($type = 'Botones', $prefix = 'SophiaTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}



	public function getBotonesSophia() {

		if (empty($this->botones)) {

			$db = $this->getDbo();
			$query = $db->getQuery(true);
			$query->select('bot.*');
			$query->from( '#__sophia_botones AS bot');
			$query->where('bot.menu = 1');
			$query->where('bot.published = 1');
			$query->order('bot.id');


			$this->_db->setQuery($query);
			$this->botones = $this->_db->loadObjectList();
		}

		return $this->botones;
	}
	public function getBotonesContabilidad() {

		if (empty($this->Contabilidad)) {

			$db = $this->getDbo();
			$query = $db->getQuery(true);
			$query->select('bot.*');
			$query->from( '#__sophia_botones AS bot');
			$query->where('bot.menu = 3');
			$query->where('bot.published = 1');
			$query->order('bot.id');


			$this->_db->setQuery($query);
			$this->Contabilidad = $this->_db->loadObjectList();
		}

		return $this->Contabilidad;
	}
	public function getBotonesMantenedor() {

		if (empty($this->Mantenedor)) {

			$db = $this->getDbo();
			$query = $db->getQuery(true);
			$query->select('bot.*');
			$query->from( '#__sophia_botones AS bot');
			$query->where('bot.menu = 2');
			$query->where('bot.published = 1');
			$query->order('bot.id');


			$this->_db->setQuery($query);
			$this->Mantenedor = $this->_db->loadObjectList();
		}

		return $this->Mantenedor;
	}
}
