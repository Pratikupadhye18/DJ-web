
<?php include("include/headerf.php")?>
<!-- SECTION TOP -->
<?php
$banner = mysqli_query($conn2,"Select * from crew3 where slug = 'social-media-marketing'");
while($val = mysqli_fetch_array($banner)){
	$smm_photo = 'uploads/inner_pages/'.$val['photo'] ;
	$smm_name = $val['name'] ;
}
?>
<!-- START SECTION TOP -->
<section class="section-top" style="background-image: url(<?php echo $smm_photo; ?>);  background-size:cover; background-position: center center;">
	<div class="container">
		<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
			<div class="section-top-title">
				<h1><?php echo $smm_name; ?></h1>
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
          <h2>Why Choose Digitals Journey for Social Media Marketing?</h2>
          <img src="assets/img/why-choose-us/smm.png" class="img-fluid" alt="marketing-image" />
        </div>
      </div>
      <div class="col-lg-7 col-sm-12 col-xs-12">
        <div class="marketing_text">
          <p>Digitals Journey delivers social media marketing that goes beyond just likes and shares. We build brand loyalty, drive targeted engagement, and turn followers into customers through platform-specific strategies and creative content that resonates.</p>
          <ul class="tx-new">
            <li>Organic & paid strategies for Facebook, Instagram, LinkedIn, Twitter, and more</li>
            <li>Engaging post designs, captions, and hashtag strategies</li>
            <li>Audience growth and profile optimization</li>
            <li>Performance tracking and monthly reports</li>
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
      <h2>Social Strategies That Drive Real Business Results</h2>
      <p>We manage every aspect of your social media presence — from content planning to audience engagement and campaign execution.</p>
    </div>
    <div class="row">
      <div class="col-lg-10 offset-lg-1 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/SocialMediaMarketing/SocialMediaManagement.png" alt="icon" /></div>
              <h3>Social Media Management</h3>
              <p>Consistent and impactful content that keeps your brand top-of-mind.</p>
              <ul class="tx-new">
                <li>Monthly content calendars and scheduling</li>
                <li>Branded graphics and creative copy</li>
                <li>Community management and interaction</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/SocialMediaMarketing/PaidSocialCampaigns.png" alt="icon" /></div>
              <h3>Paid Social Campaigns</h3>
              <p>Reach new audiences and generate leads with conversion-driven paid ads.</p>
              <ul class="tx-new">
                <li>Ad creative design and copywriting</li>
                <li>Audience targeting and optimization</li>
                <li>A/B testing and budget scaling</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/SocialMediaMarketing/Instagram&ReelsStrategy.png" alt="icon" /></div>
              <h3>Instagram & Reels Strategy</h3>
              <p>Short-form content that hooks attention and drives growth.</p>
              <ul class="tx-new">
                <li>Trend research and content planning</li>
                <li>Thumbnail, caption, and audio selection</li>
                <li>Hashtag optimization and influencer tagging</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/SocialMediaMarketing/BrandAwarenessCampaigns.png" alt="icon" /></div>
              <h3>Brand Awareness Campaigns</h3>
              <p>Build visibility and recognition with storytelling and visual consistency.</p>
              <ul class="tx-new">
                <li>Brand voice and visual theme alignment</li>
                <li>Cross-platform engagement strategies</li>
                <li>Milestone, event, and seasonal campaigns</li>
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
      <h2>Our Social Media Process</h2>
      <p>We plan, create, post, and analyze to keep your social presence active, attractive, and result-driven.</p>
    </div>
    <div class="row text-center">
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>1</h4></div>
          <h3>Profile Audit & Strategy</h3>
          <p>Brand assessment and audience targeting plan</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>2</h4></div>
          <h3>Content Calendar</h3>
          <p>Pre-planned posts with designs, captions, and scheduling</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>3</h4></div>
          <h3>Publishing & Engagement</h3>
          <p>Post execution and community interaction</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>4</h4></div>
          <h3>Insights & Optimization</h3>
          <p>Analytics reporting and content performance improvement</p>
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
          <h1>Grow Your Brand Where Your Audience Scrolls</h1>
          <p>At Digitals Journey, we help you build influence and trust on social media through consistent strategy, creative design, and proactive engagement.</p>
        </div>
        <div class="pc_btn"><a href="tel:+91 91265 10051">Call Now</a></div>
      </div>
    </div>
  </div>
</section>

<?php include ('include/footer.php') ?>
