<?php /**  * @copyright	2013 - All Rights Reserved. **/?>
<?php require(dirname(__FILE__)."/modules/req_parameters.php");?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
	<head>
		<?php require(dirname(__FILE__)."/functions.php");?>
		<?php require(dirname(__FILE__)."/modules/req_css.php");?>
		<?php if ($this->params->get( 'jcopyright' )) : ?> <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/modules/jcopyright.js"></script><?php endif; ?>
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/modules/jload.js"></script>
		<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/html/com_content/archive/jscript.js"></script>	
		<?php if ($this->params->get( 'jscroll' )) : ?> <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/modules/jscroll.js"></script><?php endif; ?>
	</head>
<body class="background">
<div id="main">
	<div id="header-w">
    	<div id="header">
<?php $logo = $this->params->get('logo');
	if ($logo != null ) : ?>
    <a href="<?php echo $this->baseurl ?>"><img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($logo); ?>" alt="logo" border="0" class="logo" /></a>
    <?php else : ?>
    <a href="<?php echo $this->baseurl ?>/"><img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/logo.png" border="0" class="logo"></a>
<?php endif; ?>		
			<div class="topmenu">
				<div id="navr">
					<div id="nav"><jdoc:include type="modules" name="mainmenu" style="none" /></div>		
				</div>	
			</div>
	<div class="slogan"><?php if ($this->params->get( 'slogandisable' )) : ?><?php echo ($slogan); ?><?php endif; ?></div>
        <?php if ($this->countModules('top')) : ?> 
            <div class="top">
                    <jdoc:include type="modules" name="top" style="none"/>
            </div>
        <?php endif; ?>                         
		</div> 
	</div>
<!-- Slideshow -->
<div style="margin:0px auto; width: 980px;"><?php include "slideshow/slideroptions.php"; ?></div>
<!-- END Slideshow -->	
<div id="wrapper">
	<div id="main-content">	
    <?php if($this->countModules('left') xor $this->countModules('right')) $maincol_sufix = '_md';
	  elseif(!$this->countModules('left') and !$this->countModules('right'))$maincol_sufix = '_bg';
	  else $maincol_sufix = '_md'; ?>	
	<?php $app = JFactory::getApplication(); $menu = $app->getMenu(); $lang = JFactory::getLanguage(); if ($menu->getActive() == $menu->getDefault($lang->getTag())) : ?>
	<?php include "html/com_content/archive/function.php"; ?><?php endif; ?> 
<!-- Left Sidebar -->		  
    <?php if($this->countModules('left') and JRequest::getCmd('layout') != 'form') : ?>
			<div id="leftbar-w">
			<div id="sidebar"><jdoc:include type="modules" name="left" style="jaw" /></div>
			</div>
    <?php endif; ?>	  
<!-- Right Sidebar -->	
    <?php if($this->countModules('right') and JRequest::getCmd('layout') != 'form') : ?>
			<div id="rightbar-w">
			<div id="sidebar"><jdoc:include type="modules" name="right" style="jaw" /></div>
			<?php if ($this->params->get( 'googletranslate' )) : ?>  <?php include "modules/googletranslate.php"; ?><?php endif; ?>
			</div>
    <?php endif; ?>	  
	<div id="centercontent<?php echo $maincol_sufix; ?>">
		<div class="clearpad"><jdoc:include type="component" /></div>			
		<?php if ($this->countModules('breadcrumb')) : ?>
        <jdoc:include type="modules" name="breadcrumb"  style="none"/>
        <?php endif; ?>	
	</div>	
		<div class="clr"></div>
    </div>   		
</div><!--wrapper end--->
	<div id="bottomwide">		<div id="bottom">			<div class="user1"><jdoc:include type="modules" name="user1" style="xhtml" /></div>			<div class="user2"><jdoc:include type="modules" name="user2" style="xhtml" /></div>			<div class="user3"><jdoc:include type="modules" name="user3" style="xhtml" /></div>								<div class="tg">					<div id="nav2"><jdoc:include type="modules" name="mainmenu" style="none" />					<div id='nav3'><a href="http://www.freetemplatespot.com/" title="freetemplatespot" target="_blank">Free Joomla 3.1 Templates</a></div>			</div>					<div class="footer-right">					<?php echo date('l \t\h\e jS');?> - <?php if ($this->params->get( 'footerdisable' )) : ?><?php echo ($footertext); ?><?php endif; ?>					</div>			</div>				<div style="display:none;" class="nav_up" id="nav_up"></div>					</div>	</div> </body></html>