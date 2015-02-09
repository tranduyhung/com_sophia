<?php
defined('_JEXEC') or die('Restricted access');
jimport('joomla.html.toolbar');
class SophiaHelperToolbar
{
	function getToolbar($view) {
		$bar = new JToolbar($view);
		return $bar;
	}
	function quickiconButton( $link, $image, $text, $titulo, $definicion )
	{
		global $mainframe;
		$lang  =& JFactory::getLanguage();
		JHTML::_('behavior.tooltip');
		?>
<div style="float:<?php echo ($lang->isRTL()) ? 'right' : 'left'; ?>;">
	<div>
		<a href="<?php echo JRoute::_($link ); ?>"> <?php echo JHTML::_('image.site',  $image, '/components/com_sophia/images/', NULL, NULL, $text ); ?>
			<span><?php echo $text; ?> </span> </a>

	</div>
</div>
		<?php
	}
	function IconButtonHome( $link, $image, $text, $titulo, $definicion )
	{
		global $mainframe;
		$lang  =& JFactory::getLanguage();
		JHTML::_('behavior.tooltip');
		?>
<div style="float:<?php echo ($lang->isRTL()) ? 'right' : 'left'; ?>;">
	<div>
		<a
			href="<?php echo JRoute::_('index.php?option=com_sophia&view='.$link); ?>">
			<span class="hasTip"
			title="<?php echo $titulo ;?>::<?php echo $definicion ;?>"> <?php echo JHTML::_('image.site',  $image, '/components/com_sophia/images/', NULL, NULL, null ); ?>
		</span> </a>


	</div>
</div>
		<?php
	}
	function IconButtonEdit( $link, $image, $text, $titulo, $definicion )
	{
		global $mainframe;
		$lang  =& JFactory::getLanguage();
		JHTML::_('behavior.tooltip');
		?>
<div style="float:<?php echo ($lang->isRTL()) ? 'right' : 'left'; ?>;">
	<div>
		<span class="editlinktip hasTip"
			title="<?php echo $titulo ;?>::<?php echo $definicion ;?>"> <a
			href="<?php echo JRoute::_('index.php?option=com_sophia&controller='.$link.'&task=edit'); ?>">
			<?php echo JHTML::_('image.site',  $image, '/components/com_sophia/images/', NULL, NULL, null ); ?>
		</a> </span>

	</div>
</div>
			<?php
	}
	function IconButtonSave( $link, $image, $text, $titulo, $definicion )
	{
		global $mainframe;
		$lang  =& JFactory::getLanguage();
		JHTML::_('behavior.tooltip');
		?>
<div style="float:<?php echo ($lang->isRTL()) ? 'right' : 'left'; ?>;">
	<div>
		<span class="editlinktip hasTip"
			title="<?php echo $titulo ;?>::<?php echo $definicion ;?>"> <a
			href="<?php echo JRoute::_('index.php?option=com_sophia&controller='.$link.'&task=save'); ?>">
			<?php echo JHTML::_('image.site',  $image, '/components/com_sophia/images/', NULL, NULL, null ); ?>
		</a> </span>

	</div>
</div>
			<?php
	}
	function title($title, $icon = 'generic.png')
	{
		// Strip the extension.
		$icons = explode(' ', $icon);
		foreach($icons as &$icon) {
			$icon = 'icon-48-'.preg_replace('#\.[^.]*$#', '', $icon);
		}

		$html = '<div class="pagetitle '.htmlspecialchars(implode(' ', $icons)).'"><h2>'.$title.'</h2></div>';

		return $html;
	}
	function IconButtonPdf( $link, $image, $text, $titulo )
	{
		global $mainframe;
		$lang  =& JFactory::getLanguage();
		JHTML::_('behavior.tooltip');
		?>
<div style="float:<?php echo ($lang->isRTL()) ? 'right' : 'left'; ?>;">
	<div>
		<span class="editlinktip hasTip" title="<?php echo $titulo ;?>"> <a
			href="<?php echo JRoute::_('index.php?option=com_sophia&view='.$link); ?>">
			<?php echo JHTML::_('image.site',  $image, '/components/com_sophia/images/', NULL, NULL, null ); ?>
		</a> </span>

	</div>
</div>
			<?php
	}
}

