
<?php include("include/headerf.php")?>
<?php
$banner = mysqli_query($conn2,"Select * from crew3 where slug = 'marketing-strategy-planning'");
while($val = mysqli_fetch_array($banner)){
	$stra_photo = 'uploads/inner_pages/'.$val['photo'] ;
	$stra_name = $val['name'] ;
}
?>
<!-- START SECTION TOP -->
<section class="section-top" style="background-image: url(<?php echo $stra_photo; ?>);  background-size:cover; background-position: center center;">
	<div class="container">
		<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
			<div class="section-top-title">
				<h1><?php echo $stra_name; ?></h1>
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
          <h2>Why Choose Digitals Journey for Strategy & Planning?</h2>
          <img src="assets/img/whychoose.png" class="img-fluid" alt="strategy-image" />
        </div>
      </div>
      <div class="col-lg-7 col-sm-12 col-xs-12">
        <div class="marketing_text">
          <p>Every successful marketing campaign starts with a clear strategy. At Digitals Journey, we craft tailored plans that align with your business goals, industry trends, and customer behavior — ensuring every marketing move is smart and impactful.</p>
          <ul class="tx-new">
            <li>360° digital strategy tailored for your business</li>
            <li>Brand positioning and market research</li>
            <li>Channel selection and content planning</li>
            <li>Performance tracking and KPI-based improvements</li>
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
      <h2>Strategic Marketing for Sustainable Growth</h2>
      <p>We blend creativity with data to build marketing roadmaps that actually work — on every platform your audience lives.</p>
    </div>
    <div class="row">
      <div class="col-lg-10 offset-lg-1 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/MarketingStrategy&Planning/BrandPositioning.png" alt="icon" /></div>
              <h3>Brand Positioning</h3>
              <p>Define your brand’s voice, values, and competitive edge in the marketplace.</p>
              <ul class="tx-new">
                <li>SWOT analysis and brand audit</li>
                <li>Target audience profiling</li>
                <li>Messaging framework</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/MarketingStrategy&Planning/ChannelStrategy.png" alt="icon" /></div>
              <h3>Channel Strategy</h3>
              <p>Choose the right platforms and tactics to reach your ideal customers efficiently.</p>
              <ul class="tx-new">
                <li>Omnichannel marketing plans</li>
                <li>Paid vs organic mix</li>
                <li>Platform-specific content planning</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/MarketingStrategy&Planning/ContentRoadmap.png" alt="icon" /></div>
              <h3>Content Roadmap</h3>
              <p>Plan what to post, when to post, and where — all aligned to your goals.</p>
              <ul class="tx-new">
                <li>Quarterly and monthly calendars</li>
                <li>CTA and campaign alignment</li>
                <li>Performance-optimized formats</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/MarketingStrategy&Planning/DataDrivenPlanning.png" alt="icon" /></div>
              <h3>Data-Driven Planning</h3>
              <p>Use analytics to improve ROI and optimize strategies in real-time.</p>
              <ul class="tx-new">
                <li>Google Analytics and ad performance review</li>
                <li>Campaign benchmarking</li>
                <li>Funnel and conversion tracking</li>
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
      <h2>Our Strategic Planning Process</h2>
      <p>From insight to execution, we develop actionable strategies backed by research, data, and creativity.</p>
    </div>
    <div class="row text-center">
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>1</h4></div>
          <h3>Audit & Research</h3>
          <p>We start by understanding your brand, market, and competitors</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>2</h4></div>
          <h3>Goal Definition</h3>
          <p>Set clear KPIs, timelines, and marketing outcomes</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>3</h4></div>
          <h3>Execution Plan</h3>
          <p>Develop content, campaign, and ad strategies across channels</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>4</h4></div>
          <h3>Measurement & Revision</h3>
          <p>Track progress and refine strategy for better performance</p>
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
          <h1>Plan Smart. Market Smarter.</h1>
          <p>Digitals Journey gives your business the strategic direction it needs to market with confidence, clarity, and measurable results. Let's get started today.</p>
        </div>
        <div class="pc_btn"><a href="tel:+91 91265 10051">Call Now</a></div>
      </div>
    </div>
  </div>
</section>

<?php include ('include/footer.php') ?>
