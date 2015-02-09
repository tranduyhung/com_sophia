<?php
//----------------------------------------------------------------------
// Sophia
// Sophia by Alex Olave - http://www.alfazeta.cl
//----------------------------------------------------------------------

//----------------------------------------------------------------------
// Author: 	Alex Olave - http://www.alfazeta.cl
// Copyright: copyright (C) 2012 - Alex olave.
// License: 	GNU/GPL, http://www.gnu.org/copyleft/gpl.html
// Pack: 	Sophia
// File: 	alumno.php
//----------------------------------------------------------------------

//----------------------------------------------------------------------
// Sophia is free software. This version may have been modified pursuant
// to the GNU General Public License, and as distributed it includes or
// is derivative of works licensed under the GNU General Public License or
// other free or open source software licenses.
//----------------------------------------------------------------------


defined( '_JEXEC' ) or die( 'Restricted access' );

class nomHelperConfig
{
	function getConfig($key, $default = 0) {
		$ver = new JVersion();
		if ($ver->RELEASE == "1.5") {
			$params = &JComponentHelper::getParams( 'com_sophia' );
		} else {
			$app = JFactory::getApplication();
			if ($app->isSite()) $params = $app->getParams();
			else $params = &JComponentHelper::getParams( 'com_sophia' );
		}
		return $params->get($key, $default);
	}
}
