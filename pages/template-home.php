<?php
/*
Template Name: Home
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="<?php bloginfo( 'charset' ); ?>">		
		<script type="text/javascript">
			var pathInfo = {
				base: '<?php echo get_template_directory_uri(); ?>/',
				css: 'css/',
				js: 'js/',
				swf: 'swf/',
			}
		</script>
<body <?php body_class(); ?>>

<div id="page" class="site">
	<!-- Head Top -->
	<div class='top-head'>
		<div class='container'>
			<div id="header-widget-area" class="head-left chw-widget-area widget-area" role="complementary">
				<div class="widget_text head-left-custom">
					<div class="textwidget custom-html-widget">
						<ul>
							<?php
							if( have_rows('header_contact') ):

								while ( have_rows('header_contact') ) : the_row();    	
									
									if( get_row_layout() == 'contact' ):

										if( have_rows('header_phone') ):?>
											<?php while( have_rows('header_phone') ) : the_row();                
												$phone = get_sub_field('phone');?>
												<li class="fa fa-phone"><a><?php echo $phone;?></a></li>													
													
											
											<?php endwhile; ?>
										<?php endif; ?><br><br>															
											
										<?php if (have_rows('header_adr')) :
											while( have_rows('header_adr') ) : the_row();                
												$adr = get_sub_field('adr');?>
												<li class="fa fa-map"><a><?php echo $adr;?></a></li>														      
											
											<?php endwhile; ?>
										<?php endif; ?>

									<?php endif;?>
								<?php endwhile; ?>
							<?php endif;?>	
														
						</ul>
					</div>
				</div>				 
			</div>

			<div id="header-widget-area" class="head-right chw-widget-area widget-area" role="complementary">
				<div class="widget_text head-left-custom">
					<div class="textwidget custom-html-widget">
						<ul>
						    <?php if(get_field ('instagram')) : ?>   
						    <li><a href="<?php the_field('instagram') ?>" target = "_blanc" class="fa fa-instagram fa-2x"></a></li>
							<?php endif; ?>
							<?php if(get_field ('you_tube')) : ?>
							<li><a href="<?php the_field('you_tube') ?>" target = "_blanc" class="fa fa-youtube fa-2x"></a></li>
							<?php endif; ?>
							<?php if(get_field ('facebook')) : ?>
							<li><a href="<?php the_field('facebook') ?>" target = "_blanc" class="fa fa-facebook fa-2x"></a></li>
							<?php endif; ?>
							<?php 
							if(get_field ('social_text')) : ?><br>
                                 <li><a class="lick-right"><?php echo the_field('social_text'); ?></a></li>								
						    <?php endif;?> 
							
                        </ul>
					</div>
				</div>
			 </div>
		</div>
	</div>
	<!-- End Top menu -->

	<header class="site-header">	

		<div class="site-header-main">
		
			<div class="site-branding">
				<?php if(get_field ('logo')) : ?>
					<img src="<?php the_field('logo'); ?>">
					<h1 style="color:#ffffff"><?php echo the_field('name_school');?></h1>
				<?php endif; ?>
			</div>	

			<div class="anchor-button">
				<a href="#classes">classes</a>  <a href="#about">about</a>  <a href="#gallery">gallery</a> 
		    </div>
			
		</div>
		
		
	</header>		




<?php get_footer(); ?>

