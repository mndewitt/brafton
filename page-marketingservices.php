<?php 
/*
**Template Name: Marketing Services Page
*/

get_header(); ?>

			<div id="content">
				<div class="graphical-header">
					<img src="/wp-content/themes/brafton/library/images/page-headers/blank_header.png">
					<h1><div class="inner">Our Marketing <strong>Services</strong></div></h1>
				</div>

				<?php brafton_share( 'top' ); ?>

				<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

				<div class="services_container">

						<div class="template_section brafton_offers">

							<div class="inner">

								<div class="content_container wrap">

									<div class="content_body">
										<?php $offer = get_field( 'brafton_offers' ); 

										echo $offer;

										?>
									</div>

								</div>

							</div>

						</div>

					<div class="template_section link_graphics gray_body">

					<div class="inner">

						<div class="link_graphics_inner">

								<?php

								/*This is a bit messy, but the order of these pages is important...*/

								$page_order = array(73683,4231,58827,54153,1714,1661,53375);
								
								foreach($page_order as $p_order) {

									$pages = get_pages("include=" . $p_order);


									foreach($pages as $page) { ?>

									<div class="d-1of4 t-1of4 m-all img_container">

										<a href="<?php echo get_page_link($page->ID); ?>">

											<?php $class = $page->post_name; ?>

											<div class="<?php echo $class; ?> sprite"></div>

										</a>

									</div>


								<?php

									} //end inner loop
								} //end outer loop

								//then, manually add client examples link...

								 ?>




								<div class="d-1of4 t-1of4 m-all img_container">
									<a href="/case-studies">
										<div class="client-examples sprite"></div>
									</a>
								</div>
		

						</div>

						</div>

					</div>

					<div class="template_section our_marketing_services">

						<div class="inner">

							<div class="content_container wrap">
								<h2>Our Marketing <strong>Services</strong></h2>
								<div class="content_body">
									<?php $services = get_field( 'our_marketing_services' ); 

									echo $services;

									?>
								</div>
							</div>

						</div>

					</div>

					<div class="template_section learn_more green_body">

					<div class="inner">

						<div class="content_container wrap">
							<h2><strong>Learn more</strong> about real results</h2>
							<div class="content_body">
								<div class="cta_image d-1of2 t-1of3 m-all">
									<?php 

										$selected_cta = get_field( 'cta_choice' );

										if( $selected_cta == 'Case Study' ) {
											$link = get_field( 'case_study' );
										} elseif(  $selected_cta == 'Testimonial' ) {
											$link = get_field( 'testimonial' );
										}
										
										$image = get_field( 'client_cta' );

										$src = $image['url'];

									?>

									<a href="<?php echo $link; ?>">
										<img src="<?php echo $src; ?>"/>
									</a>


								</div>
								
								<div class="learn_more_text d-1of2 t-2of3 m-all">
									<?php $learn = get_field( 'learn_more' ); 

									echo $learn;

									?>
								</div>
							</div>
						</div>

					</div>


				</div>

				<?php endwhile; endif; ?>

			</div>

		</div>

			<?php get_template_part( "footer-includes/fixed_footer" ); ?>

<?php get_footer(); ?>
