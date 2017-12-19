<?php
/*
Template Name: Product_Template
*/
get_header();
?>
 <div class="content_mn">
	<div class="container">
		<div class="category_carou">
			<!-- Heading -->
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header">Products</h3>
				</div>
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="products">
					<?php
						$args = array(
						'post_type'=> 'products',
						'order'    => 'DESC',
						);              
						$the_query = new WP_Query( $args );
						if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
					?>
					<div class="col-sm-4 col-xs-6 col-xxs-12">
						<div class="product">
							<a href="<?php echo get_permalink();?>">
							<div class="zoomin" ><?php echo the_post_thumbnail();?></div>
							<div class="detail_rk">
								<h3><?php the_title();?></h3></a>
								<span class="price">
									<ins><span class="amount">RS<?php echo get_post_meta(get_the_ID(),'price', true );?></span></ins>
								</span>
								<hr>
								<?php
									$posttags = get_the_tags();
									$count=0;
									if ($posttags) {
										foreach($posttags as $tag) {
										$count++;
										if (1 != $count) {?>
										<span class="btn btn-info pro_tag"><?php echo $tag->name;?></span>
										<?php  }
										}
									}
								?>
								<hr>
								<a class="btn btn-info" href="<?php echo get_permalink();?>">More Details</a>
							</div>
						</div>
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
			$("#myModalPro").modal('show');
		});
	</script>
	<div id="myModalPro" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Product List</h4>
				</div>
				<div class="modal-body">
					<div style="height:350px;overflow:scroll;">
						<table width="100%" style="border-color:#000;" border="1" align="center" cellpadding="5" cellspacing="0">
							<tbody>
							<tr>
								<td style="color:#FFFFFF;" colspan="5" align="center" valign="middle" bgcolor="#353ED9">LIST OF NLEM PRODUCTS WITH REVISED  MRP EFFECTIVE FROM APRIL 2016</td>
							</tr>
							<tr height="20">
								<td style="color:#FFFFFF;" width="86" align="center" valign="middle" bgcolor="#1c2292">S.No.</td>
								<td style="color:#FFFFFF;" width="242" align="left" valign="middle" bgcolor="#1c2292">PRODUCT NAME</td>
								<td style="color:#FFFFFF;" width="101" align="center" valign="middle" bgcolor="#1c2292">PACK SIZE</td>
								<td style="color:#FFFFFF;" width="150" align="center" valign="middle" bgcolor="#1c2292">OLD MRP (Rs)</td>
								<td style="color:#FFFFFF;" width="207" align="center" valign="middle" bgcolor="#1c2292">REVISED MRP EFFECTIVE FROM APRIL 2016 (Rs)</td>
							</tr> 
							<?php 
								$i=1;
								$args = array(
									'post_type'=> 'products',
									'order'    => 'DESC',
									
									);
								$the_query = new WP_Query( $args );
									if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
							?>
							<tr>
								<td width="86" align="center" valign="middle" bgcolor="#F2FAFF"><?php echo $i;?></td>
								<td width="242" align="left" valign="middle" bgcolor="#F2FAFF"><?php the_title();?></td>
								<td width="101" align="center" valign="middle" bgcolor="#F2FAFF"><?php echo get_post_meta(get_the_ID(),'pack_size', true );?></td>
								<td width="150" align="center" valign="middle" bgcolor="#F2FAFF"><?php echo get_post_meta(get_the_ID(),'old_price', true );?></td>
								<td width="207" align="center" valign="middle" bgcolor="#F2FAFF"><?php echo get_post_meta(get_the_ID(),'price', true );?></td>
							  </tr>
							  <?php 
							  $i++;
							endwhile;endif; wp_reset_postdata(); ?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>