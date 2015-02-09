
<?php
defined('_JEXEC') or die("Invalid access");
jimport('joomla.application.component.model');

class SophiaModelUtp extends JModel
{
	public function getBotonesUtp() {

		if (empty($this->Utp)) {

			$db = $this->getDbo();
			$query = $db->getQuery(true);
			$query->select('bot.*');
			$query->from( '#__sophia_botones AS bot');
			$query->where('bot.menu = 4');
			$query->where('bot.published = 1');
			$query->order('bot.id');


			$this->_db->setQuery($query);
			$this->Utp = $this->_db->loadObjectList();
		}

		return $this->Utp;
	}

	public function getAdmutp() {

		if (empty($this->admutp)) {

			$user	 =& JFactory::getUser();
			$db = $this->getDbo();
			$query = $db->getQuery(true);
			$query->select('prf.*');
			$query->select('prf.nombre AS profesor');
			$query->from( '#__sophia_profesores AS prf');
			$query->where('prf.user_id = '. $user->id);

			//echo $query;
			$this->_db->setQuery($query);
			$this->admutp = $this->_db->loadObjectList();
		}

		return $this->admutp;
	}


}

?>