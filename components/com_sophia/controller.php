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

jimport('joomla.application.component.controller');

class SophiaController extends JController
{
	function display($cachable = false, $urlparams = false) {
		// Get the document object.
		$document	= JFactory::getDocument();

		// Seteamos por  default el nombre de la vista para el Request.
		$vName	 = JRequest::getCmd('view', 'info');
		$vFormat = $document->getType();
		$lName	 = JRequest::getCmd('layout', 'default');

		if ($view = $this->getView($vName, $vFormat)) {
			// Do any specific processing by view.
			switch ($vName) {
				case 'info':
					$user = JFactory::getUser();
					if ($user->get('guest')== 1)  {
						// Redirect to profile page.
						$this->setRedirect(JRoute::_('index.php?option=com_users&view=login', false));
						return;
					}
					$model = $this->getModel($vName);
					break;
				case 'nom':
					$user = JFactory::getUser();
					if ($user->get('guest')== 1)  {
						// Redirect to profile page.
						$this->setRedirect(JRoute::_('index.php?option=com_users&view=login', false));
						return;
					}
					$model = $this->getModel($vName);
					break;
				case 'utp':
					$user = JFactory::getUser();
					if ($user->get('guest')== 1)  {
						// Redirect to profile page.
						$this->setRedirect(JRoute::_('index.php?option=com_users&view=login', false));
						return;
					}
					$model = $this->getModel($vName);
					break;
						
					//default:
					//	$model = $this->getModel('info');
					//	break;
			}


			// Push the model into the view (as default).
			$model = $this->getModel($vName);
			$view->setModel($model, true);
			$view->setLayout($lName);

			// Push document object into the view.
			$view->assignRef('document', $document);

			$view->display();


		}


		//parent::display();
	}

	 
}
