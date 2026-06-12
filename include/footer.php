<!-- START FOOTER -->
<div class="footer">
		<div class="container">		
			<div class="row">						
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="footer_logo">
						<img src="assets/img/Logo/2.png" alt="" style="border-radius: 0 !important;"/>
						<p>At Digitals Journey, we don’t just run campaigns — we craft tailored strategies, create powerful content, and build digital experiences that drive real, measurable growth for your brand.</p>
					</div>
					<div class="social_profile">
						<ul>
							<li><a href="<?php echo $facebook;?>" class="" target="_blank">
							<img src="assets/img/social/fb.png" title="Facebook"></img></a></li>
							<li><a href="<?php echo $twitter;?>" class="top_f_twitter" target="_blank">
							<img src="assets/img/social/twitter.png" title="Twitter"></i></a></li>
							<li><a href="https://www.instagram.com/digitals_journey" class="top_f_instagram" target="_blank" rel="noopener noreferrer">
							<img src="assets/img/social/insta.png" title="Instagram"></i></a></li>
							<li><a href="<?php echo $linkdin;?>" class="top_f_linkedin" target="_blank">
							<img src="assets/img/social/link.png" title="LinkedIn"></i></a></li>
							<li><a href="<?php echo $youtube;?>" class="top_f_youtube" target="_blank">
							<img src="assets/img/social/you.png" title="Youtube"></i></a></li>
							<li><a href="<?php echo $pinterest;?>" class="top_f_pinterest" target="_blank">
							<img src="assets/img/social/pin.png" title="Pinterest"></i></a></li>
						</ul>
					</div>							
				</div><!--- END COL -->						
				<div class="col-lg-3 col-sm-6 col-xs-1">
					<div class="single_footer single_footer_top">
						<h4>Quick Links</h4>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="#">Portfolio</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Blog</a></li>
						</ul>
					</div>
				</div><!-- END COL -->
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="single_footer single_footer_top_one">
						<h4>Frequently Asked Questions</h4>
						<ul>
							<li><a href="TermsandConditions.php">Terms and Conditions</a></li>
							<li><a href="Privacy-Policy.php">Privacy Policy</a></li>
						</ul>
					</div>
				</div><!--- END COL -->
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="newsletter-form">
						<h4>Subscribe For Updates</h4>
						<?php if (isset($_GET['subscribe']) && $_GET['subscribe'] === 'success') { ?>
							<p class="subscribe-msg subscribe-msg--success">Thank you! You're subscribed. Future updates will be sent to your email.</p>
						<?php } elseif (isset($_GET['subscribe']) && $_GET['subscribe'] === 'exists') { ?>
							<p class="subscribe-msg subscribe-msg--info">You're already subscribed with this email.</p>
						<?php } elseif (isset($_GET['subscribe']) && $_GET['subscribe'] === 'invalid') { ?>
							<p class="subscribe-msg subscribe-msg--error">Please enter a valid email address.</p>
						<?php } ?>
						<form action="subscribe.php" method="post" class="subscribe">
							<input type="email" name="email" class="subscribe__input" placeholder="Email Address" required>
							<button type="submit" class="subs_btn">Subscribe</button>
						</form>
					</div>
				</div><!--- END COL -->		
			</div><!--- END ROW -->		
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="footer_copyright">
						<p>&copy; 2025 Digitals Journey. All Rights Reserved.</p>
					</div>
				</div>
			</div>				
		</div><!--- END CONTAINER -->
	</div>
	<script 
      type="text/javascript"
      src="https://d3mkw6s8thqya7.cloudfront.net/integration-plugin.js"
      id="aisensy-wa-widget"
      widget-id="aaa2ez">
    </script>
	<!-- END FOOTER -->	
		
	<!-- Latest jQuery -->
		<script src="assets/js/jquery-1.12.4.min.js"></script>
	<!-- Latest compiled and minified Bootstrap -->
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>	
	<!-- owl-carousel min js  -->
		<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>	
	<!-- magnific-popup js -->               
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- jquery.slicknav -->
		<script src="assets/js/jquery.slicknav.js"></script>		
	<!-- jquery mixitup min js -->
		<script src="assets/js/jquery.mixitup.js"></script>		
	<!-- jquery venobox min js -->
		<script src="assets/js/venobox.min.js"></script>			
	<!-- countTo js -->
		<script src="assets/js/jquery.inview.min.js"></script>
	<!-- WOW - Reveal Animations When You Scroll -->
		<script src="assets/js/wow.min.js"></script>		
	<!-- stellar js -->
		<script src="assets/js/jquery.stellar.min.js"></script>	
	<!-- scrolltopcontrol js -->
		<script src="assets/js/scrolltopcontrol.js"></script>			
	<!-- scripts js -->	
		<script src="assets/js/scripts.js"></script>	
</body>
</html>