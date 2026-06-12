
<?php include("include/headerf.php")?>
<!-- SECTION TOP -->
<?php
$banner = mysqli_query($conn2,"Select * from crew3 where slug = 'youtube-seo'");
while($val = mysqli_fetch_array($banner)){
	$seo_photo = 'uploads/inner_pages/'.$val['photo'] ;
	$seo_name = $val['name'] ;
}
?>
<!-- START SECTION TOP -->
<section class="section-top" style="background-image: url(<?php echo $seo_photo; ?>);  background-size:cover; background-position: center center;">
	<div class="container">
		<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
			<div class="section-top-title">
				<h1><?php echo $seo_name; ?></h1>
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
          <h2>Why Choose Digitals Journey for YouTube SEO?</h2>
          <img src="assets/img/why-choose-us/youtubeseo.png" class="img-fluid" alt="youtube-seo-image" />
        </div>
      </div>
      <div class="col-lg-7 col-sm-12 col-xs-12">
        <div class="marketing_text">
          <p>With billions of views daily, YouTube is the second largest search engine. At Digitals Journey, we help your videos get discovered with proven SEO tactics that boost visibility, engagement, and watch time — naturally.</p>
          <ul class="tx-new">
            <li>Keyword-rich titles, tags, and descriptions</li>
            <li>Custom thumbnail optimization</li>
            <li>Closed captions and transcripts</li>
            <li>Channel growth and audience retention tactics</li>
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
      <h2>SEO That Gets Your Videos Ranked</h2>
      <p>We optimize every element of your channel and content to improve discoverability and subscriber growth.</p>
    </div>
    <div class="row">
      <div class="col-lg-10 offset-lg-1 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/YouTubeSEO/VideoOptimization.png" alt="icon" /></div>
              <h3>Video Optimization</h3>
              <p>Ensure each video ranks for relevant keywords and suggested video spots.</p>
              <ul class="tx-new">
                <li>SEO-friendly titles and meta descriptions</li>
                <li>Tags, categories, and timestamps</li>
                <li>End screen and card usage</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/YouTubeSEO/ChannelOptimization.png" alt="icon" /></div>
              <h3>Channel Optimization</h3>
              <p>Make your channel look professional and improve audience retention.</p>
              <ul class="tx-new">
                <li>Custom banners and logo</li>
                <li>Channel trailer and playlists</li>
                <li>About section and contact info</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/YouTubeSEO/ThumbnailDesign.png" alt="icon" /></div>
              <h3>Thumbnail Design</h3>
              <p>Increase click-through rates with compelling custom thumbnails.</p>
              <ul class="tx-new">
                <li>High-contrast, emotion-driven visuals</li>
                <li>Text overlays and branding</li>
                <li>Format consistency across videos</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/YouTubeSEO/Analytics&Growth.png" alt="icon" /></div>
              <h3>Analytics & Growth</h3>
              <p>Track performance and grow subscribers with actionable insights.</p>
              <ul class="tx-new">
                <li>Audience behavior and watch time analysis</li>
                <li>Click-through rate (CTR) and engagement reports</li>
                <li>SEO adjustments based on trends</li>
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
      <h2>Our YouTube SEO Process</h2>
      <p>We make sure your video content is searchable, clickable, and binge-worthy.</p>
    </div>
    <div class="row text-center">
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>1</h4></div>
          <h3>Channel Audit</h3>
          <p>Evaluate SEO performance, branding, and viewer engagement</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>2</h4></div>
          <h3>Keyword Research</h3>
          <p>Find high-ranking and relevant keywords for each video</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>3</h4></div>
          <h3>Content Optimization</h3>
          <p>Apply SEO techniques across videos and descriptions</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>4</h4></div>
          <h3>Performance Monitoring</h3>
          <p>Analyze growth metrics and tweak SEO strategy monthly</p>
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
          <h1>Let Your Videos Get the Views They Deserve</h1>
          <p>With YouTube SEO from Digitals Journey, we help creators, brands, and educators grow visibility, watch time, and loyal subscribers — organically and efficiently.</p>
        </div>
        <div class="pc_btn"><a href="tel:+91 91265 10051">Call Now</a></div>
      </div>
    </div>
  </div>
</section>

<?php include ('include/footer.php') ?>
