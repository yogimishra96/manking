<?php
/*
Template Name: Blogs_Template
*/
get_header();
?>
<div class="blog_banner_img">
		<img src="http://scrapbookingstation.com/wp-content/uploads/2013/05/BLOG-banner.jpg"></div>
</div>

				<div class="container">
						<?php 

							$args = array(
								'post_type'=> 'blogs',
								'order'    => 'DESC',
								
								);              

							$the_query = new WP_Query( $args );
							if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 

							?>
 <div class="well blog_cont">
      <div class="media">
      	<a class="pull-left" href="<?php echo get_permalink();?>">
      	<div class="thumblog">
    		<?php echo the_post_thumbnail();?>
  	</div>	</a>
  		<div class="media-body">
    		<h4 class="media-heading"><?php the_title();?></h4>
         
          <?php echo wp_trim_words( get_the_content(), 250 )?>
          <ul class="list-inline list-unstyled">
  			<li><span><i class="fa fa-calendar"></i> <?php echo get_the_date();?> </span></li>
           
            <li>|</li>
           
          
            <li>
          <a href="<?php echo get_permalink();?>" class="btn btn-info">Read More</a>            
            </li>
            
			</ul>
       </div>
    </div>
  </div>
  <?php endwhile;endif; wp_reset_postdata(); ?>
</div>

<?php get_footer(); ?>