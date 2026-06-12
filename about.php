<?php include("include/headerf.php")?>

	<!-- START SECTION TOP -->
	<?php
	$banner = mysqli_query($conn2,"Select * from crew3 where slug = 'about'");
	while($val = mysqli_fetch_array($banner)){
		$abt_photo = 'uploads/inner_pages/'.$val['photo'] ;
		$abt_name = $val['name'] ;
	}
	?>
	<section class="section-top" style="background-image: url(<?php echo $abt_photo ?>);  background-size:cover; background-position: center center;">
		<div class="container">
			<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
				<div class="section-top-title">
					<h1><?php echo $abt_name ?></h1>
				</div><!-- //.HERO-TEXT -->
			</div><!--- END COL -->
		</div><!--- END CONTAINER -->
	</section>	
	<!-- END SECTION TOP -->
	
	<!-- START ABOUT TWO -->
	<section class="about-content-two section-padding">
		<div class="container">									
			<div class="row">								
				<div class="col-lg-6 col-sm-12 col-xs-12">
					<div class="about-two-img">
						<img src="assets/img/about_us.png" class="img-fluid" alt="" />
					</div>	
				</div><!--- END COL -->						
				<div class="col-lg-6 col-sm-12 col-xs-12">
					<div class="about-two">
						<h4>We Provide digital marketing solutions that deliver</h4>
						<h1>Manage your marketing <br /><b>in one place</b></h1>
						<p>Tired of juggling multiple tools? Our all-in-one digital marketing platform lets you manage campaigns, track performance, and grow your business effortlessly — all from a single dashboard.</p>
					</div>
					<div class="award_area">
						<img src="assets/img/award.png" alt="" />
						<h4>GLOBAL RECOGNITION 2024  <br /> WITH 30+ YEARS OF EXPERTISE</h4>
						<p>Our award-winning team has decades of experience helping businesses like yours achieve digital success.</p>
					</div>
					<a class="about-btn" href="about.php">Know More</a>						
				</div><!--- END COL -->			  
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END ABOUT TWO -->	
	
	<!-- START ABOUT FEATURE CONTENT -->
	<section class="feature section-padding">
		<div class="container">
			<div class="section-title text-center wow zoomIn">
				<h2>We are expert digital marketers</h2>
				<p>It is a long-established fact that the success of your brand depends on strategic digital marketing. Our experts ensure your business gets noticed with the right message, at the right time, to the right audience.</p>
			</div>			
			<div class="row as_box">
				<div class="col-lg-3 col-sm-6 col-xs-12 no-padding">
					<div class="about_single wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<img src="assets/img/service-icon/icon-1.png" alt="" />
						<h4>Result-Driven Campaigns</h4>
						<p>We create fully optimized, responsive campaigns designed to deliver measurable results across all platforms.</p>
					</div>
				</div><!--- END COL -->
				<div class="col-lg-3 col-sm-6 col-xs-12 no-padding">
					<div class="about_single wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<img src="assets/img/service-icon/icon-2.png" alt="" />
						<h4>Tailored For Every Business</h4>
						<p>From startups to enterprises, our strategies are crafted to suit the unique needs of all types of businesses.</p>
					</div>
				</div><!--- END COL -->
				<div class="col-lg-3 col-sm-6 col-xs-12 no-padding">
					<div class="about_single wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<img src="assets/img/service-icon/icon-3.png" alt="" />
						<h4>Easy To Scale</h4>
						<p>Our marketing solutions are flexible and easy to scale as your business grows, ensuring consistent performance.</p>
					</div>
				</div><!--- END COL -->
				<div class="col-lg-3 col-sm-6 col-xs-12 no-padding">
					<div class="about_single wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<img src="assets/img/service-icon/icon-4.png" alt="" />
						<h4>24/7 Expert Support</h4>
						<p>Our dedicated support team is available round the clock to assist you and ensure your campaigns run smoothly</p>
					</div>
				</div><!--- END COL -->
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END ABOUT FEATURE CONTENT -->
	
	<!-- START PROCESS -->
	<section class="process_area section-padding">
	   <div class="container">
			<div class="section-title text-center">
				<h2>Work Process</h2>
				<p>A clear, proven approach to bring your ideas to life.</p>
			</div>				
			<div class="row text-center">					
				<div class="col-lg-4 col-sm-4 col-xs-12">
					<div class="single_process">
						<div class="process_num">
							<h4>1</h4> 
						</div> 
						<h3>Plan & Create</h3>
						<p>We strategize, brainstorm, and craft tailored solutions for your goals.</p>
					</div>
				</div><!-- END COL -->					
				<div class="col-lg-4 col-sm-4 col-xs-12">
					<div class="single_process">
						<div class="process_num">
							<h4>2</h4> 
						</div> 
						<h3>Develop & testing</h3>
						<p>Our experts build, test, and perfect every detail for flawless performance.</p>
					</div>
				</div><!-- END COL -->					
				<div class="col-lg-4 col-sm-4 col-xs-12">
					<div class="single_process">
						<div class="process_num">
							<h4>3</h4> 
						</div> 
						<h3>Make Live</h3>
						<p>We launch your project to the world — polished, optimized, and ready to perform.</p>
					</div>
				</div><!-- END COL -->				
			</div><!-- END ROW -->
		</div><!-- END CONTAINER -->
	</section>
	<!-- END PROCESS -->
	
	<!-- START QUOTE -->
	<section class="quote_area section-padding">
		<div class="container">	
			<div class="row">
				<div class="col-lg-7 col-sm-12 col-xs-12">
					<div class="quote">
						<h2>Get A Free Quote</h2>
						<form class="form" method="post" action="email.php">
							<div class="row">
								<div class="form-group col-md-6">
									<input type="text" name="name" class="form-control" placeholder="Name" required="required">
								</div>
								<div class="form-group col-md-6">
									<input type="email" name="email" class="form-control" placeholder="Email" required="required">
								</div>
								<div class="form-group col-md-6">
									<input type="text" name="phone" class="form-control" placeholder="Phone" required="required">
								</div>
								<div class="form-group col-md-6">
									<input type="text" name="subject" class="form-control" placeholder="Website" required="required">
								</div>
								<div class="form-group col-md-12">
									<select class="form-select" aria-label="Default select example">
									  <option selected>Choose A Service</option>
                                        <option value="Paid Advertising">Paid Advertising (PPC)</option>
                                        <option value="Social Media Marketing">Social Media Marketing</option>
                                        <option value="WhatsApp Marketing">WhatsApp Marketing</option>
                                        <option value="Video Editing Services">Video Editing Services</option>
                                        <option value="Search Engine Optimization">Search Engine Optimization (SEO)</option>
                                        <option value="youtube-seo.php">YouTube SEO</option>
                                        <option value="Website Design & Development">Website Design & Development</option>
                                        <option value="Graphic Design Services">Graphic Design Services</option>
                                        <option value="SMS Marketing">SMS Marketing</option>
                                        <option value="Content Marketin">Content Marketing</option>
                                        <option value="Reels Marketing">Reels Marketing</option>
                                        <option value="Marketing Strategy and Planning">Marketing Strategy & Planning</option>
									</select>
								</div>
								<div class="form-group col-md-12">
									<textarea rows="6" name="message" class="form-control" placeholder="Your Message" required="required"></textarea>
								</div>
								<input type="hidden" name="query" value="contact">
								<div class="col-md-12 text-center">
									<button type="submit" name="submit" class="btn btn-lg contact_btn" >Send Message</button>
								</div>
							</div>
						</form>
					</div>
				</div><!-- END COL  -->	
				<div class="col-lg-5 col-sm-12 col-xs-12">	
					<!--<div class="video_btn">-->
					<!--	<a class="video-play" href="https://www.youtube.com/watch?v=alswD2tCc_Q"><span></span></a>-->
					<!--</div>-->
				</div><!-- END COL  -->					
			</div><!-- END ROW -->
		</div><!-- END CONTAINER -->
	</section>
	<!-- END QUOTE -->

	<!-- START TEAM MEMBERS -->
	<!--<section id="team" class="team_area section-padding">-->
	<!--	<div class="container">								-->
	<!--		<div class="row">-->
	<!--			<div class="col-md-12 text-center">-->
	<!--				<div class="section-title">-->
	<!--					<h2>Meet the Awesome team</h2>-->
	<!--					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout established fact that a reader will.</p>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>			-->
	<!--		<div class="row text-center">-->
	<!--			<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">-->
	<!--				<div class="our-team">-->
	<!--					<div class="single-team">-->
	<!--						<img src="assets/img/team/t1.png" class="img-fluid" alt="" />-->
	<!--						<h3>Arpita</h3>-->
	<!--						<p>Graphic Designer</p>-->
	<!--					</div>	-->
	<!--					<ul class="social">-->
	<!--						<li><a href="#" class="ti-facebook facebook"></a></li>-->
	<!--						<li><a href="#" class="ti-twitter twitter"></a></li>-->
	<!--						<li><a href="#" class="ti-linkedin linkedin"></a></li>-->
	<!--					</ul>						-->
	<!--				</div><!--- END OUR TEAM -->	-->
	<!--			</div><!--- END COL -->-->
	<!--			<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">-->
	<!--				<div class="our-team">-->
	<!--					<div class="single-team">-->
	<!--						<img src="assets/img/team/t2.png" class="img-fluid" alt="" />-->
	<!--						<h3>Rituparna</h3>-->
	<!--						<p>Graphic Designer</p>-->
	<!--					</div>	-->
	<!--					<ul class="social">-->
	<!--						<li><a href="#" class="ti-facebook facebook"></a></li>-->
	<!--						<li><a href="#" class="ti-twitter twitter"></a></li>-->
	<!--						<li><a href="#" class="ti-linkedin linkedin"></a></li>-->
	<!--					</ul>						-->
	<!--				</div><!--- END OUR TEAM -->	-->
	<!--			</div><!--- END COL -->-->
	<!--			<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">-->
	<!--				<div class="our-team">-->
	<!--					<div class="single-team">-->
	<!--						<img src="assets/img/team/t3.png" class="img-fluid" alt="" />-->
	<!--						<h3>Souvik Ghosh</h3>-->
	<!--						<p>Video Editor</p>-->
	<!--					</div>	-->
	<!--					<ul class="social">-->
	<!--						<li><a href="#" class="ti-facebook facebook"></a></li>-->
	<!--						<li><a href="#" class="ti-twitter twitter"></a></li>-->
	<!--						<li><a href="#" class="ti-linkedin linkedin"></a></li>-->
	<!--					</ul>						-->
	<!--				</div><!--- END OUR TEAM -->	-->
	<!--			</div><!--- END COL -->-->
	<!--			<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">-->
	<!--				<div class="our-team">-->
	<!--					<div class="single-team">-->
	<!--						<img src="assets/img/team/4.png" class="img-fluid" alt="" />-->
	<!--						<h3>Tanjin Tisha</h3>-->
	<!--						<p>Tisha INC</p>-->
	<!--					</div>	-->
	<!--					<ul class="social">-->
	<!--						<li><a href="#" class="ti-facebook facebook"></a></li>-->
	<!--						<li><a href="#" class="ti-twitter twitter"></a></li>-->
	<!--						<li><a href="#" class="ti-linkedin linkedin"></a></li>-->
	<!--					</ul>						-->
	<!--				</div><!--- END OUR TEAM -->	-->
	<!--			</div><!--- END COL -->		  -->
	<!--		</div><!--- END ROW -->			-->
	<!--	</div><!--- END CONTAINER -->-->
	<!--</section>-->
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
				<!--<div class="col-lg-3 col-sm-6 col-xs-12">
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

	<!-- START TESTIMONIALS -->
	<!--<div class="testimonials_area section-padding">
		<div class="container">		
			<div class="row">										
				<div class="col-lg-7 col-sm-12 col-xs-12">
					<div class="testi_title">
						<h2>What Clients Say.</h2>
						<p>Why not contact us our experts.</p>
					</div>
					<div id="testimonial-slider-two" class="owl-carousel">
						<div class="testimonial_content_two">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
							<span class="testi_name">Alex Chohan, Marketing Manager</span>
						</div>
						<div class="testimonial_content_two">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
							<span class="testi_name">Alex Chohan, Marketing Manager</span>
						</div>
						<div class="testimonial_content_two">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
							<span class="testi_name">Alex Chohan, Marketing Manager</span>
						</div>
						<div class="testimonial_content_two">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
							<span class="testi_name">Alex Chohan, Marketing Manager</span>
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					<div class="testi_img">
						<img src="assets/img/testi-img.jpg" class="img-fluid" alt="testi-img" />
					</div>
				</div>					
			</div>				
		</div>
	</div>-->
	<!-- END TESTIMONIALS -->		
	
	<!-- START COMPANY PARTNER LOGO  -->
	<div class="partner-logo section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="partner_title">
						<h3>Trusted By 1k+ Company Arround The World! </h3>
					</div>
					<div class="partner">
						<a href="#"><img src="assets/img/brands/1.svg" alt="image"></a>
						<a href="#"><img src="assets/img/brands/2.svg" alt="image"></a>
						<a href="#"><img src="assets/img/brands/3.svg" alt="image"></a>
						<a href="#"><img src="assets/img/brands/4.svg" alt="image"></a>
						<a href="#"><img src="assets/img/brands/5.svg" alt="image"></a>
						<a href="#"><img src="assets/img/brands/1.svg" alt="image"></a>
						<a href="#"><img src="assets/img/brands/2.svg" alt="image"></a>
						<a href="#"><img src="assets/img/brands/3.svg" alt="image"></a>
					</div>
				</div><!-- END COL  -->
			</div><!--END  ROW  -->
		</div><!-- END CONTAINER  -->
	</div>
	<!-- END COMPANY PARTNER LOGO -->		
	<?php include('include/footer.php');?>