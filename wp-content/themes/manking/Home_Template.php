<?php
/*
Template Name: Home_Template
*/
get_header();
?>
  
  
	<section class="banner-section">
		<div class="banner-inner">
			<div class="banner-slide">
                         <?php putRevSlider("home"); ?>
				<!--<img src="<?php bloginfo('template_url'); ?>/images/banner-slide-1.jpg" alt="" /> -->
			</div>
		</div>
	</section>
	

<?php
$post = get_post(16); //assuming $id has been initialized
setup_postdata($post);
?>

	<section class="about-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-xs-6">
					<div class="about-section-block">
						<?php echo the_post_thumbnail()?>
					</div>
				</div>
				<div class="col-sm-6 col-xs-6">
					<div class="about-section-block">
						<h2><?php the_title();?></h2>
						<?php the_content();?>
						<a href="<?php echo get_site_url(); ?>/about-us" class="btn btn-info read-more">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
wp_reset_postdata();
?>
	<section class="parallax-section">
		<div class="photo para-1" data-stellar-background-ratio="0.5">
			<div class="parallax-type-1">
				<div class="parallax-type-1-inr gallery">
						<ul class="gallery clearfix">
							<li>
								<a href="<?php echo $redux_demo['youtubevideo'];?>" rel="prettyPhoto" title="YouTube demo">
									<i class="fa fa-play"></i>
								</a>
							</li>
						</ul>
						<?php
$post = get_post(66); //assuming $id has been initialized
setup_postdata($post);
?>
						<h3><?php echo wp_trim_words( get_the_content(), 25 )?></h3>
						
					<?php
wp_reset_postdata();
?>
					
				</div>
			</div>
		</div>
		<div class="photo para-2" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="parallax-type-2">
					<div class="parallax-type-2-inr">
						<?php
$post = get_post(53); //assuming $id has been initialized
setup_postdata($post);
?>
						<h3>Our Company</h3>
						<?php echo wp_trim_words( get_the_content(), 25 )?><br>
					<a href="<?php echo get_permalink();?>" class="btn btn-info read-more">Read More</a>
					<?php
wp_reset_postdata();
?>
					</div>
				</div>
			</div>
		</div>
		<div class="photo para-3" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="parallax-type-3">
					<div class="parallax-type-3-inr">
						<?php
$post = get_post(56); //assuming $id has been initialized
setup_postdata($post);
?>
						<h3>Alliance</h3>
						<?php echo wp_trim_words( get_the_content(), 25 )?><br>
					<a href="<?php echo get_permalink();?>" class="btn btn-info read-more">Read More</a>
					<?php
wp_reset_postdata();
?>
					</div>
				</div>
			</div>
		</div>
		<div class="photo para-4" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="parallax-type-2">
					<div class="parallax-type-2-inr">
						<?php
$post = get_post(59); //assuming $id has been initialized
setup_postdata($post);
?>
						<h3>Product</h3>
						<?php echo wp_trim_words( get_the_content(), 25 )?><br>
					<a href="<?php echo get_site_url(); ?>/products" class="btn btn-info read-more">Read More</a>
					<?php
wp_reset_postdata();
?>
					</div>
				</div>
			</div>
		</div>
		<div class="photo para-5" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="parallax-type-3">
					<div class="parallax-type-3-inr">
						<?php
$post = get_post(61); //assuming $id has been initialized
setup_postdata($post);
?>
						<h3>Media</h3>
						<?php echo wp_trim_words( get_the_content(), 25 )?><br>
					<a href="<?php echo get_permalink();?>" class="btn btn-info read-more">Read More</a>
					<?php
wp_reset_postdata();
?>
					</div>
				</div>
			</div>
		</div>
		<div class="photo para-6" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="parallax-type-2">
					<div class="parallax-type-2-inr">
					<?php
$post = get_post(64); //assuming $id has been initialized
setup_postdata($post);
?>
						<h3>Careers</h3>
						<?php echo wp_trim_words( get_the_content(), 25 )?><br>
					<a href="<?php echo get_site_url(); ?>/career" class="btn btn-info read-more">Read More</a>
					<?php
wp_reset_postdata();
?>
					</div>
				</div>
			</div>
		</div>
		<div class="photo para-7" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="parallax-type-3">
					<div class="parallax-type-3-inr">
					<?php 

							$args = array(
								'post_type'=> 'news',
								'order'    => 'DESC',
								'posts_per_page'=>1
								);              

							$the_query = new WP_Query( $args );
							if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 

							?>
						<h3>Latest News</h3>
						<?php echo wp_trim_words( get_the_content(), 25 )?>
						<br>
					<a href="<?php echo get_permalink();?>" class="btn btn-info read-more">Read More</a>
					<?php endwhile;endif; wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="col-3-icon">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="info-sm">
						<h3>My Blogs</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
					</div>
				</div>
			</div>
			<div class="row">
			<?php 

							$args = array(
								'post_type'=> 'blogs',
								'order'    => 'ASC',
								'posts_per_page'=>3
								);              

							$the_query = new WP_Query( $args );
							if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 

							?>
				<div class="col-sm-4 col-xs-12">
					<div class="col-3-icon-block">
						<div class="blog_imgs"><?php echo the_post_thumbnail();?></div>
						<h4><a href="<?php echo get_permalink();?>"><?php the_title();?></a></h4>
						<?php echo wp_trim_words( get_the_content(), 16 )?>
					</div>
				</div>
				<?php endwhile;endif; wp_reset_postdata(); ?>
				
			</div>
		</div>
	</section>
	
	<section class="client-testimonial">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="testimonial-inner">
						<h3>Client Says</h3>
						<div class="testimonial dot_dgn_1">
						<?php 

							$args = array(
								'post_type'=> 'testimonials',
								'order'    => 'ASC'
								);              

							$the_query = new WP_Query( $args );
							if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 

							?>
							<div class="item">
								<div class="client-avatar">
									<?php echo the_post_thumbnail();?>
								</div>
								<?php the_content(); ?>
								<div class="client-name">
									<h5><?php the_title(); ?></h5>
								</div>
							</div>
							<?php endwhile;endif; wp_reset_postdata(); ?>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
  
    <?php get_footer(); ?>