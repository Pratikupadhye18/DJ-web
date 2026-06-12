
<?php include("include/headerf.php")?>
<!-- SECTION TOP -->
<?php
$banner = mysqli_query($conn2,"Select * from crew3 where slug = 'sms-marketing'");
while($val = mysqli_fetch_array($banner)){
	$sms_photo = 'uploads/inner_pages/'.$val['photo'] ;
	$sms_name = $val['name'] ;
}
?>
<!-- START SECTION TOP -->
<section class="section-top" style="background-image: url(<?php echo $sms_photo; ?>);  background-size:cover; background-position: center center;">
	<div class="container">
		<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
			<div class="section-top-title">
				<h1><?php echo $sms_name; ?></h1>
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
          <h2>Why Choose Digitals Journey for SMS Marketing?</h2>
          <img src="assets/img/why-choose-us/sms.png" class="img-fluid" alt="sms-marketing-image" />
        </div>
      </div>
      <div class="col-lg-7 col-sm-12 col-xs-12">
        <div class="marketing_text">
          <p>SMS is one of the most direct and effective marketing channels with a 98% open rate. At Digitals Journey, we help you leverage this channel to send timely, personalized, and conversion-focused messages to your audience.</p>
          <ul class="tx-new">
            <li>Promotional and transactional bulk SMS campaigns</li>
            <li>API integration for real-time alerts</li>
            <li>Shortcode and longcode messaging solutions</li>
            <li>Consent-based messaging for better delivery and trust</li>
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
      <h2>Fast, Reliable, and Scalable SMS Campaigns</h2>
      <p>We make your communication personal, timely, and compliant — reaching users right on their phones.</p>
    </div>
    <div class="row">
      <div class="col-lg-10 offset-lg-1 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/SMSMarketing/PROMOTIONALICON.png" alt="icon" /></div>
              <h3>Promotional SMS</h3>
              <p>Drive engagement, leads, and sales with campaign-based messaging.</p>
              <ul class="tx-new">
                <li>Offer alerts, flash sales, and event reminders</li>
                <li>Region and interest-based targeting</li>
                <li>Multi-language support</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/SMSMarketing/TransactionalSMS.png" alt="icon" /></div>
              <h3>Transactional SMS</h3>
              <p>Send critical updates and real-time notifications with high priority routing.</p>
              <ul class="tx-new">
                <li>Order confirmations and delivery alerts</li>
                <li>Banking, OTP, and service alerts</li>
                <li>24/7 instant delivery</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/SMSMarketing/Bulksms.png" alt="icon" /></div>
              <h3>Bulk Messaging Platform</h3>
              <p>Launch and monitor campaigns through an easy-to-use dashboard.</p>
              <ul class="tx-new">
                <li>Contact list uploads and segmentation</li>
                <li>Scheduling and auto-repeat</li>
                <li>Delivery reports and analytics</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/SMSMarketing/APIIntegration.png" alt="icon" /></div>
              <h3>API Integration</h3>
              <p>Automate SMS sending from your CRM, app, or website.</p>
              <ul class="tx-new">
                <li>REST API and developer documentation</li>
                <li>Custom event-based messages</li>
                <li>OTP and verification workflows</li>
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
      <h2>Our SMS Marketing Workflow</h2>
      <p>We streamline communication — helping you reach more people faster with complete control.</p>
    </div>
    <div class="row text-center">
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>1</h4></div>
          <h3>Goal Setup</h3>
          <p>Decide campaign type, target audience, and message flow</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>2</h4></div>
          <h3>Content Draft</h3>
          <p>Create clear, actionable copy with personalization tokens</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>3</h4></div>
          <h3>Campaign Launch</h3>
          <p>Send to the right group at the right time with delivery tracking</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>4</h4></div>
          <h3>Insights & Optimization</h3>
          <p>Analyze open rates, CTR, and response to improve future sends</p>
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
          <h1>Start Connecting with Customers Instantly</h1>
          <p>With Digitals Journey SMS Marketing, you can engage your audience in seconds and get measurable responses. Let’s get your next campaign live today.</p>
        </div>
        <div class="pc_btn"><a href="tel:+91 91265 10051">Call Now</a></div>
      </div>
    </div>
  </div>
</section>

<?php include ('include/footer.php') ?>
