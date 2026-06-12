
<?php include("include/headerf.php")?>
<?php
$banner = mysqli_query($conn2,"Select * from crew3 where slug = 'graphic-design-services'");
while($val = mysqli_fetch_array($banner)){
	$gra_photo = 'uploads/inner_pages/'.$val['photo'] ;
	$gra_name = $val['name'] ;
}
?>
<!-- START SECTION TOP -->
<section class="section-top" style="background-image: url(<?php echo $gra_photo; ?>);  background-size:cover; background-position: center center;">
	<div class="container">
		<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
			<div class="section-top-title">
				<h1><?php echo $gra_name; ?></h1>
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
          <h2>Why Choose Digitals Journey for Graphic Design?</h2>
          <img src="assets/img/why-choose-us/graphicdesign.png" class="img-fluid" alt="graphic-design-image" />
        </div>
      </div>
      <div class="col-lg-7 col-sm-12 col-xs-12">
        <div class="marketing_text">
          <p>Visuals speak louder than words. At Digitals Journey, our graphic design services give your brand a visual identity that resonates. Whether you're building a brand or launching a product, our creatives grab attention and build trust.</p>
          <ul class="tx-new">
            <li>Logos, brand identity kits, and business cards</li>
            <li>Social media graphics and ad creatives</li>
            <li>Flyers, brochures, and promotional materials</li>
            <li>Website banners and email templates</li>
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
      <h2>Designs That Capture, Communicate, and Convert</h2>
      <p>We craft compelling visuals aligned with your brand voice — helping you stand out in a crowded marketplace.</p>
    </div>
    <div class="row">
      <div class="col-lg-10 offset-lg-1 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/GraphicDesign/BrandIdentityDesign.png" alt="icon" /></div>
              <h3>Brand Identity Design</h3>
              <p>Create a consistent and professional brand image across all platforms.</p>
              <ul class="tx-new">
                <li>Logo design and brand colors</li>
                <li>Typography and visual assets</li>
                <li>Brand guideline documents</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/GraphicDesign/SocialMediaGraphics.png" alt="icon" /></div>
              <h3>Social Media Graphics</h3>
              <p>Custom-designed posts and templates tailored to each platform.</p>
              <ul class="tx-new">
                <li>Instagram, Facebook, LinkedIn creatives</li>
                <li>Story highlights and reel covers</li>
                <li>Hashtag banners and branded frames</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/GraphicDesign/MarketingCollateral.png" alt="icon" /></div>
              <h3>Marketing Collateral</h3>
              <p>Eye-catching print and digital materials for events, campaigns, or advertising.</p>
              <ul class="tx-new">
                <li>Flyers and brochures</li>
                <li>Posters, menus, and roll-ups</li>
                <li>Business cards and email signatures</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/GraphicDesign/Web&UIGraphics.png" alt="icon" /></div>
              <h3>Web & UI Graphics</h3>
              <p>Graphics that enhance UX and brand recognition on your digital platforms.</p>
              <ul class="tx-new">
                <li>Website banners and hero images</li>
                <li>UI mockups and icons</li>
                <li>Email headers and call-to-action blocks</li>
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
      <h2>Our Graphic Design Workflow</h2>
      <p>We translate ideas into visuals that make your brand unforgettable.</p>
    </div>
    <div class="row text-center">
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>1</h4></div>
          <h3>Brief & Research</h3>
          <p>Understanding your brand, audience, and design preferences</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>2</h4></div>
          <h3>Concept Development</h3>
          <p>Initial sketches and visual directions for feedback</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>3</h4></div>
          <h3>Design Execution</h3>
          <p>Finalizing high-quality visuals for web, print, or social</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>4</h4></div>
          <h3>Delivery & Revisions</h3>
          <p>Source files and formats delivered with scope for edits</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA SECTION -->
<section class="promotion_contact" style="background-image: url(assets/img/bg/promot.png); background-size:cover; background-position: center center;">
  <div class="="container">
    <div class="row">
      <div class="offset-lg-1 col-lg-10 col-sm-12 col-xs-12 text-center">
        <div class="promo_contact_content">
          <h1>Design That Leaves a Lasting Impression</h1>
          <p>Whether it's your next post, pitch, or promotion — Digitals Journey delivers design that looks great and performs even better.</p>
        </div>
        <div class="pc_btn"><a href="tel:+91 91265 10051">Call Now</a></div>
      </div>
    </div>
  </div>
</section>

<?php include ('include/footer.php') ?>
