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

				
<?php
		// Start the loop.
		while ( have_posts() ) : the_post();?>

	<div class="container">
	
	<div class="post-thumbnail">
		<?php echo the_post_thumbnail('full');?>	</div><!-- .post-thumbnail -->
		<div class="row">
		<div class="col-sm-8">
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title();?></h1>	</header><!-- .entry-header -->
		
			<div class="entry-content">
				<?php the_content();?>		
			</div><!-- .entry-content -->
		</div>
		<!-- #post-## -->
			<?php endwhile;
				?>
						
				
		<div class="col-sm-4">
			<h5 class="heading_news">Latest News</h5>
			<ul class="container newslist">
				<?php 
					$args = array(
						'post_type'=> 'news',
						'order'    => 'DESC',				
						);
					$the_query = new WP_Query( $args );
					if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
				?>
				<li><a href="<?php echo get_permalink();?>"><?php  the_title();?></a></li>
				<?php endwhile;endif; wp_reset_postdata(); ?>
			</ul>
		</div>
		</div>
			</div>
			</div>
			</div>
		</main><!-- .site-main -->
	</div>
<?php get_footer(); ?>
<script>
var x = 0,
    container = $('.newslist'),
    items = container.find('li'),
    containerHeight = 0,
    numberVisible = 5,
    intervalSec = 2000;

if(!container.find('li:first').hasClass("first")){
  container.find('li:first').addClass("first");
}

items.each(function(){
  if(x < numberVisible){
    containerHeight = containerHeight + $(this).outerHeight();
    x++;
  }
});

container.css({ height: containerHeight, overflow: "hidden" });
  
function vertCycle() {
  var firstItem = container.find('li.first').html();
    
  container.append('<li>'+firstItem+'</li>');
  firstItem = '';
  container.find('li.first').animate({ marginTop: "-50px" }, 600, function(){  $(this).remove(); container.find('li:first').addClass("first"); });
}

if(intervalSec < 700){
  intervalSec = 700;
}

var init = setInterval("vertCycle()",intervalSec);

container.hover(function(){
  clearInterval(init);
}, function(){
  init = setInterval("vertCycle()",intervalSec);
});
</script>
<style>
.tagline {
  margin: 10px 0 0;
  text-align: center;
}

.tagline,
.tagline a {
  color: #aaa;
  text-decoration: none;
}

ul.newslist{
  width: 20em;
  padding: 0;
  margin: 0px auto 0;
  border-left: 2px solid #968181;
  box-shadow: 0px 2px 3px #eaeaea;
  margin-bottom:10px;

}

ul.newslist li {
  background: #f7f7f7;
  color: #000;
  list-style-type: none;
  padding: 1em;
  margin: 0;
  transition: background-color 0.5s;
}

ul.newslist li:nth-child(2) {
  color: #fff;
  background: #1998c4;
}
.newslist {
min-height:250px;
}
.heading_news{

    border-bottom: 4px solid;
    border-top:4px solid;
    padding: 11px;
    margin-top: 0px;
    font-weight: bold;
    font-size: 18px;

}
ul.newslist li a{
color:#000;
}
</style>