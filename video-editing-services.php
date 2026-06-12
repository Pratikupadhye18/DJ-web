
<?php include("include/headerf.php")?>
<!-- SECTION TOP -->
<?php
$banner = mysqli_query($conn2,"Select * from crew3 where slug = 'video-editing-services'");
while($val = mysqli_fetch_array($banner)){
	$video_photo = 'uploads/inner_pages/'.$val['photo'] ;
	$video_name = $val['name'] ;
}
?>
<!-- START SECTION TOP -->
<section class="section-top" style="background-image: url(<?php echo $video_photo; ?>);  background-size:cover; background-position: center center;">
	<div class="container">
		<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
			<div class="section-top-title">
				<h1><?php echo $video_name; ?></h1>
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
          <h2>Why Choose Digitals Journey for Video Editing?</h2>
          <img src="assets/img/why-choose-us/ve.png" class="img-fluid" alt="marketing-image" />
        </div>
      </div>
      <div class="col-lg-7 col-sm-12 col-xs-12">
        <div class="marketing_text">
          <p>At Digitals Journey, our Video Editing Services help your content stand out and perform across platforms like YouTube, Instagram, Facebook, and beyond. From storytelling to branding, we transform raw footage into scroll-stopping visual experiences that convert.</p>
          <ul class="tx-new">
            <li>Customized edits for reels, promos, YouTube, ads, and corporate needs</li>
            <li>Transitions, motion graphics, subtitles, background music, and more</li>
            <li>Edits delivered in high-resolution formats tailored for each platform</li>
            <li>Fast turnaround with client feedback incorporated at every stage</li>
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
      <h2>Our Core Video Editing Solutions</h2>
      <p>We bring ideas to life with edits that elevate your message and captivate your audience across platforms.</p>
    </div>
    <div class="row">
      <div class="col-lg-10 offset-lg-1 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/VideoEditingServices/ShortFormSocialMediaEdits.png" alt="icon" /></div>
              <h3>Short-Form Social Media Edits</h3>
              <p>Capture attention fast with crisp, energetic edits perfect for Reels, Shorts, and TikTok.</p>
              <ul class="tx-new">
                <li>Trend-based cuts and effects</li>
                <li>Platform-optimized dimensions</li>
                <li>Captions and sound sync</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/VideoEditingServices/YouTubeVideoEditing.png" alt="icon" /></div>
              <h3>YouTube Video Editing</h3>
              <p>From vlogs to educational content, we edit YouTube videos that keep viewers engaged.</p>
              <ul class="tx-new">
                <li>Intro/outro creation</li>
                <li>B-roll and cutaways</li>
                <li>Thumbnail guidance and optimization</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/VideoEditingServices/Promotional&AdVideos.png" alt="icon" /></div>
              <h3>Promotional & Ad Videos</h3>
              <p>Create compelling marketing visuals that speak to your audience and drive conversions.</p>
              <ul class="tx-new">
                <li>Product-focused edits</li>
                <li>Logo animations and call-to-actions</li>
                <li>Text overlays and music licensing</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/VideoEditingServices/Corporate&EventEditing.png" alt="icon" /></div>
              <h3>Corporate & Event Editing</h3>
              <p>Professional video editing for business presentations, events, and testimonials.</p>
              <ul class="tx-new">
                <li>Multi-camera syncing</li>
                <li>Voiceover sync</li>
                <li>Branded lower-thirds and transitions</li>
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
      <h2>Our Video Editing Workflow</h2>
      <p>We combine creativity and precision — managing your video editing project from planning to final delivery.</p>
    </div>
    <div class="row text-center">
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>1</h4></div>
          <h3>Content Planning & Briefing</h3>
          <p>Understanding your goals, platform, and target audience</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>2</h4></div>
          <h3>Raw Footage Upload & Asset Collection</h3>
          <p>Gathering videos, logos, references, and music preferences</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>3</h4></div>
          <h3>Editing & Revisions</h3>
          <p>First cut delivery with feedback loops for refinement</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>4</h4></div>
          <h3>Final Delivery</h3>
          <p>HD/4K export in all required formats with optimized file sizes</p>
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
          <h1>Tell Your Story with Powerful Visuals</h1>
          <p>Video connects faster than words. At Digitals Journey, we help your brand communicate, captivate, and convert through professional editing tailored to your goals.</p>
        </div>
        <div class="pc_btn"><a href="tel:+91 91265 10051">Call Now</a></div>
      </div>
    </div>
  </div>
</section>

<?php include ('include/footer.php') ?>
