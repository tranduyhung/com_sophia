<?php

defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.controller');

class SophiaControllerAjax extends JController
{

	function display()
	{
		parent::display();
	}
	function pruebaAjax(){

		$datos = null;
		include(JPATH_COMPONENT.DS."json.class.php");
		$modelo = $this->getModel('manejador');

		$query = 'SELECT name, username, email FROM `jos_users`' ;
		$datos = $modelo->_getList( $query );
		if(count($datos)){
			$json = new JSON;
			echo  $json->serialize( $datos );
		}else{
			echo "null";
		}

	}

}
?>