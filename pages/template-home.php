<?php
/*
Template Name: Home
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<?php wp_head(); ?>
	</head>
<body>
	<div class="top-menu">		
		<?php
		if( have_rows('header_contact') ):

			while ( have_rows('header_contact') ) : the_row();    	
				
				if( get_row_layout() == 'contact' ):

					if( have_rows('header_phone') ):?>
						<div class="contact-phone">
							<ul>
								<?php while( have_rows('header_phone') ) : the_row();                
									$phone = get_sub_field('phone');?>
									<li class="dashicons-phone"> <h4><?php echo $phone;?></h4></li>																			
								<?php endwhile; ?>
							</ul>																	
						</div>
					<?php endif; ?>	

					<?php if (have_rows('header_adr')) : ?>
						<div class="contact-adress">
							<ul>
								<?php while( have_rows('header_adr') ) : the_row();                
									$adr = get_sub_field('adr');?>
									<li class="dashicons-location-alt"> <h4><?php echo $adr;?></h4></li>								
								<?php endwhile; ?>
							</ul>
						</div>	
					<?php endif; ?>

				<?php endif;?>
			<?php endwhile; ?>
		<?php endif;?>		
		

		<div class="social">			
			<div class="social-content">
				<ul>
					<div class="social-text">
						<?php 
						if(get_field ('social_text')) : ?>
						<li><h4><?php echo the_field('social_text'); ?></h4></li>													
					    <?php endif;?>
					</div>					
					<div class="social-inst">
						<?php if(get_field ('instagram')) : ?>	  
						<li><a href="<?php the_field('instagram') ?>" target = "_blanc" class="dashicons-instagram"></a></li>					
						<?php endif; ?>
					</div>
					<div class="social-ytube"> 					
						<?php if(get_field ('you_tube')) : ?>
						<li><a href="<?php the_field('you_tube') ?>" target = "_blanc" class="dashicons-youtube"></a></li>
						<?php endif; ?>
					</div>
					<div class="social-facebook">
						<?php if(get_field ('facebook')) : ?>
						<li><a href="<?php the_field('facebook') ?>" target = "_blanc" class="dashicons-facebook-alt"></a></li>
						<?php endif; ?>
					</div>
				</ul>
			</div>	
			
		</div>	
	</div>						
	<!-- End Top menu -->

	<header>	

				<?php if(get_field ('logo')) : ?>
					<img src="<?php the_field('logo'); ?>">
					<h1 style="color:#ffffff"><?php echo the_field('name_school');?></h1>
				<?php endif; ?>

				<a href="#classes">classes</a>  <a href="#about">about</a>  <a href="#gallery">gallery</a> 
		
	</header>		




	
</body>

