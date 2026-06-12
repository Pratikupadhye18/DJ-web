<?php include("include/headerf.php")?>
	<!-- START SECTION TOP -->
	<?php
	$banner = mysqli_query($conn2,"Select * from crew3 where slug = 'contact'");
	while($val = mysqli_fetch_array($banner)){
		$con_photo = 'uploads/inner_pages/'.$val['photo'] ;
		$con_name = $val['name'] ;
	}
	?>
	<section class="section-top" style="background-image: url(<?php echo $con_photo; ?>);  background-size:cover; background-position: center center;">
		<div class="container">
			<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
				<div class="section-top-title">
					<h1><?php echo $con_name; ?></h1>
				</div><!-- //.HERO-TEXT -->
			</div><!--- END COL -->
		</div><!--- END CONTAINER -->
	</section>	
	<!-- END SECTION TOP -->

	<!-- ADDRESS -->
	<div class="address section-padding">
		<div class="container">
			<div class="row text-center">
				<div class="col-lg-4 col-sm-6 col-xs-12">
					<div class="single_address">
						<div class="address_br"><span class="ti-mobile"></span></div>
						<h4>Phone</h4>
						<p><a href="tel:<?php echo $contact_phone; ?>" style="color:black;"><?php echo $contact_phone; ?></a></p>
					</div>
				</div><!--- END COL -->
				<div class="col-lg-4 col-sm-6 col-xs-12">
					<div class="single_address">
						<div class="address_br"><span class="ti-email"></span></div>
						<h4>Email</h4>
						<p><a href="tel:<?php echo $contact_email; ?>" style="color:black;"><?php echo $contact_email; ?></a></p>
					</div>
				</div><!--- END COL -->
				<div class="col-lg-4 col-sm-6 col-xs-12">
					<div class="single_address">
						<div class="address_br"><span class="ti-location-pin"></span></div>
						<h4>Address</h4>
						<p style="color:black;"><?php echo $contact_addr; ?></p>
					</div>
				</div><!--- END COL -->	
			</div><!--- END ROW -->	
		</div><!--- END CONTAINER -->
	</div>
	<!-- END ADDRESS -->			

	<!-- START CONTACT -->
	<section id="contact" class="contact_us section-padding">
		<div class="container">
			<div class="row contact_us_bg">
				<div class="col-lg-7 col-sm-12 col-xs-12">
					<div class="contact">
						<h4>How can we help you?</h4>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
						<form class="form" method="post" action="email_con.php">
							<div class="row">
								<div class="form-group col-md-6">
									<input type="text" name="name" class="form-control" placeholder="Name" required="required">
								</div>
								<div class="form-group col-md-6">
									<input type="email" name="email" class="form-control" placeholder="Email" required="required">
								</div>
								<div class="form-group col-md-12">
									<input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
								</div>
								<div class="form-group col-md-12">
									<textarea rows="6" name="message" class="form-control" placeholder="Your Message" required="required"></textarea>
								</div>
								<input type="hidden" name="query" value="contact"/>
								<div class="col-md-12 text-center">
									<button type="submit" name="submit" class="btn btn-lg contact_btn">Send Message</button>
								</div>
							</div>
						</form>
					</div>
				</div><!-- END COL  -->	
				<div class="col-lg-5 col-sm-12 col-xs-12">	
					<div class="map">
					    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7363.376064307217!2d88.37480887770998!3d22.6654173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89d002fc12d91%3A0x650359f2266d3882!2sJogeswar%20bhawan!5e0!3m2!1sen!2sin!4v1752585713704!5m2!1sen!2sin" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						
						
						
					</div>	
				</div><!-- END COL  -->					
			</div><!-- END ROW -->
		</div><!-- END CONTAINER -->
	</section>
	<!-- END CONTACT -->
											
<?php include ('include/footer.php') ?>