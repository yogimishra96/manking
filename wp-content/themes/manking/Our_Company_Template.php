<?php
/*
Template Name: OurCompany_Template
*/
get_header();
?>
<div class="banner_img">
<img src="<?php echo get_template_directory_uri(); ?>/images/pharma-chemical-erp.jpg">
</div>
 <div class="section">
            <div class="container">
                
                <div class="row">
                
                <div class="overView">
               <h2 class="text-center">OVERVIEW</h2>
               <hr>
                <p>
					<strong>MANKING</strong> symbolizes QUALITY. MANKING is India’s Most Emerging &amp; Fastest Growing Pharmaceutical Company.

					<strong>MANKING PHARMACEUTICAL PRIVATE LIMITED</strong>, came into existence in 2008. In 2016, the company was formed into a legal corporation. However, it actively started working as a fully integrated pharmaceutical company in 2017. We provide a wide range of products – Antibiotic, Antifungal, NSAIDs, Gastrointestinal, Anthelmintic, Cardiovascular, Dermal, Erectile Dysfunction, and several other categories – across the nation.

					We take great pride in the success of our products ranging from Pharma,

					Since its inception MANKING aspires to be customer-centric and a fastest growing leader in the Indian markets. Committed towards a healthier and happier world, we strive to provide accessible and affordable healthcare.

					Our Total Quality Management system adheres to cGMP regulation and we endeavour to achieve and present the best quality standards in the industry. Our unique assets and skills are always oriented towards developing novel and differentiating scientific solutions through innovative products designed to improve the quality of life.

					MANKING aspires to aid the community in leading a healthy life through two parallel objectives: formulating, developing and commercializing medicines, and delivering affordable and accessible medication that satisfies urgent medical needs.
				</p>
				<p>
					<strong>TEAM</strong>;-

					Team MANKING is an association of the leading pharmaceutical logistic solution provider in India &amp; well known pharma marketing team. Team MANKING is the culmination of Great team of Sales, Marketing, and Logistic with Visionary Leader &amp; motivated Team of Quality professionals. MANKING is about the right people with the right expertise delivering service to society that has meaning.
					Some companies Believe In The Power Of Numbers
					Some companis Believe In The Power Of Technology
					MANKING company Believe In The Power Of People
					Because positive, focused &amp; committed people can come together to build a different kind of healthcare company.
					manking pharmaceutical has a team of highly ambitious and successful leaders. They recognize the importance of nurturing relationships that reflect culture of unwavering ethics and mutual respect.
                </p>
                <hr>
				</div>
				<div class="wechoosehead text-center">
				
				<h2>Why Choose Us</h2>
				</div>
                    <div class="col-md-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/72_B pharmCourse Reviews.jpg"
                        class="img-quadrata center-block" >
                        <h4 class="text-center customHead" >Quality</h4>
                        
                        <p class="text-center">Manking has a structured Quality Management System (QMS) and Risk-based approach to follow cGxP compliance. The emphasis is on right quality materials, developed methods, well designed machines and trained manpower.</p>
                        <div class="knowmorebtn text-center"><a href="<?php echo get_site_url(); ?>/quality" class="btn btn-info">Know More</a></div>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/5.jpg"
                        class="center-block img-quadrata" >
                        <h4 class="text-center customHead" >Manufacturing</h4>
                        
                        <p class="text-center">Manking state-of-the-art manufacturing facilities are designed as per USFDA guidelines. The facilities are constructed and designed with maximum consideration given to current Good Manufacturing Practices (cGMP).</p>
                        <div class="knowmorebtn text-center"><a href="<?php echo get_site_url(); ?>/manufacturing" class="btn btn-info">Know More</a></div>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/pharma-pcd-in-india-250x250.png"
                        class="center-block img-quadrata">
                        <h4 class="text-center customHead">Management</h4>
                        
                        <p class="text-center">Manking Pharma has a highly-regarded Board of Directors that work in unison for the betterment of society along with the company. Our goal is to provide quality products at affordable prices to all sections of society.</p>
                       <div class="knowmorebtn text-center"><a href="<?php echo get_site_url(); ?>/management" class="btn btn-info">Know More</a></div>
                    </div>
                </div>
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
 <?php get_footer(); ?>
 
 <style>
 
  .img-quadrata {
       border-radius:50%;
       width:250px;
       height:250px;
}


small{
	text-align:center;
        font-size:1.5em; 
        text-decoration:underline;
        color:gray;
}
.banner_img{
margin-bottom:50px;
}
.customHead{
    margin-top: 13px;
    font-weight: bold;
}
.overView{
padding:15px;
}
.overView p{
text-align:jutify;
}
.wechoosehead {
margin-bottom: 70px;
    margin-top: 80px;
}
.wechoosehead h2 , .overView h2{
font-weight:bold;
} 
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

.banner-content h2 {
 font-weight:bold; 
 }
 </style>