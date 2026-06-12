
<?php include("include/headerf.php")?>
<!-- SECTION TOP -->
<?php
$banner = mysqli_query($conn2,"Select * from crew3 where slug = 'reels-marketing'");
while($val = mysqli_fetch_array($banner)){
	$reel_photo = 'uploads/inner_pages/'.$val['photo'] ;
	$reel_name = $val['name'] ;
}
?>
<!-- START SECTION TOP -->
<section class="section-top" style="background-image: url(<?php echo $reel_photo; ?>);  background-size:cover; background-position: center center;">
	<div class="container">
		<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
			<div class="section-top-title">
				<h1><?php echo $reel_name; ?></h1>
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
          <h2>Why Choose Digitals Journey for Reels Marketing?</h2>
          <img src="assets/img/why-choose-us/reelsmarketing.png" class="img-fluid" alt="reels-marketing-image" />
        </div>
      </div>
      <div class="col-lg-7 col-sm-12 col-xs-12">
        <div class="marketing_text">
          <p>Short-form video is the most powerful content format on social media. At Digitals Journey, we create high-performing Reels that engage, entertain, and drive real action on Instagram, Facebook, and YouTube Shorts.</p>
          <ul class="tx-new">
            <li>Trend-based content planning and scripting</li>
            <li>High-quality editing with captions, transitions, and music</li>
            <li>Hashtag strategy and posting schedule</li>
            <li>Performance tracking and analytics</li>
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
      <h2>Reels That Grab Attention and Drive Results</h2>
      <p>From creative ideation to execution and publishing — we manage your entire Reels strategy to grow your brand online.</p>
    </div>
    <div class="row">
      <div class="col-lg-10 offset-lg-1 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/ReelsMarketing/ReelConceptPlanning.png" alt="icon" /></div>
              <h3>Reel Concept Planning</h3>
              <p>We brainstorm ideas based on your brand, goals, and current trends.</p>
              <ul class="tx-new">
                <li>Scripted or natural formats</li>
                <li>Hooks and CTA built in</li>
                <li>Tailored for industry & niche</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/ReelsMarketing/VideoEditing&Effects.png" alt="icon" /></div>
              <h3>Video Editing & Effects</h3>
              <p>Dynamic visuals that keep viewers engaged to the last second.</p>
              <ul class="tx-new">
                <li>Transitions and motion graphics</li>
                <li>Captions and sound sync</li>
                <li>Optimized dimensions and export quality</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/ReelsMarketing/Publishing&GrowthStrategy.png" alt="icon" /></div>
              <h3>Publishing & Growth Strategy</h3>
              <p>Post timing, captions, and hashtags designed to maximize reach.</p>
              <ul class="tx-new">
                <li>Hashtag clusters and trending audio</li>
                <li>Post timing and scheduling</li>
                <li>Cross-platform support (IG, FB, Shorts)</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/ReelsMarketing/Analytics&Optimization.png" alt="icon" /></div>
              <h3>Analytics & Optimization</h3>
              <p>Track views, engagement, and retention to improve performance.</p>
              <ul class="tx-new">
                <li>Reel-specific analytics reports</li>
                <li>Engagement rate and follower gain</li>
                <li>Iterative improvements based on results</li>
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
      <h2>Our Reels Marketing Process</h2>
      <p>We turn your brand message into viral-ready short videos tailored for your audience and platform.</p>
    </div>
    <div class="row text-center">
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>1</h4></div>
          <h3>Trend Research</h3>
          <p>Identify what’s working in your niche to craft winning Reels</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>2</h4></div>
          <h3>Planning & Scripting</h3>
          <p>Structure Reels for maximum attention and retention</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>3</h4></div>
          <h3>Video Editing</h3>
          <p>Add transitions, overlays, and sound to match the content theme</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>4</h4></div>
          <h3>Publish & Analyze</h3>
          <p>Launch Reels and measure their impact across platforms</p>
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
          <h1>Turn Views Into Followers and Followers Into Customers</h1>
          <p>Let Digitals Journey help you unlock the full potential of Reels Marketing with content that moves fast — and works even faster.</p>
        </div>
        <div class="pc_btn"><a href="tel:+91 91265 10051">Call Now</a></div>
      </div>
    </div>
  </div>
</section>

<?php include ('include/footer.php') ?>
