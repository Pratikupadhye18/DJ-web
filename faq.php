<?php include("include/headerf.php")?>
	    <?php
	$banner = mysqli_query($conn2,"Select * from crew3 where slug = 'faq'");
	while($val = mysqli_fetch_array($banner)){
		$faq_photo = 'uploads/inner_pages/'.$val['photo'] ;
		$faq_name = $val['name'] ;
	}
	?>
		<!-- START SECTION TOP -->
		<section class="section-top" style="background-image: url(<?php echo $faq_photo; ?>);  background-size:cover; background-position: center center;">
			<div class="container">
				<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
					<div class="section-top-title">
						<h1><?php echo $faq_name; ?></h1>
					</div><!-- //.HERO-TEXT -->
				</div><!--- END COL -->
			</div><!--- END CONTAINER -->
		</section>	
		<!-- END SECTION TOP -->	
		
		<!-- START FAQ -->
		<section class="template_faq section-padding">
			<div class="container">
				<div class="row">	
					<?php
					$faq = "Select * from reviews_detail where status = 'on'";
					$result = mysqli_query($conn2,$faq);
					while($row = mysqli_fetch_array($result)){
					?>				
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="faq_desc">
							<p class="question"><span>Question:</span><?php echo $row['c_name']; ?></p>
							<?php echo $row['c_review']; ?>
						</div>
					</div>
					<?php
					}
					?>
					
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END FAQ -->
											
<?php include ('include/footer.php') ?>