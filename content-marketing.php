
<?php include("include/headerf.php")?>
<?php
$banner = mysqli_query($conn2,"Select * from crew3 where slug = 'content-marketing'");
while($val = mysqli_fetch_array($banner)){
	$content_photo = 'uploads/inner_pages/'.$val['photo'] ;
	$content_name = $val['name'] ;
}
?>
<!-- START SECTION TOP -->
<section class="section-top" style="background-image: url(<?php echo $content_photo; ?>);  background-size:cover; background-position: center center;">
	<div class="container">
		<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
			<div class="section-top-title">
				<h1><?php echo $content_name; ?></h1>
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
          <h2>Why Choose Digitals Journey for Content Marketing?</h2>
          <img src="assets/img/why-choose-us/contentmarketing.png" class="img-fluid" alt="content-marketing-image" />
        </div>
      </div>
      <div class="col-lg-7 col-sm-12 col-xs-12">
        <div class="marketing_text">
          <p>Great content builds trust, educates your audience, and drives conversions. At Digitals Journey, we deliver content strategies that not only attract traffic but also convert visitors into loyal customers through storytelling and value-driven content.</p>
          <ul class="tx-new">
            <li>SEO-optimized blog posts and website content</li>
            <li>Lead magnets, case studies, and whitepapers</li>
            <li>Email sequences and newsletter writing</li>
            <li>Content calendars and brand tone alignment</li>
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
      <h2>Content That Connects, Educates, and Converts</h2>
      <p>We help you grow through strategic storytelling — tailored for your brand voice and customer journey.</p>
    </div>
    <div class="row">
      <div class="col-lg-10 offset-lg-1 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/ContentMarketing/BlogWriting.png" alt="icon" /></div>
              <h3>Blog Writing</h3>
              <p>Drive organic traffic with informative and SEO-rich blog content.</p>
              <ul class="tx-new">
                <li>Keyword-targeted topics</li>
                <li>Internal linking and readability</li>
                <li>Formatted for featured snippets</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/ContentMarketing/WebsiteCopywriting.png" alt="icon" /></div>
              <h3>Website Copywriting</h3>
              <p>Craft compelling, conversion-focused copy for landing pages and product pages.</p>
              <ul class="tx-new">
                <li>Headline optimization</li>
                <li>Clear CTAs and benefits</li>
                <li>SEO metadata and structure</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/ContentMarketing/Email&Newsletter.png" alt="icon" /></div>
              <h3>Email & Newsletter</h3>
              <p>Build audience loyalty and drive repeat traffic with email marketing.</p>
              <ul class="tx-new">
                <li>Autoresponders and drip campaigns</li>
                <li>Personalized sequences</li>
                <li>Engaging subject lines and click-worthy copy</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/ContentMarketing/LeadMagnets&eBooks.png" alt="icon" /></div>
              <h3>Lead Magnets & eBooks</h3>
              <p>Generate leads with high-value downloadable content.</p>
              <ul class="tx-new">
                <li>Whitepapers and industry reports</li>
                <li>Guides and checklists</li>
                <li>Design and layout support included</li>
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
      <h2>Our Content Creation Process</h2>
      <p>We plan, write, refine, and repurpose content to align with your business goals and audience needs.</p>
    </div>
    <div class="row text-center">
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>1</h4></div>
          <h3>Strategy & Topic Research</h3>
          <p>We identify what your audience cares about and where your brand fits</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>2</h4></div>
          <h3>Drafting & SEO Optimization</h3>
          <p>Well-written content optimized for readability and ranking</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>3</h4></div>
          <h3>Review & Editing</h3>
          <p>Grammatical checks, brand voice alignment, and formatting</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>4</h4></div>
          <h3>Publishing & Promotion</h3>
          <p>Deliver in all required formats and promote via chosen channels</p>
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
          <h1>Fuel Your Brand with Powerful Content</h1>
          <p>At Digitals Journey, we don’t just write — we create content that informs, engages, and drives business results. Let’s get your story out there.</p>
        </div>
        <div class="pc_btn"><a href="tel:+91 91265 10051">Call Now</a></div>
      </div>
    </div>
  </div>
</section>

<?php include ('include/footer.php') ?>
