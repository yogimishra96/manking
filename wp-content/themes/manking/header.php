<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700" rel="stylesheet"> 
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.css" media="screen">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.carousel.css" media="screen">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css" media="screen">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/manking.css">
<link href="https://www.mankindpharma.com/css/slimmenu.css" rel="stylesheet" type="text/css" />
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	
	
</head>
<?php global $redux_demo;?>
<body>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Send Mail</h4>
      </div>
      <div class="modal-body">
	  
	  <?echo do_shortcode('[contact-form-7 id="81" title="Contact form home"]');?>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<section class="header-section">
		<div class="header">
			<div class="container">
				<div class="row">
					<div class="col-sm-2 col-xs-12">
					<a href="<?php echo get_site_url(); ?>">
						<div class="logo">
						
							<img src="<?php echo $redux_demo['opt-media']['url'];?>" alt="" />
						</div>
						</a>
					</div>
					<div class="col-sm-10 col-xs-12 postion_rel">
						<div id="navigation">
				      <ul class="slimmenu">
				      <li class="active"><a href="<?php echo get_site_url(); ?>">Home</a></li>
					<li><a href="<?php echo get_site_url(); ?>/about-us">About Us</a></li>
				        <li class=""><a href="<?php echo get_site_url(); ?>/Our-Company">Our Company</a>
				          <ul>
				            
				            <li><a href="<?php echo get_site_url(); ?>/management">Management</a></li>
				            <li><a href="<?php echo get_site_url(); ?>/manufacturing">Manufacturing</a></li>
				            <li><a href="<?php echo get_site_url(); ?>/quality">Quality </a></li>            
				                       
				          </ul>
				        </li>
       
					<li><a href="<?php echo get_site_url();?>/products">Products</a></li>
					<li><a href="<?php echo get_site_url(); ?>/career">Career</a></li>
					<li class=""><a href="#">Media</a>
				          <ul>
				            
				            <li><a href="<?php echo get_site_url();?>/events">Event</a></li>
				            <li><a href="<?php echo get_site_url();?>/news">News</a></li>
				                        
				                       
				          </ul>
				        </li>
					
					 <li><a href="<?php echo get_site_url(); ?>/ALLIANCE">Alliance</a></li>
				
					<li><a href="<?php echo get_site_url(); ?>/contact-us">Contact Us</a></li>
                                        <li><a class="sendmail_btn btn btn-info" data-toggle="modal" data-target="#myModal" href="javascript:void(0)">Send Mail</a></li>
    </div>
    
<style>
  	
	
  </style>
<!--<div class="gTranslate" id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>-->
  </section>
					</div>
				</div>
			</div>
		</div>
	</section>
	

	
