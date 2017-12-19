<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="single_page_in">
				<div class="container_single">

				<div class="container">
<?php
		// Start the loop.
		while ( have_posts() ) : the_post();?>
	
	<div class="post-thumbnail">
		<?php echo the_post_thumbnail('full');?>	</div><!-- .post-thumbnail -->


	<header class="entry-header">
		<h1 class="entry-title"><?php the_title();?></h1>	</header><!-- .entry-header -->

	<div class="entry-content">
	
		<?php the_content();?>
		
	</div><!-- .entry-content -->

	
	

<!-- #post-## -->
<?php endwhile;
		?>
				
		<div class="category_carou">
			<!-- Heading -->
			<div class="row">
				<div class="col-xs-12">
					<h3 class="page-header">Related Blogs</h3>
				</div>
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="blogs">
					<?php
						$args = array(
							'post_type'=> 'blogs',
							'order'    => 'DESC',
							'post__not_in' => array (get_the_ID()),
							'posts_per_page'=>4,
							);
						$the_query = new WP_Query( $args );
						if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
					?>
					<div class="col-sm-3">
						<div class="product blogs">
							<a href="<?php echo get_permalink();?>">
							<div class="rel_blog_img">
							<?php echo the_post_thumbnail();?>
							</div>
							<h3><?php the_title();?></h3>
								
							</a>
						</div>
					</div>
					<?php endwhile;endif; wp_reset_postdata(); ?>
				</div>
			</div>
		</div>		
		</div>
		</div>
		</main><!-- .site-main -->
	</div>
	</div>
<?php get_footer(); ?>
