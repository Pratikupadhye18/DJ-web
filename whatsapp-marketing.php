<?php include("include/headerf.php")?>
<?php
$banner = mysqli_query($conn2,"Select * from crew3 where slug = 'whatsapp-marketing'");
while($val = mysqli_fetch_array($banner)){
	$what_photo = 'uploads/inner_pages/'.$val['photo'] ;
	$what_name = $val['name'] ;
}
?>
<!-- START SECTION TOP -->
<section class="section-top" style="background-image: url(<?php echo $what_photo; ?>);  background-size:cover; background-position: center center;">
	<div class="container">
		<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
			<div class="section-top-title">
				<h1><?php echo $what_name; ?></h1>
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
          <h2>Why Choose Digitals Journey for WhatsApp Marketing?</h2>
          <img src="assets/img/why-choose-us/wm.png" class="img-fluid" alt="marketing-image" />
        </div>
      </div>
      <div class="col-lg-7 col-sm-12 col-xs-12">
        <div class="marketing_text">
          <p>At Digitals Journey, our WhatsApp Marketing services help your brand connect, engage, and grow across all major platforms. Whether you're building awareness, generating leads, or boosting community engagement — we craft compelling strategies backed by real results.</p>
          <ul class="tx-new">
            <li>Automated campaigns, broadcast lists, and API-based messaging solutions</li>
            <li>Pre-approved templates, promotional messages, and WhatsApp catalogs</li>
            <li>Real-time message tracking and delivery reports</li>
            <li>Enhanced customer engagement and increased response rates</li>
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
      <h2>Targeted Campaigns Through WhatsApp Channels</h2>
      <p>We tailor WhatsApp messaging strategies to suit your business model — enabling faster responses, direct feedback, and scalable marketing through verified numbers.</p>
    </div>
    <div class="row">
      <div class="col-lg-10 offset-lg-1 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/WhatsAppMarketing/WhatsAppBroadcastCampaigns.png" alt="icon" /></div>
              <h3>WhatsApp Broadcast Campaigns</h3>
              <p>Send personalized messages, product updates, and offers to customers using broadcast lists that comply with WhatsApp Business policies.</p>
              <ul class="tx-new">
                <li>Bulk messaging with segmented targeting</li>
                <li>Compliance with opt-in messaging and privacy standards</li>
                <li>Two-way communication and automated responses</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/WhatsAppMarketing/APIIntegration.png" alt="icon" /></div>
              <h3>WhatsApp API Integration</h3>
              <p>Integrate WhatsApp API to automate order updates, customer service, booking confirmations, and follow-ups.</p>
              <ul class="tx-new">
                <li>Automated alerts and customer support flows</li>
                <li>Seamless CRM integrations</li>
                <li>Bot-assisted engagement and sales support</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/WhatsAppMarketing/CustomerSupport.png" alt="icon" /></div>
              <h3>Customer Support & Engagement</h3>
              <p>Use WhatsApp to answer queries, offer help, and build trust through direct communication.</p>
              <ul class="tx-new">
                <li>Quick replies and canned responses</li>
                <li>Human-assisted chat with escalation</li>
                <li>After-sales and service messaging</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/WhatsAppMarketing/Order&AppointmentNotifications.png" alt="icon" /></div>
              <h3>Order & Appointment Notifications</h3>
              <p>Send timely updates, delivery alerts, reminders, and transactional messages using automated tools.</p>
              <ul class="tx-new">
                <li>Shipping updates and appointment confirmations</li>
                <li>Multi-language and region-specific messaging</li>
                <li>Broadcast efficiency and audience segmentation</li>
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
      <h2>Our WhatsApp Marketing Workflow</h2>
      <p>We combine messaging automation with personalization — managing your customer communication from planning to execution and reporting.</p>
    </div>
    <div class="row text-center">
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>1</h4></div>
          <h3>Audience Targeting Setup</h3>
          <p>Importing contacts, setting opt-in lists, and segmenting customers</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>2</h4></div>
          <h3>Template Creation & Approval</h3>
          <p>Message formats prepared and approved by WhatsApp</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>3</h4></div>
          <h3>Campaign Execution</h3>
          <p>Scheduled and manual message delivery with engagement tracking</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>4</h4></div>
          <h3>Performance Tracking</h3>
          <p>Delivery, read-rate reports and campaign insights</p>
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
          <h1>Let’s Connect Directly with Your Customers</h1>
          <p>WhatsApp is personal, fast, and trusted. At Digitals Journey, we help you harness the platform to build stronger customer relationships, close sales faster, and provide unmatched support — all through a number they already trust.</p>
        </div>
        <div class="pc_btn"><a href="tel:+91 91265 10051">Call Now</a></div>
      </div>
    </div>
  </div>
</section>

<?php include ('include/footer.php') ?>
