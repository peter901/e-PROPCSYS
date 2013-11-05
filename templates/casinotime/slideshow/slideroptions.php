<?php if ($this->params->get( 'slidehome' )) : ?>	
		<?php $app = JFactory::getApplication();
			$menu = $app->getMenu();
			$lang = JFactory::getLanguage();
			if ($menu->getActive() == $menu->getDefault($lang->getTag())) : ?>
			<?php include "slideshow.php"; ?>
		<?php endif; ?>
	<?php else : ?>
		<?php include "slideshow.php"; ?>
<?php endif; ?>