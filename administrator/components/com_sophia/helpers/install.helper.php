<?php
//----------------------------------------------------------------------
// Sophia
// Sophia by Alex Olave - http://www.alfazeta.cl
//----------------------------------------------------------------------

//----------------------------------------------------------------------
// Author: 	Alex Olave - http://www.alfazeta.cl
// Copyright: copyright (C) 2010
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

class nomHelperInstall
{
	/*
	 function getVersionLocal()
	 {
		// Code from PhocaGallery component
		$folder = JPATH_ADMINISTRATOR .DS. 'components'.DS.'com_sophia';
		if (JFolder::exists($folder)) {
		$xmlFilesInDir = JFolder::files($folder, '.xml$');
		} else {
		$folder = JPATH_SITE .DS. 'components'.DS.'com_sophia';
		if (JFolder::exists($folder)) {
		$xmlFilesInDir = JFolder::files($folder, '.xml$');
		} else {
		$xmlFilesInDir = null;
		}
		}

		$xml_items = '';
		if (count($xmlFilesInDir))
		{
		foreach ($xmlFilesInDir as $xmlfile)
		{
		if ($data = JApplicationHelper::parseXMLInstallFile($folder.DS.$xmlfile)) {
		foreach($data as $key => $value) {
		$xml_items[$key] = $value;
		}
		}
		}
		}
		if (isset($xml_items['version']) && $xml_items['version'] != '' ) {
		$ver = new JVersion();
		$version['version'] = $xml_items['version'];
		if ($ver->RELEASE == '1.5') {
		$version['creationDate'] = $xml_items['creationdate'];
		} else {
		$version['creationDate'] = $xml_items['creationDate'];
		}
		return $version;
		} else {
		return '';
		}
		}

		function getVersionRemote()
		{
		//code from JFusion component
		ob_start();
		$url = 'http://joomlacode.org/gf/project/com_sophia/scmsvn/?action=browse&path=%2F*checkout*%2Ftrunk%2Fcom_sophia.xml';
		if(function_exists('curl_init')){
		//curl is the preferred function
		$crl = curl_init();
		$timeout = 5;
		curl_setopt ($crl, CURLOPT_URL,$url);
		curl_setopt ($crl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt ($crl, CURLOPT_CONNECTTIMEOUT, $timeout);
		$JVersionRaw = curl_exec($crl);
		curl_close($crl);
		} else {
		//get the file directly if curl is disabled
		$JVersionRaw = file_get_contents($url);
		if (!strpos($JVersionRaw, '<install')){
		//file_get_content is often blocked by hosts, return an error message
		//echo JText::_('CURL_DISABLED_ERROR1');
		return -1;
		}
		}

		$parser = JFactory::getXMLParser('Simple');
		if ($parser->loadString($JVersionRaw)) {
		if (isset( $parser->document )) {
		$JVersion    = $parser->document;
		} else {
		//echo JText::_('CURL_DISABLED_ERROR2');
		return -2;
		}
		}
		unset($parser);
		ob_end_clean();
		$version['version'] = $JVersion->version[0]->data();
		$version['creationDate'] = $JVersion->creationDate[0]->data();
		return $version;
		}

		function _sql($sql) {
		jimport('joomla.filesystem.file');
		$sql_file = JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_sophia'.DS. 'sql' . DS . $sql . '.sql';
		$sql_query = JFile::read($sql_file);
		$db =& JFactory::getDBO();
		$db->setQuery($sql_query);
		if (!$db->queryBatch()){
		$msg = '<table bgcolor="#f9d9d2" width ="100%"><tr style="height:30px"><td>';
		$msg .= '<td><b>' . JText::_('SQL UPDATE SUCESS!') . ' ' . $db->stderr() . '</b></font></td></tr></table>';
		} else {
		$msg = '<table bgcolor="#d9f9e2" width ="100%"><tr style="height:30px"><td>';
		$msg .= '<td><b>' . JText::_('SQL UPDATE SUCESS!') . ' ' . $sql . '</b></font></td></tr></table>';
		echo $msg;
		}
		}

		function sqldiff($local, $remote) {
		$files = JFolder::files(JPATH_ROOT.DS.'administrator'.DS.'components'.DS.'com_sophia'.DS .'sql');
		foreach ($files as $f) {
		if (!substr($f,12,1)) {
		$actual = substr($f,0,8);
		if ((($actual > $local) && ($actual <= $remote)) || ($local == NULL)) {
		nomHelperInstall::_sql($actual);
		}
		}
		}
		}

		function datetosql($date) {
		return substr($date,6,4) . substr($date,3,2) . substr($date,0,2);
		}

		function checks() {
		// Initialization
		$checks->errors = null;
		$checks->upgrades = null;
		$checks->success = null;
		$checks->warnings = null;

		// Check Conexion
		$vremote = nomHelperInstall::getVersionRemote();
		$vlocal = nomHelperInstall::getVersionLocal();
		if ($vremote == -1) {
		$ckecks->warnings[] = 'file_get_contents';
		} elseif ($vremote == -2) {
		$checks->warnings[] = 'conexion';
		} else {
		$checks->success[] = 'conexion';
		if ($vremote['version'] > $vlocal['version']) {
		$checks->upgrades[] = 'upgrade';
		} else {
		$checks->success[] = 'upgrade';
		}
		}

		// Check Mootools
		$version = new JVersion();
		if (($version->RELEASE == '1.6') || ($version->RELEASE == '1.5' && $version->DEV_LEVEL >= 19 && JPluginHelper::isEnabled( 'system', 'mtupgrade' ) )) {
		$checks->success[] = 'mootools';
		} else {
		$checks->errors[] = 'mootools';
		}
		return $checks;
		}
		*/
}
