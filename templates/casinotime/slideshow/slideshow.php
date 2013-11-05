<?php if ($this->params->get( 'sliderdisable' )) : ?>
<?php     
 $slide1	=	htmlspecialchars($this->params->get('slide1')); 
 $slide2	=	htmlspecialchars($this->params->get('slide2')); 
 $slide3	=	htmlspecialchars($this->params->get('slide3'));  
 $slide4	=	htmlspecialchars($this->params->get('slide4')); 
 ?>   
 
		<div id="featured-slider"> 
			<?php if ($slide1 != null ) : ?>
			<img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($slide1); ?>" data-caption="#Caption1" /><?php else : ?>
			<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/slideshow/1.jpg" data-caption="#Caption1" /><?php endif; ?>
			<?php if ($slide2 != null ) : ?>
			<img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($slide2); ?>" data-caption="#Caption2" /><?php else : ?>
			<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/slideshow/2.jpg" data-caption="#Caption2" /><?php endif; ?>			
			<?php if ($slide3 != null ) : ?>
			<img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($slide3); ?>" data-caption="#Caption3" /><?php else : ?>
			<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/slideshow/3.jpg" data-caption="#Caption3" /><?php endif; ?>			
			<?php if ($slide4 != null ) : ?>
			<img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($slide4); ?>" data-caption="#Caption4" /><?php else : ?>
			<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/slideshow/4.jpg" data-caption="#Caption4" /><?php endif; ?>
		</div>
		<!-- Captions for Orbit -->
		<span class="orbit-caption" id="Caption1"><a href="<?php if ($this->params->get( 'url1' )) : ?><?php echo ($url1); ?><?php endif; ?>">
		<?php if ($this->params->get( 'slidedesc1' )) : ?><?php echo ($slidedesc1); ?><?php endif; ?></span></a>
		
		<span class="orbit-caption" id="Caption2"><a href="<?php if ($this->params->get( 'url2' )) : ?><?php echo ($url2); ?><?php endif; ?>">
		<?php if ($this->params->get( 'slidedesc2' )) : ?><?php echo ($slidedesc2); ?><?php endif; ?></span></a>
		
		<span class="orbit-caption" id="Caption3"><a href="<?php if ($this->params->get( 'url3' )) : ?><?php echo ($url3); ?><?php endif; ?>">
		<?php if ($this->params->get( 'slidedesc3' )) : ?><?php echo ($slidedesc3); ?><?php endif; ?></span></a>
		
		<span class="orbit-caption" id="Caption4"><a href="<?php if ($this->params->get( 'url4' )) : ?><?php echo ($url4); ?><?php endif; ?>">
		<?php if ($this->params->get( 'slidedesc4' )) : ?><?php echo ($slidedesc4); ?><?php endif; ?></span></a>
<?php endif; ?>