<?php
/*
Template Name: AboutUs_Template
*/
get_header();
?>
  <style>



.wel h1{font-weight:700; color:#fff}.brk{height:4px; border-radius:4px; background:#d9534f; margin:25px auto; display:block; width:60px}
.abs-back{background:rgba(29, 21, 24, 0.4); position:absolute; height:100%; width:100%; left:0; top:0}
/* who we */
.who-we{margin-top:50px; margin-bottom:50px}
.who-we h2{color:#d9534f;}
/* cards*/
.cards-row{padding-top:70px; padding-bottom:50px; background:url(http://www.srreesenthilagencies.com/v1/images/slider/bg1.jpg)}
.thumbnail{padding:0; border-radius:0; border:none; box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12)}
.thumbnail>img{width:100%; display:block}
.thumbnail h3{font-size:26px; color:#336}
.thumbnail h3,.card-description{margin:0; padding:8px 0; border-bottom:solid 1px #eee; text-align:center}
.thumbnail p{padding-top:8px; font-size:20px}
.thumbnail .btn{border-radius:0; box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12); font-size:20px}
.team-pic{height:150px !important; width:150px !important; border-radius:50%; margin-top:-75px; box-shadow:0 2px 5px 0 rgba(0,0,0,.4),0 2px 10px 0 rgba(0,0,0,.5); transition:all .2s ease-out}
.thumbnail:hover .team-pic{height:200px !important; width:200px !important; margin-top:-100px}
.thumbnail p.social{padding-top:15px; text-align:center}
.social a{color:#FFF; font-size:18px !important}
.social i.fa{height:36px; width:36px; text-align:center; line-height:36px; background:#069; border-radius:50%}
.social i.fa.fa-facebook{background:#43609C}
.social i.fa.fa-twitter{background:#2CA8D2}
.social i.fa.fa-linkedin{background:#428099}
.social i.fa.fa-google-plus{background:#ce4d39}
</style>
  
<div class="container who-we">

	<div class="wel-info text-center">
		<h2>Who We Are?</h2>
		<span class="brk"></span>
		<?php
$post = get_post(16); //assuming $id has been initialized
setup_postdata($post);
the_content();
wp_reset_postdata();
?>

		</div>
</div>

<div class="container-fluid cards-row">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
				<div class="thumbnail">
				  <img src="<?php bloginfo('template_url'); ?>/images/header.jpg" alt="about us page design using bootstrap">
					<img class="team-pic" src="http://mankingpharmaceutical.com/wp-content/uploads/2017/04/MG_5296-copy.jpg">
				  <div class="caption">
					<h3>Mr Ramdayal meena</h3>
					<p class="card-description">Mr Ramdayal meena,managing director, the founder of MANKING Group, is one of the most reputed business leaders in the pharmaceutical industry.
</p>
					<p class="social"><a href=""><i class="fa fa-facebook"></i></a> <a href=""><i class="fa fa-twitter"></i></a> <a href=""><i class="fa fa-linkedin"></i></a> <a href=""><i class="fa fa-google-plus"></i></a></p>
				  </div>
				</div>
			</div>
  
		</div>
	
	</div>
</div>
		
  
    <?php get_footer(); ?>