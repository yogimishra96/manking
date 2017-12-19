<?php
/*
Template Name: News_Template
*/
get_header();
?>
   <div class="wrapper">
    <div class="box">
        <div class="row">
          
          
            <!-- main -->
            <div class="column" id="main">
			<div class="container">
			<div class="text-center">
				<h3 class="newsHeading">News</h3>
			</div>
                <div class="padding">
                    <div class="full inner_main">
                        <!-- content -->
                        <?php
							$args = array(
								'post_type'=> 'news',
								'order'    => 'DESC',
								);     
							$the_query = new WP_Query( $args );
							if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
							?>
                        <!--/top story-->
						<div class="clearfix"></div>
                        <div class="row">
							<div class="col-sm-4">
								<div class="pull-right img_news"><?php echo the_post_thumbnail();?></div>
							</div> 
							<div class="col-sm-8">
								<div class="" id="featured">   
								  <div class="page-header text-muted newsLHead">
									<a href="<?php echo get_permalink();?>"><?php the_title();?></a>
								  </div> 
								</div>
								<div class="new_sort_des"><?php echo wp_trim_words( get_the_content(), 25 )?>
								<br />
								<small class="text-muted"> <?php echo get_the_date(); ?> </small>
								<br />
								<div class="clearfix"></div>
								<a href="<?php echo get_permalink();?>" class="text-muted btn btn-info">Read More</a></div>
							</div>
                        </div>
                        <div class="blog-divider"></div>
                        <?php endwhile;endif; wp_reset_postdata(); ?>
                        
                        
                        
                        
                      <hr>
                        
                      
                    </div><!-- /col-9 -->
                </div><!-- /padding -->
            </div>            </div>
            <!-- /main -->
          
        </div>
    </div>
</div>
    <?php get_footer(); ?>
	<style>
	

	
	</style>