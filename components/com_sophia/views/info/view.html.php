
<?php
defined( '_JEXEC') or die( 'Restricted access');
jimport( 'joomla.application.component.view');

class SophiaViewInfo extends JView
{
	protected $items;
	protected $params;
	protected $print;
	protected $state;
	protected $user;

	function display($tpl = null)
	{
		$app		= JFactory::getApplication();
		$this->params		= $app->getParams();
		$this->params = JComponentHelper::getParams("com_sophia");
		// Check for errors.
		if (count($errors = $this->get('Errors'))) {
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}

		JHTML::stylesheet( 'nom.css', 'administrator/components/com_sophia/assets/' );
		JHTML::stylesheet( 'info.css', 'administrator/components/com_sophia/assets/' );
		JHTML::stylesheet('sophia.css', 'administrator/components/com_sophia/assets/css/');
		$calendarioAtrasos = new Calendario();
		 
			
		$this->item = $this->get('item');
		 
		jimport('joomla.html.pane');

		$model =& $this->getModel();


		$alumno		= & $this->get( 'Alumno');
		$asignaturas		= & $this->get( 'Asignaturas');
		//$notas		= & $this->get( 'Notas');
		$anotaciones		= & $this->get( 'anotaciones');
		$aranceles		= & $this->get( 'aranceles');
		$inasistencias		= & $this->get( 'inasistencias');

		$CalendarioInasistencias = $calendarioAtrasos->getCalendarioSophia($inasistencias);


		$lists = & $this->get('List');
		$user	= JFactory::getUser();


		$this->assignRef('alumno',		$alumno);
		$this->assignRef('asignaturas',		$asignaturas);
		//$this->assignRef('notas',		$notas);
		$this->assignRef('anotaciones',		$anotaciones);
		$this->assignRef('aranceles',		$aranceles);
		$this->assignRef('inasistencias',		$inasistencias);
		$this->assignRef('CalendarioInasistencias',		$CalendarioInasistencias);
		$this->assignRef('params',		$params);
		$this->assignRef('lists', $lists);
		$this->assignRef('user', $user);

		if ($user->get('guest')) {
			//$this->setRedirect('index.php');
			return JError::raiseError(403, JText::_('Usuario no registrado'));
		}
		parent::display($tpl);
	}

}

?>