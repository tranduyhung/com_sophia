
<?php
defined( '_JEXEC') or die( 'Restricted access');
jimport( 'joomla.application.component.view');

class SophiaViewpdf extends JView
{


	function display($tpl = null)
	{
		// Check for errors.
		if (count($errors = $this->get('Errors'))) {
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}

		JHTML::stylesheet('sophia.css', 'administrator/components/com_sophia/assets/css/');
		 
		jimport('joomla.html.pane');

		$model =& $this->getModel();


		$matricula =& $this->get( 'Data');

		$alumno		= & $model->getAlumno($matricula->id);
		$asignaturas =&	$model->getAsignaturas($matricula->id);
		//$notas		= & $model->getNotas($matricula->id);
		$colegio		= & $this->get( 'Colegio');


		$user	= JFactory::getUser();


		$this->assignRef('alumno',		$alumno);
		$this->assignRef('asignaturas',		$asignaturas);
		//$this->assignRef('notas',		$notas);
		$this->assignRef('user', $user);
		$this->assignRef('colegio',		$colegio);

		if ($user->get('guest')) {
			//$this->setRedirect('index.php');
			return JError::raiseError(403, JText::_('Usuario no registrado'));
		}
		parent::display($tpl);
	}

}

?>