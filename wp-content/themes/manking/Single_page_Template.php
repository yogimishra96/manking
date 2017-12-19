<?php
/*
Template Name: Single_Page_Template
*/
get_header();
?>
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/css.css" type="text/css" rel="stylesheet"/>
<link href="https://www.mankindpharma.com/css/responsive.css" rel="stylesheet" type="text/css" />
  
	<div id="content-container">
            <div class="banner  mainfrontpage">
                	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );?> 
					<img src="<?php echo $image[0]; ?>">
            </div>
            <div class="container clearfix">
            	<div class="off-canvas-navigation">
                	<a class="menu-button" href="javascript:;"><img src="https://www.mankindpharma.com/images/left-exp.png"/></a>
                </div>
            	 
				<aside class="F-left" role="navigation">
				  <h4>Our Company</h4>
				  <ul class="sidenav">
					<li class="active" ><a href="<?php echo get_site_url(); ?>/management">Management</a></li>

					<li ><a href="<?php echo get_site_url(); ?>/manufacturing">Manufacturing</a></li>
					<li ><a href="<?php echo get_site_url(); ?>/quality">Quality </a></li>
					
				</aside> 
                <div class="inner-wrap F-left" role="main">
                	
                  
						<h1><?php the_title();?></h1>
					<?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
                    
                    
              </div>
             
           
             <div class="parallax-banner clearfix">
              <div class="connect-bg bg-wrap F-left">
                	<div class="banner-content text-center">
                        <h2>Want to see our Products?</h2>
                        <p>With more than 1000 SKUs stocked in more than 1.8 million chemists and medical stores, Manking is one of the country’s leaders in top pharmaceutical products.</p>
                         <!--<input class="button" type="button" value="Contact us" name="Contact us"/>-->
                         <a href="http://mankingpharmaceutical.com/products/" class="btn btn-info">Know More</a>
                	</div>
                </div>
            </div>
        </div>
  <style>
  .connect-bg {
    background: url(https://www.mankindpharma.com/images/gray2-bg.jpg) top center repeat;
    /* height: 368px; */
    color: white;
        margin-top: 80px;
    margin-bottom: 80px;
}
.banner-content {
 padding: 50px;
}
  </style>
    <?php get_footer(); ?>
	<script type="text/javascript" src="https://www.mankindpharma.com/js/custom.js"></script>