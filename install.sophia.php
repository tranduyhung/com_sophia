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

jimport( 'joomla.filesystem.folder' );

function com_install() {
	//load language file
	$lang =& JFactory::getLanguage();
	$lang->load('com_sophia', JPATH_BASE);

	$db =& JFactory::getDBO();
	$table_list = $db->getTableList();
	$table_prefix = $db->getPrefix();
	
	
	$mensaje_def ='<br/>actualizaciones 
					  <ul>
					  <li>[14/05/2012]</li>
					  <li>Correcion en lagrabacion de notas en el front End,</li>
					  <li>Impresion de informe de Notas en PDF,</li>
					  <li>Creacion del Establecimiento ( colegio, director, direccion , ETC),</li>
					  <li>Correcion del Boton colegio</li>
					  <br/>
					   <li>[22/05/2012]</li>
					  <li>grabacion masiva de notas por curso,</li>
					  <li>Impresion de informes en PDF por UTP,</li>
					  <li>Correcion de definiciones de idioma,</li>
					  <li>creacion de botones en menu Profesores y UTP,</li>
					  <li>[31/05/2012]</li>
					  <li>Incorporacion de ABIES(biblioteca) consulta</li><br/><br/>
					  </ul><br/>pronto mas Actualizaciones<br/><br/>
					  
					   <div class="nom_link"><a href="index.php?option=com_sophia">Sophia</a></div>
					  </div>';

	if (array_search($table_prefix . 'sophia_estudiantes',$table_list) == false) {
        $isnew = true;
		
		$sql_file = JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_sophia'.DS. 'sql' . DS . 'example.sql';
		$sql_query = JFile::read($sql_file);
		$db->setQuery($sql_query);
		if (!$db->queryBatch()){
			echo $db->stderr() . '<br/>';
		}
		
		$message = '<div id="wrapper_nom_admin">
			<div align="left"><img src="administrator/components/com_sophia/assets/images/alfazeta.png" alt="Alfazeta Logo" /></div>
			<h3>'.JTEXT::_('Instalacion Nueva').'</h3>
			<p>'.JTEXT::_('La instalcion de sophia ha sido un exito ahora puede usar esta aplicacion').'</p>
			<div class="nom_link"><a href="index.php?option=com_sophia">Sophia</a></div>'.$mensaje_def;
	}
	else {
        $isnew = false;
		$message =	'<div id="wrapper_nom_admin">
					<div align="left"><img src="components/com_sophia/assets/alfazeta.png" alt="Alfazeta Logo" /></div>
					<h3>'.JTEXT::_('Actualizacion').'</h3>
					<p>'.JTEXT::_('La Actualizacion se a realizado correctamente').'</p>'.$mensaje_def;
			   
	}


	@unlink(JPATH_SITE."/administrator/components/com_sophia/install.sophia.php");
	echo $message;
	return true;
}
?>
