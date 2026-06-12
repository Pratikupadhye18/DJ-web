
<?php include("include/headerf.php")?>
<!-- SECTION TOP -->
<?php
$banner = mysqli_query($conn2,"Select * from crew3 where slug = 'website-design-development'");
while($val = mysqli_fetch_array($banner)){
	$web_photo = 'uploads/inner_pages/'.$val['photo'] ;
	$web_name = $val['name'] ;
}
?>
<!-- START SECTION TOP -->
<section class="section-top" style="background-image: url(<?php echo $web_photo; ?>);  background-size:cover; background-position: center center;">
	<div class="container">
		<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
			<div class="section-top-title">
				<h1><?php echo $web_name; ?></h1>
			</div>
		</div>
	</div>
</section>	
<!-- END SECTION TOP -->

<!-- SERVICE MARKETING PAGE -->
<section class="marketing_area section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-sm-12 col-xs-12">
        <div class="marketing_content">
          <h2>Why Choose Digitals Journey for Web Design?</h2>
          <img src="assets/img/why-choose-us/webdesign.png" class="img-fluid" alt="webdev-image" />
        </div>
      </div>
      <div class="col-lg-7 col-sm-12 col-xs-12">
        <div class="marketing_text">
          <p>Your website is the digital face of your brand — and we make it powerful. At Digitals Journey, we create websites that are fast, functional, mobile-responsive, and designed to convert visitors into customers.</p>
          <ul class="tx-new">
            <li>Custom design using modern UX/UI principles</li>
            <li>Mobile-first, SEO-optimized, and lightning-fast performance</li>
            <li>Built on WordPress, Elementor, HTML, or custom stacks</li>
            <li>Fully responsive and easy to manage</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MARKETING LIST -->
<div class="marketing_list_area section-padding">
  <div class="container">
    <div class="section-title text-center">
      <h2>Smart Design, Seamless Experience</h2>
      <p>We craft websites that are not just beautiful, but also purposeful and user-friendly — built for performance and growth.</p>
    </div>
    <div class="row">
      <div class="col-lg-10 offset-lg-1 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/WebsiteDesign&Development/ResponsiveWebDesign.png" alt="icon" /></div>
              <h3>Responsive Web Design</h3>
              <p>Flawless user experience across all devices, screen sizes, and platforms.</p>
              <ul class="tx-new">
                <li>Mobile-first layouts</li>
                <li>Clean, modern UI</li>
                <li>Cross-browser compatibility</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/WebsiteDesign&Development/CustomDevelopment.png" alt="icon" /></div>
              <h3>Custom Development</h3>
              <p>Tailored functionality and integrations to meet your business goals.</p>
              <ul class="tx-new">
                <li>Static HTML/CSS/JS or dynamic WordPress</li>
                <li>CRM, payment, and email integration</li>
                <li>Scalable and secure architecture</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/WebsiteDesign&Development/LandingPages&Funnels.png" alt="icon" /></div>
              <h3>Landing Pages & Funnels</h3>
              <p>High-conversion pages built for campaigns, product launches, or events.</p>
              <ul class="tx-new">
                <li>Sales funnels with lead forms</li>
                <li>Analytics and A/B testing support</li>
                <li>Optimized for speed and clarity</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/WebsiteDesign&Development/E-commerceSolutions.png" alt="icon" /></div>
              <h3>E-commerce Solutions</h3>
              <p>Sell your products online with easy-to-manage stores and secure payment setups.</p>
              <ul class="tx-new">
                <li>WooCommerce, Shopify, or custom shops</li>
                <li>Product management dashboard</li>
                <li>Mobile checkout and cart UX</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- PROCESS SECTION -->
<section class="process_area section-padding">
  <div class="container-fluid">
    <div class="section-title text-center">
      <h2>Our Web Development Process</h2>
      <p>From concept to code, we turn ideas into pixel-perfect digital experiences.</p>
    </div>
    <div class="row text-center">
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>1</h4></div>
          <h3>Discovery & Planning</h3>
          <p>Project brief, wireframes, and goal-setting</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>2</h4></div>
          <h3>Design & Content</h3>
          <p>Visual mockups, branding, and copy integration</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>3</h4></div>
          <h3>Development & Testing</h3>
          <p>Build, optimize, debug, and QA test across devices</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>4</h4></div>
          <h3>Launch & Maintenance</h3>
          <p>Deploy, monitor performance, and update regularly</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA SECTION -->
<section class="promotion_contact" style="background-image: url(assets/img/bg/promot.png); background-size:cover; background-position: center center;">
  <div class="container">
    <div class="row">
      <div class="offset-lg-1 col-lg-10 col-sm-12 col-xs-12 text-center">
        <div class="promo_contact_content">
          <h1>Build a Website That Works as Hard as You Do</h1>
          <p>Let Digitals Journey bring your brand online with a professional website designed to engage users, drive action, and grow your business.</p>
        </div>
        <div class="pc_btn"><a href="tel:+91 91265 10051">Call Now</a></div>
      </div>
    </div>
  </div>
</section>

<?php include ('include/footer.php') ?>
