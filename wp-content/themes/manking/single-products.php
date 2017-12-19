<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div class="product_detail">
	<div class="container">
	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();?>
        <!-- Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><?php the_title();?>
                </h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Product Item Row -->
        <div class="row">

            <div class="col-md-5">
                <div id='carousel-custom' class='carousel slide' data-ride='carousel'>
						<div class='carousel-outer'>
							<!-- me art lab slider -->
							
							
							<?php 
							
							$img_id=get_post_meta(get_the_ID(),'product_image_1', true );
							$img_id2=get_post_meta(get_the_ID(),'product_image_2', true );
							$img_id3=get_post_meta(get_the_ID(),'product_image_3', true );
							$img_id4=get_post_meta(get_the_ID(),'product_image_4', true );
							$img_id5=get_post_meta(get_the_ID(),'product_image_5', true );
							?>
			
							
							<div class='carousel-inner '>
								<div class='item active'>
									<?php echo wp_get_attachment_image($img_id, 'full' ); ?>
								</div>
								<div class='item'>
									<?php echo wp_get_attachment_image($img_id2, 'full' ); ?>
								</div>
								<div class='item'>
									<?php echo wp_get_attachment_image($img_id3, 'full' ); ?>
								</div>
									
								<div class='item'>
									<?php echo wp_get_attachment_image($img_id4, 'full' ); ?>
								</div>
								<div class='item'>
									<?php echo wp_get_attachment_image($img_id5, 'full' ); ?>
								</div>
								
							</div>
						</div>
			
			<!-- thumb -->
			
			
						<ol class='carousel-indicators mCustomScrollbar meartlab'>
							<li data-target='#carousel-custom' data-slide-to='0' class='active'>
							<?php echo wp_get_attachment_image($img_id, 'full' ); ?></li>
							<li data-target='#carousel-custom' data-slide-to='1'>
							<?php echo wp_get_attachment_image($img_id2, 'full' ); ?>
							</li>
							<li data-target='#carousel-custom' data-slide-to='2'>
							<?php echo wp_get_attachment_image($img_id3, 'full' ); ?>
							</li>
							<li data-target='#carousel-custom' data-slide-to='3'>
							<?php echo wp_get_attachment_image($img_id4, 'full' ); ?>
							</li>
							<li data-target='#carousel-custom' data-slide-to='4'>
							<?php echo wp_get_attachment_image($img_id5, 'full' ); ?>
							</li>
							

						</ol>
            </div>
            <hr>
            <h3>Tags</h3>
            <?php
$posttags = get_the_tags();
$count=0;
if ($posttags) {
  foreach($posttags as $tag) {
    $count++;
    if (1 != $count) {?>
      <span class="btn btn-info"><?php echo $tag->name;?></span>
   <?php  }
  }
}
?>
<hr>
            </div>

            <div class="col-md-7">
                <?php the_content();?>
            </div>

        </div>
        <!-- /.row -->
		<?php endwhile;
		?>
		
		
							
							
        
		<div class="category_carou">
			<!-- Heading -->
			<div class="row">
				<div class="col-xs-12">
					<h3 class="page-header">Related Products</h3>
				</div>
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="products owl-carousel2">
				<?php 
					$terms        = get_the_terms( get_the_ID(), 'category' );
					$term_list    = wp_list_pluck( $terms, 'slug' );
					$related_args = array(
					  'post_type'      => 'products',
					  'posts_per_page' => 10,
					  'post_status'    => 'publish',
					  'post__not_in'   => array( get_the_ID() ),
					  'orderby'        => 'rand',
					  'tax_query'      => array(
					    array(
					      'taxonomy' => 'category',
					      'field'    => 'slug',
					      'terms'    => $term_list
					    )
					  )
					);
					$related = new WP_Query( $related_args );
 
					if( $related->have_posts() ):
					?><?php while( $related->have_posts() ): $related->the_post(); ?>
					<div class="prod">
					
						<a href="<?php echo get_permalink();?>"><div class="product real_pro">
							<div class="col_pro_real">
							<?php echo the_post_thumbnail();?>
							</div>
							<h3><?php the_title();?></h3>
						<span class="price"><ins><span class="amount">RS<?php echo get_post_meta(get_the_ID(),'price', true );?></span></ins></span>
							
						</div></a>
						
					</div>
					<?php endwhile;endif; wp_reset_postdata(); ?>
					
				</div>
			</div>
		</div>
    </div>
</div>

<?php get_footer(); ?>
<script type="text/javascript">
	$(document).ready(function(){

$(".owl-carousel2").owlCarousel({
    items: 4,
    dots: false,
    responsive:{
        0:{
            items:1,
            mouseDrag: true,
            touchDrag: true
        },
        480:{
            items:2,
            mouseDrag: true,
            touchDrag: true
        },
        750:{
            items:3,
            mouseDrag: true,
            touchDrag: true
        },
        1000:{
            items:4,
            dots: false,
            nav: false,
            mouseDrag: true,
            touchDrag: true
        }
    }
});
});
</script>
<style>
.carousel-inner {
  position: relative;
  width: 100%;
  min-height: 300px;
  }
 
 .carousel-control.right {
  right: 0;
  left: auto;
  background-image: none !important;
  background-repeat: repeat-x;
}
 .carousel-control.left {
  left: 0;
  right: auto;
  background-image: none !important;
  background-repeat: repeat-x;
}
#carousel-example-generic {
    margin: 20px auto;
    width: 100%;
}

#carousel-custom {
    margin: 20px auto;
    width: 297px;
}
#carousel-custom .carousel-indicators {
    margin: 10px 0 0;
    overflow: auto;
    position: static;
    text-align: left;
    white-space: nowrap;
    width: 100%;
    overflow:hidden;
}
#carousel-custom .carousel-indicators li {
    background-color: transparent;
    -webkit-border-radius: 0;
    border-radius: 0;
    display: inline-block;
    height: auto;
    margin: 0 !important;
    width: auto;
}
#carousel-custom .carousel-indicators li img {
    display: block;
    opacity: 0.5;
}
#carousel-custom .carousel-indicators li.active img {
    opacity: 1;
}
#carousel-custom .carousel-indicators li:hover img {
    opacity: 0.75;
}
#carousel-custom .carousel-outer {
    position: relative;
}
.carousel-indicators li img {
  height: 66px;
  width: 52px;}
</style>
