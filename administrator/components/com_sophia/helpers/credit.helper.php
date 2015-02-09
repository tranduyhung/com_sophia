<?php
//----------------------------------------------------------------------
// JNotesMagic
// JNotesMagic by Alex olave - http://joomlamagic.es
//----------------------------------------------------------------------

//----------------------------------------------------------------------
// Author: 	Alex olave - http://joomlamagic.es
// Copyright: copyright (C) 2009 - Alex olave.
// License: 	GNU/GPL, http://www.gnu.org/copyleft/gpl.html
// Pack: 	JNotesMagic
// File: 	reader.helper.php
//----------------------------------------------------------------------

//----------------------------------------------------------------------
// JNotesMagic is free software. This version may have been modified pursuant
// to the GNU General Public License, and as distributed it includes or
// is derivative of works licensed under the GNU General Public License or
// other free or open source software licenses.
//----------------------------------------------------------------------

defined('_JEXEC') or die('Restricted access');
class JHTMLCredit
{
	function credit()
	{
		$xmldata = JApplicationHelper::parseXMLInstallFile(JPATH_ADMINISTRATOR .DS. 'components'.DS.'com_sophia'.DS.'com_sophia.xml');
		$credit='<div style="text-align:center;"><a href="http://www.sophiaos.com" target="_blank">Sophia gestion Academica '.$xmldata['version'].'</a></div><br />';
		return $credit;
	}
}
