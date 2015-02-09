
<?php
defined('_JEXEC') or die("Invalid access");
jimport('joomla.application.component.model');

class SophiaModelNom extends JModel
{
	public function getBotonesMenuProfesor() {

		if (empty($this->MenuProfesor)) {

			$db = $this->getDbo();
			$query = $db->getQuery(true);
			$query->select('bot.*');
			$query->from( '#__sophia_botones AS bot');
			$query->where('bot.menu = 5');
			$query->where('bot.published = 1');
			$query->order('bot.id');


			$this->_db->setQuery($query);
			$this->MenuProfesor = $this->_db->loadObjectList();
		}

		return $this->MenuProfesor;
	}
}

?>