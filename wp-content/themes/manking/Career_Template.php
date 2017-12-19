<?php
/*
Template Name: Career_Template
*/
get_header();
if(isset($_REQUEST['submit'])){
	print_r($_REQUEST);die;
}

?>
  <div class="product_detail">
	<div class="container">
        <!-- Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Job Name
                    <small>Item Subheading</small>
                </h3>
            </div>
        </div>
        <!-- /.row -->
		<div class="">
			<img src="<?php bloginfo('template_url'); ?>/images/career_banner.jpg" alt="" />
		</div>
		<br />
		<div class="row ">
			<div class="col-xs-12 col-sm-6 section-top-30">
			<?php 				$args = array(				'post_type'=> 'postjob',				'order'    => 'DESC',				);				$the_query = new WP_Query( $args );				if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 				?>				<div class="row">					<div class="col-xs-12">						<h4 class="heading_left underline_left">Job Profile :</h4>						<p class="text-justify">							<?php the_content();?>						</p>					</div>
				</div>				<div class="row">					<div class="col-xs-12">						<h5 class="heading_left underline_left">Job Description</h5>					</div>
					<div class="col-xs-12">
						<p><strong>Job Code : </strong> <?php echo get_post_meta(get_the_ID(),'job_code', true );?></p>
					</div>
					<div class="col-xs-12">
						<p><strong>Job Title : </strong><?php the_title();?></p>
					</div>
					<div class="col-xs-12">
						<p><strong>Experience : </strong><?php echo get_post_meta(get_the_ID(),'experience', true );?></p>
					</div>
					<div class="col-xs-12">
						<p><strong>Skills Required : </strong><?php echo get_post_meta(get_the_ID(),'skills', true );?></p>
					</div>
					<div class="col-xs-12">
						<p><strong>Role Category : </strong><?php echo get_post_meta(get_the_ID(),'role', true );?></p>
					</div>
					<div class="col-xs-12">
						<p><strong>Salary : </strong><?php echo get_post_meta(get_the_ID(),'salary', true );?></p>
					</div>
					<div class="col-xs-12">
						<p><strong>Notice Period : </strong><?php echo get_post_meta(get_the_ID(),'notice_period', true );?></p>
					</div>
				</div>
				<hr>
				<?php endwhile;endif; wp_reset_postdata(); ?>
			</div>
			<div class="col-xs-12 col-sm-6 section-top-30">
				<div class="row">
					<div class="col-xs-12">
						<h4 class="heading_left underline_left">Apply for This Job</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<form class="form_dgn_1" action='' method="post">
							<div class="row">
								<div class="form-group col-sm-6">
									<input id="fname" class="form-control bg-default has-feedback" name="fname" placeholder="First Name *" required="" type="text">
								</div>
								<div class="form-group col-sm-6">
									<input class="form-control bg-default" name="lastName" placeholder="Last Name *" required="" type="text">
								</div>
								<div class="clearfix visible-sm-block"></div>
								<div class="form-group col-sm-6">
									<input class="form-control bg-default" name="email" placeholder="Email *" required="" type="email">
								</div>
								<div class="form-group col-sm-6">
									<input class="form-control bg-default" name="number" pattern="[0-9]{10}" title="Phone number" placeholder="Mobile *" required="" type="text">
								</div>
								<div class="clearfix visible-sm-block"></div>
								<div class="col-md-12"><p>Job Category</p></div>
								<div class="form-group col-md-12">
									<select name="select_type" class="form-control" required="required" style="width:100%">
									<option value="">--Select Job--</option>
										<?php 

							$args = array(
								'post_type'=> 'postjob',
								'order'    => 'DESC',
								
								);              

							$the_query = new WP_Query( $args );
							if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 

							?>
										<option value="<?php the_title();?>"><?php the_title();?></option>
										
										<?php endwhile;endif; wp_reset_postdata(); ?>
									</select>
								</div>
								<div class="clearfix visible-lg-block visible-md-block visible-xs-block"></div>
								<div class="col-xs-12  form-group section-top-25">
								<textarea name="message" class="form-control bg-default textarea-align" rows="4" placeholder="Message *" required=""></textarea>
								</div>
								<div class="form-group col-xs-12">

									<input class="form-control bg-default" name="resume" required="" type="file">
								</div>
								<div class="clearfix visible-xs-block visible-sm-block visible-md-block visible-lg-block"></div>
								<div class="col-md-12 text-center">
									<button type="submit" name="submit" class="btn btn-info">Apply</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>
  
    <?php get_footer(); ?>