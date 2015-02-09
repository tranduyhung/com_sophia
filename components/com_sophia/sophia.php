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
//-----------------------------------------------------------------------


defined( '_JEXEC' ) or die( 'Restricted access' );

// Require the base controller
require_once( JPATH_COMPONENT.DS.'controller.php' );

// Require helpers
require_once( JPATH_ADMINISTRATOR . DS . 'components' . DS . 'com_sophia' . DS . 'helpers' . DS . 'config.helper.php');
require_once( JPATH_ADMINISTRATOR . DS .'components' . DS . 'com_sophia' . DS . 'helpers'.DS.'load.helper.php' );
require_once( JPATH_ADMINISTRATOR . DS .'components' . DS . 'com_sophia' . DS . 'helpers'.DS.'credit.helper.php' );
require_once( 'components' . DS . 'com_sophia' . DS . 'helpers' . DS . 'calendario.helper.php');
require_once( 'components' . DS . 'com_sophia' . DS . 'helpers' . DS . 'toolbar.helper.php');
//require_once( 'components' . DS . 'com_sophia' . DS . 'helpers' . DS . 'pdf.helper.php');


ini_set("display_errors", nomHelperConfig::getConfig('debug_mode', 1));

// Require tables
JTable::addIncludePath(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_sophia'.DS.'tables');



//TODO: Poner template configurable
$document    = & JFactory::getDocument();
$document->addStyleSheet('templates/system/css/system.css');
$document->addCustomTag(
			'<link href="administrator/templates/bluestork/css/template.css" rel="stylesheet" type="text/css" />'."\n\n".
			'<!--[if IE 7]>'."\n".
			'<link href="administrator/templates/bluestork/css/ie7.css" rel="stylesheet" type="text/css" />'."\n".
			'<![endif]-->'."\n".
			'<!--[if gte IE 8]>'."\n\n".
			'<link href="administrator/templates/bluestork/css/ie8.css" rel="stylesheet" type="text/css" />'."\n".
			'<![endif]-->'."\n".
			'<link rel="stylesheet" href="administrator/templates/bluestork/css/rounded.css" type="text/css" />'."\n"
			);
				
				
			// Require specific controller if requested
			if($controller = JRequest::getWord('controller')) {
				$path = JPATH_COMPONENT.DS.'controllers'.DS.$controller.'.php';
				if (file_exists($path)) {
					require_once $path;
				} else {
					$controller = '';
				}
			}

			// Create the controller
			$classname    = 'SophiaController'.ucfirst($controller);
			$controller   = new $classname( );

			// Perform the Request task
			$controller->execute( JRequest::getVar( 'task' ) );

			// Redirect if set by the controller
			$controller->redirect();
			?>
