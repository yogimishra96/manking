<?php
/*
Template Name: ContactUs_Template
*/
get_header();
?>
  <!-- Sections -->
        <section id="contact">

            <div id="map1"></div>

            <div class="container text-center">

                <!-- Example row of columns -->
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="contact-form-area">
                            
                                <h3>Contact</h3>
			
							<?php echo do_shortcode('[contact-form-7 id="15" title="Contact form 1"]')?>
			
               
                        </div>	
                    </div>
					<div class="col-md-5 col-md-offset-8 col-sm-12 col-xs-12">
                        <div class="contact-form-area addressarea1">
                            
                                <h3>Our Office</h3>
					<div>
                        2217 Washington Blvd<br />
                        Washington DC<br />
                        #(703) 1234 1234<br />
                        service@company.com<br />
                        </div>								

                        </div>	
                    </div>
                </div>
            </div> <!-- /container -->       
        </section>

           
  
    <?php get_footer(); ?>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChQiN5DsVN256dmDg-jDCAr3UXcbPhssU"></script>

<script type="text/javascript">
    jQuery(function ($) {
        function init_map1() {
            var myLocation = new google.maps.LatLng(38.885516, -77.09327200000001);
            var mapOptions = {
                center: myLocation,
                zoom: 16,
				scrollwheel: false
            };
            var marker = new google.maps.Marker({
                position: myLocation,
                title: "Property Location"
            });
            var map = new google.maps.Map(document.getElementById("map1"),
                mapOptions);
            marker.setMap(map);
        }
        init_map1();
    });
	
</script>

	