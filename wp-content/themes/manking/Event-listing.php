<?php
/*
Template Name: Event_Template
*/
get_header();
?>
    <section class="publicaciones-blog-home">
      <div class="container">
        <div class="">
          <h2>Our  <b>Event</b></h2>
          <div class="row-page row">
          <?php 
          $i=1;

					$args = array(
						'post_type'=> 'event',
						'order'    => 'DESC',
						
						);              

					$the_query = new WP_Query( $args );
					if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 

				
					?>
            <?php /* <div class="col-page col-sm-8 col-md-6">
              <a href="<?php echo get_permalink();?>" class="black fondo-publicacion-home">
                <div class="img-publicacion-principal-home">
                  <?php echo the_post_thumbnail();?>
                </div>
                <div class="contenido-publicacion-principal-home">
                  <h3><?php the_title();?></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec.<span>...</span></p>
                </div>
                <div class="mascara-enlace-blog-home">
                  <span>Read More</span>
                </div>
              </a>
            </div> */ ?>
          
            <div class="col-page col-sm-4 col-xs-6 col-xxs-12">
              <a href="<?php echo get_permalink();?>"  class="fondo-publicacion-home">
                <div class="img-publicacion-home">
                  <?php echo the_post_thumbnail();?>
                </div>
                <div class="contenido-publicacion-home">
                  <h3><?php the_title();?></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec.<span>...</span></p>
                </div>
                <div class="mascara-enlace-blog-home">
                  <span>Read More</span>
                </div>
              </a>
            </div>
            <?php 
            $i++;
            
            endwhile;endif; wp_reset_postdata(); ?>
          </div>
        </div>
      </div>
    </section>
    <?php get_footer(); ?>