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
          <img src="assets/img/why-choose-us/marketing.png" class="img-fluid" alt="marketing-image" />
        </div>
      </div>
      <div class="col-lg-7 col-sm-12 col-xs-12">
        <div class="marketing_text">
          <p>At Digitals Journey, our Social Media Marketing services help your brand connect, engage, and grow across all major platforms. Whether you're building awareness, generating leads, or boosting community engagement — we craft compelling strategies backed by real results.</p>
          <ul class="tx-new">
            <li>Platform-specific strategies for Facebook, Instagram, LinkedIn, Twitter, and more</li>
            <li>Creative content planning and consistent posting schedules</li>
            <li>Data-driven approach with monthly performance reports</li>
            <li>Increased engagement, brand loyalty, and follower growth</li>
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
      <h2>Tailored Social Strategies for Every Platform</h2>
      <p>We create custom strategies that match the tone, audience, and goals of each platform — ensuring your brand gets the visibility, voice, and value it deserves.</p>
    </div>
    <div class="row">
      <div class="col-lg-10 offset-lg-1 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/marketing-1.png" alt="icon" /></div>
              <h3>Facebook & Instagram Marketing</h3>
              <p>Engage your audience with dynamic visuals, stories, and reels while running targeted campaigns for maximum brand reach and ROI.</p>
              <ul class="tx-new">
                <li>Creative posts, carousel ads, reels, and stories</li>
                <li>Audience targeting based on interests, behavior, and demographics</li>
                <li>Community management and brand interaction</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/marketing-1.png" alt="icon" /></div>
              <h3>LinkedIn Marketing</h3>
              <p>Perfect for B2B marketing, thought leadership, and building professional connections that convert into business opportunities.</p>
              <ul class="tx-new">
                <li>Company updates, thought leadership posts</li>
                <li>Sponsored content and lead gen campaigns</li>
                <li>Networking with professionals, industries, and decision-makers</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/marketing-1.png" alt="icon" /></div>
              <h3>YouTube & Video Promotion</h3>
              <p>Capitalize on the power of video through engaging content that educates, entertains, and converts.</p>
              <ul class="tx-new">
                <li>Channel optimization and thumbnail design</li>
                <li>Video SEO for ranking in search results</li>
                <li>Shorts and long-form content strategies</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/marketing-1.png" alt="icon" /></div>
              <h3>Twitter & Real-Time Engagement</h3>
              <p>Stay relevant and part of trending conversations through live engagement and timely updates.</p>
              <ul class="tx-new">
                <li>Hashtag strategies and trending topic posts</li>
                <li>Brand voice that resonates with followers</li>
                <li>Real-time customer support and updates</li>
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
      <h2>Our Social Media Marketing Workflow</h2>
      <p>We combine creativity with strategy — managing your social presence from ideation to execution and analysis.</p>
    </div>
    <div class="row text-center">
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>1</h4></div>
          <h3>Strategy Development</h3>
          <p>Brand audit, audience persona creation, platform selection</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>2</h4></div>
          <h3>Content Planning & Scheduling</h3>
          <p>Monthly calendars with design & copy</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>3</h4></div>
          <h3>Publishing & Engagement</h3>
          <p>Consistent posting + real-time replies & interactions</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>4</h4></div>
          <h3>Reporting & Optimization</h3>
          <p>Monthly analytics reports, campaign adjustments</p>
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
          <h1>Let’s Make Your Brand Socially Unstoppable</h1>
          <p>Social media is where conversations happen — and we make sure your brand is part of them. From growing followers to turning them into customers, Digitals Journey is your partner in social media success.</p>
        </div>
        <div class="pc_btn"><a href="tell:+44 254785415">Call Now</a></div>
      </div>
    </div>
  </div>
</section>

<?php include ('include/footer.php') ?>
