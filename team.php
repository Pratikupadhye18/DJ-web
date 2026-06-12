<?php include("include/headerf.php")?>

<?php
	$banner = mysqli_query($conn2,"Select * from crew3 where slug = 'team'");
	while($val = mysqli_fetch_array($banner)){
		$team_photo = 'uploads/inner_pages/'.$val['photo'] ;
		$team_name = $val['name'] ;
	}
	?>
	<!-- START SECTION TOP -->
	<section class="section-top" style="background-image: url(<?php echo $team_photo ?>);  background-size:cover; background-position: center center;">
		<div class="container">
			<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
				<div class="section-top-title">
					<h1><?php echo $team_name ?></h1>
				</div><!-- //.HERO-TEXT -->
			</div><!--- END COL -->
		</div><!--- END CONTAINER -->
	</section>	
	<!-- END SECTION TOP -->

	<!-- START TEAM MEMBERS -->
	<section class="our_team section-padding">
	   <div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="section-title">
						<h2>Meet Creative Team</h2>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout established fact that a reader will.</p>
					</div>
				</div>
			</div>				
			<div class="row">
			    <div class="col-lg-4 col-sm-6 col-xs-12">
					<div class="single-team-home">
						<div class="img"><img src="assets/img/team/ceo.jpg" class="img-fluid" alt=""></div>
						<div class="team-content-home">
							<h3>Barun Kumar Sarkar</h3>
							<p>CEO</p>
							<ul class="social-home">
								<li><a href="#" class="facebook-home"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="twitter-home"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="instagram-home"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div><!-- END COL -->	
				<!-- 
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="single-team-home">
						<div class="img"><img src="assets/img/team/t1.png" class="img-fluid" alt=""></div>
						<div class="team-content-home">
							<h3>Arpita</h3>
							<p>Graphic Designer</p>
							<ul class="social-home">
								<li><a href="#" class="facebook-home"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="twitter-home"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="instagram-home"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div><!-- END COL -->
			
				<!-- <div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="single-team-home">
						<div class="img"><img src="assets/img/team/t2.png" class="img-fluid" alt=""></div>
						<div class="team-content-home">
							<h3>Rituparna</h3>
							<p>Graphic Desiner</p>
							<ul class="social-home">
								<li><a href="#" class="facebook-home"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="twitter-home"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="instagram-home"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div> 
					</div>
				</div><!-- END COL --> 
				
				<!-- 
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="single-team-home">
						<div class="img"><img src="assets/img/team/t3.png" class="img-fluid" alt=""></div>
						<div class="team-content-home">
							<h3>Souvik Ghosh</h3>
							<p>Video Editor</p>
							<ul class="social-home">
								<li><a href="#" class="facebook-home"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="twitter-home"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="instagram-home"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div><!-- END COL -->
			</div><!-- END ROW -->
		</div><!-- END CONTAINER -->
	</section>
	<!-- END TEAM MEMBERS -->		
											
<?php include ('include/footer.php') ?>