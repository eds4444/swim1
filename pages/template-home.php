<?php
/*
Template Name: Home
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<?php wp_head(); ?>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
 
		<script type="text/javascript">
		
			$(function() {
			
			$(window).scroll(function() {
			
			if($(this).scrollTop() != 0) {
			
			$('#toTop').fadeIn();
			
			} else {
			
			$('#toTop').fadeOut();
			
			}
			
			});
			
			$('#toTop').click(function() {
			
			$('body,html').animate({scrollTop:0},800);
			
			});
			
			});
		
		</script>
  
 
	</head>
<body>
	<div class="site">
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
			<div  class="header-logo-anchors">
				<div class="logo-name">
					<?php if(get_field ('logo')) : ?>
						<div class="logo">
							<img src="<?php the_field('logo'); ?>">
						</div>
						<div class="name">
							<h3><?php echo the_field('name_school');?></h3>
						</div>
					<?php endif; ?>
				</div>
				<div class="anchors">				
					<a href="#about"><?php the_field('anchor_about') ?></a>
					<a href="#classes"><?php the_field('anchor_classes') ?></a>   
					<a href="#gallery"><?php the_field('anchor_gallery') ?></a>
					<a href="#instructors"><?php the_field('anchor_instr') ?></a>
					<a href="#pricing"><?php the_field('anchor_pricing') ?></a>
					<a href="#sale"><?php the_field('anchor_sale') ?></a>
				</div>	 
			</div>	
		</header>
		
		<div class="slider">
		<?php masterslider(4); ?>
		</div>

		<hr>

		<section><a name="about" class="anchor"></a>
			<?php    
			if( have_rows('about') ):

				while ( have_rows('about') ) : the_row();
					
					if( get_row_layout() == 'about_text' ):
						$title = get_sub_field('title');
						$img = get_sub_field('img');
						$text = get_sub_field('text');?>

						<div class="about">
							<div class="about-img">                            
								<img class="img-singl" src="<?php  echo $img; ?>" alt="swim" >
							</div>
							<div class="about-title-text">                
								<h1><?php echo $title; ?></h1>
							
								<h3><?php echo $text; ?></h3>
							</div>
						</div>   
						
					<?php endif;?>
			
				<?php endwhile;?>

			<?php endif;?>
		</section>

		<hr>

		<section><a name="classes" class="anchor"></a>

			<?php
			if( have_rows('our_classes') ): ?>

				<div class="name-block">
					<h1><?php the_field('name_block_classes'); ?></h1>
				</div>

				<div class="classes">						

					<?php while ( have_rows('our_classes') ) : the_row();    	
						
						if( get_row_layout() == 'classes' ):

							if( have_rows('block_classes') ):?>
							
								<?php while( have_rows('block_classes') ) : the_row();                
									$img_classes = get_sub_field('img_classes');
									$title_classes = get_sub_field('title_classes');
									$text_classes = get_sub_field('text_classes');?>
									
									<div class="class">
										<div class="class-img">
											<?php echo wp_get_attachment_image( $img_classes['ID'], array( $img_classes['width'], $img_classes['height'] ) );?>
										</div>
										<div class="class-text">
											<h1><?php echo $title_classes;?></h1>
											<h3><?php echo $text_classes;?></h3>
										</div>
										
									</div> 
																
								<?php endwhile; ?>
							
							<?php endif; ?>									
						<?php endif;?>
					<?php endwhile; ?>
				</div>				
			<?php endif;?>
				
		</section>

		<hr>

		<section><a name="gallery" class="anchor"></a>   

			<?php
			if( have_rows('gallery') ): ?>

				<div class="name-block">
					<h1><?php the_field('name_gallery')  ?></h1>
					<h3><?php the_field('title_gallery')  ?></h3>
				</div>

				<div class="gallery">                  

					<?php while( have_rows('gallery') ) : the_row();               

						$singl_gallery = get_sub_field('singlе_gallery');?>

							<div class="singl-gallery">                                              
											
								<?php echo wp_get_attachment_image( $singl_gallery['ID'], array( $singl_gallery['width'], $singl_gallery['height'] ) );?>                           
								
							</div>               
					
					<?php endwhile;?>                        

				</div>           
				
			<?php endif; ?>    
		
		</section>

		<hr>

		<section><a name="instructors" class="anchor"></a>

			<?php     

			if( have_rows('instructors') ):?>

			    <div class="name-block">
					<h1><?php the_field('name_block_instructors') ?></h1>
					<h3><?php the_field('title_instructors') ?></h3>
				</div>


			<div class="instructors">   
				<?php while ( have_rows('instructors') ) : the_row();
						
					if( get_row_layout() == 'instr' ):

						if( have_rows('instructor') ): ?>

								
							<?php while( have_rows('instructor') ) : the_row();                
								
									$instr_img = get_sub_field('instr_img');
									$instr_name = get_sub_field('instr_name');
									$major = get_sub_field('major'); ?>

								<div class="single-instr"> 
									<div class="instr-img">
										<?php echo wp_get_attachment_image( $instr_img['ID'], array( $instr_img['width'], $instr_img['height'] ) );?> 
									</div>

									<div class="instr-text">

										<h1><?php echo $instr_name; ?></h1>

										<?php
										if( have_rows('instr_achievements') ):
									
											while( have_rows('instr_achievements') ) : the_row();                
												
												$instr_achievement = get_sub_field('instr_achievement');?>
												<ul>
													<li><h3><?php echo $instr_achievement;?></h3></li>
												</ul>
											<?php endwhile;                        
										
										endif;?>
								
										<h3><?php echo $major;?></h3>
										                     
									</div>
								</div>	
							
							<?php endwhile; ?>
									
						
						<?php endif;

					endif;

				endwhile; ?>

			</div>     
			
			<?php endif; ?>

		</section>

		<hr>

		<section><a name="pricing" class="anchor"></a>
			<div class="pricing">
				<?php             
				if( have_rows('pricing') ):?>

					<div class="name-block">
						<h1><?php the_field('name_pricing');?></h1>					
						<h3><?php the_field('title_pricing');?></h3>
					</div>
					<div class="pricing-block">
						<?php while ( have_rows('pricing') ) : the_row();
							
							if( get_row_layout() == 'pr' ):

								if( have_rows('type_pricing') ):
									
									while( have_rows('type_pricing') ) : the_row();
										
										$name_pricing = get_sub_field('name_pricing');
										$price = get_sub_field('price');?>

										<div class="single-pricing-block">
											<div class="name-pricing">
												<h1><?php echo $name_pricing; ?></h1>
											</div>
											<div class="price">
												<h3><?php the_field('pricing_period'); ?></h3><h1><?php echo $price; ?></h1><h3><?php the_field('pricing_currency'); ?></h3>
											</div>

											<?php if( have_rows('service_list') ):
												
												while( have_rows('service_list') ) : the_row();									
													
													$type_of_service = get_sub_field('type_of_service');?>

													<div class="type-service">														
														<h3><?php echo $type_of_service;?></h3>																					
													</div>
												<?php endwhile;									
											
											endif; ?>
										</div> 							
									<?php endwhile;						
								endif;
							endif;
						endwhile; ?>
					</div>
				<?php endif;?>

			</div>

		</section>

		<hr>

		<section><a name="sale" class="anchor"></a>
		  
			<?php			
				if( have_rows('sale_block') ):?>

                    <div class="name-block">
						<h1><?php the_field('name_sale_block') ?></h1>
						<h3><?php the_field('text_sale_block') ?></h3>
					</div>

					<?php
					while ( have_rows('sale_block') ) : the_row();
						
						if( get_row_layout() == 'sale' ):?>

                            <div class="sale-block">
								<?php if( have_rows('singl_sale') ):

									
									while( have_rows('singl_sale') ) : the_row();							    
										
										$name_sale = get_sub_field('name_sale');
										$foto_sale = get_sub_field('foto_sale');									
										$price_sale = get_sub_field('price_sale');
										$title_sale = get_sub_field('title_sale');
										$get_sale = get_sub_field('get_sale');
										$money_sale = get_sub_field('money_sale');
										$name_price_sale = get_sub_field('name_price_sale');
										$name_after_sale = get_sub_field('name_after_sale');
										$sale_top = round(100 * ($get_sale / $price_sale),0);?>


										<div class="single-sale">
											<div class="sale-top">
												<?php if ($sale_top > 0) : ?>																				   											
												<h3 class="sale-top-shift">-<?php echo $sale_top;?>%</h3>
													<?php endif;?>	
											</div>								   										                                        

											<div class="name-sale">
												<h1><?php echo $name_sale;?></h1>
											</div>
											<div class="foto-sale">
												<?php echo wp_get_attachment_image( $foto_sale['ID'], array( $foto_sale['width'], $foto_sale['height'] ) );?>
											</div>

											<?php 
											if ($sale_top > 0) :
												$sale_after = ($price_sale - $get_sale); ?>

												<div class="block-price-sale-sale-after">
													<div class="price-sale">
														<h3><?php echo $name_price_sale;?></h3>
														<h1 class="price-sale-shrift"><?php echo $price_sale;?></h1>
														<h3><?php echo $money_sale;?></h3>
													</div>
													<div class="sale-after">
													    <h3><?php echo $name_after_sale;?></h3>
														<h1><?php echo $sale_after;?></h1>
														<h3><?php echo $money_sale;?></h3>
													</div>
												</div>

											<?php else :?>

                                                <div class="price-sale-simple">
												    <h3><?php echo $name_price_sale;?></h3>
													<h1><?php echo $price_sale;?></h1>
													<h3><?php echo $money_sale;?></h3>
											    </div>

											<?endif;?>

											<div class="title-sale">
												<h3><?php echo $title_sale;?></h3>
											</div>									    
										</div>
									
									<?php endwhile;	?>								   
								
								<?php endif;?>
							</div>
						<?php endif;					
					endwhile;
				endif;?>
			

		</section>
		

		<div id = "toTop" ><?php the_field('up') ?></div>

		<div class="footer">

            
			<div class="date"><h3><?php echo date( 'Y' ); ?></h3></div>

			<div class="footer-name-shool"><h3><?php echo the_field('name_school');?></h3></div>

			<div class="footer-block-social">
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
			</div>


			<?php wp_footer(); ?>
		</div>

	</div>
	
	
	
</body>
</html>



