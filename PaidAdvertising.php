
<?php include("include/headerf.php")?>
<!-- SECTION TOP -->
<?php
$banner = mysqli_query($conn2,"Select * from crew3 where slug = 'paid-advertising'");
while($val = mysqli_fetch_array($banner)){
	$paid_photo = 'uploads/inner_pages/'.$val['photo'] ;
	$paid_name = $val['name'] ;
}
?>
<!-- START SECTION TOP -->
<section class="section-top" style="background-image: url(<?php echo $paid_photo; ?>);  background-size:cover; background-position: center center;">
	<div class="container">
		<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
			<div class="section-top-title">
				<h1><?php echo $paid_name; ?></h1>
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
          <h2>Why Choose Digitals Journey for PPC Advertising?</h2>
          <img src="assets/img/why-choose-us/ppc.png" class="img-fluid" alt="Paid Advertising" />
        </div>
      </div>
      <div class="col-lg-7 col-sm-12 col-xs-12">
        <div class="marketing_text">
          <p>At Digitals Journey, our Paid Advertising (PPC) services are crafted to deliver measurable performance and maximum return on investment. In the digital marketplace, paid advertising allows businesses to appear exactly where potential customers are searching, browsing, or scrolling — and we ensure you show up with impact.</p>
          <ul class="tx-new">
            <li>Google, Meta, LinkedIn, and display ad strategies</li>
            <li>Conversion-focused ad copy and creatives</li>
            <li>Targeting, remarketing, and audience segmentation</li>
            <li>Performance tracking and continuous optimization</li>
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
      <h2>Precision-Driven Campaigns Across Leading Platforms</h2>
      <p>We manage data-backed, result-focused PPC campaigns across all major digital platforms, tailored to your business goals.</p>
    </div>
    <div class="row">
      <div class="col-lg-10 offset-lg-1 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/PaidAdvertising/GoogleAds.png" alt="icon" /></div>
              <h3>Google Ads</h3>
              <p>From search to shopping, video to app installs, we manage end-to-end campaigns that place your business at the top.</p>
              <ul class="tx-new">
                <li>Search, Display, and Video campaigns</li>
                <li>Keyword targeting and bid strategy</li>
                <li>Landing page optimization</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/PaidAdvertising/MetaAds(Facebook&Instagram).png" alt="icon" /></div>
              <h3>Meta Ads (Facebook & Instagram)</h3>
              <p>Visually engaging ads that convert viewers into leads and customers on social media platforms.</p>
              <ul class="tx-new">
                <li>Audience targeting and lookalike expansion</li>
                <li>Carousel, Stories, Reels, and Collection formats</li>
                <li>Retargeting and pixel tracking setup</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/PaidAdvertising/LinkedInAds.png" alt="icon" /></div>
              <h3>LinkedIn Ads</h3>
              <p>Generate qualified B2B leads with professional campaigns targeted by job title, industry, and company size.</p>
              <ul class="tx-new">
                <li>Sponsored content and InMail campaigns</li>
                <li>Professional audience filters</li>
                <li>High-intent lead generation forms</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/PaidAdvertising/Remarketing&Retargeting.png" alt="icon" /></div>
              <h3>Remarketing & Retargeting</h3>
              <p>Bring back potential customers who interacted but didn’t convert — and guide them back to action.</p>
              <ul class="tx-new">
                <li>Dynamic ads based on past behaviors</li>
                <li>Cross-channel retargeting setup</li>
                <li>Segmented audience lists</li>
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
      <h2>Our PPC Campaign Process</h2>
      <p>We build, monitor, and optimize your PPC campaigns for consistent and scalable results.</p>
    </div>
    <div class="row text-center">
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>1</h4></div>
          <h3>Strategy Planning</h3>
          <p>Research, audience definition, and goal alignment</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>2</h4></div>
          <h3>Ad Creation</h3>
          <p>Copywriting, creatives, and landing page coordination</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>3</h4></div>
          <h3>Campaign Execution</h3>
          <p>Ad deployment, targeting setup, and A/B testing</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>4</h4></div>
          <h3>Reporting & Optimization</h3>
          <p>Analytics tracking, performance reports, and scaling</p>
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
          <h1>Start Reaching the Right Audience Today</h1>
          <p>Digitals Journey crafts PPC campaigns that convert — with data-backed strategy, compelling creatives, and constant optimization. Let’s grow your leads, traffic, and revenue together.</p>
        </div>
        <div class="pc_btn"><a href="tel:+91 91265 10051">Call Now</a></div>
      </div>
    </div>
  </div>
</section>

<?php include ('include/footer.php') ?>
