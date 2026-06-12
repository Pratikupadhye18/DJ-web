
<?php include("include/headerf.php")?>
<!-- SECTION TOP -->
<?php
$banner = mysqli_query($conn2,"Select * from crew3 where slug = 'seo'");
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
          <h2>Why Choose Digitals Journey for SEO?</h2>
          <img src="assets/img/why-choose-us/seo.png" class="img-fluid" alt="seo-image" />
        </div>
      </div>
      <div class="col-lg-7 col-sm-12 col-xs-12">
        <div class="marketing_text">
          <p>Digitals Journey helps your business climb the search rankings and get found by the right people at the right time. Our SEO strategies are data-driven, Google-compliant, and designed to bring you sustainable organic growth.</p>
          <ul class="tx-new">
            <li>Technical, On-page & Off-page SEO solutions</li>
            <li>Keyword research and content optimization</li>
            <li>Google My Business and local SEO setup</li>
            <li>Monthly analytics and strategy reporting</li>
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
      <h2>Smart SEO Solutions for Long-Term Visibility</h2>
      <p>We help you get discovered, outrank your competitors, and attract high-intent traffic organically.</p>
    </div>
    <div class="row">
      <div class="col-lg-10 offset-lg-1 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/SEO/technicalSEO.png" alt="icon" /></div>
              <h3>Technical SEO</h3>
              <p>Fix backend issues that hurt rankings and ensure your site is crawlable and fast.</p>
              <ul class="tx-new">
                <li>Site speed optimization</li>
                <li>Indexing and sitemap configuration</li>
                <li>Mobile responsiveness and HTTPS setup</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/SEO/onpageSEO.png" alt="icon" /></div>
              <h3>On-Page SEO</h3>
              <p>Make every page a top-ranking asset with optimized content and metadata.</p>
              <ul class="tx-new">
                <li>Title, meta, and heading optimization</li>
                <li>Internal linking and content structure</li>
                <li>Keyword placement and density checks</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/SEO/offpageSEO.png" alt="icon" /></div>
              <h3>Off-Page SEO</h3>
              <p>Boost domain authority and trust signals through external efforts.</p>
              <ul class="tx-new">
                <li>High-quality backlink building</li>
                <li>Guest posting and outreach</li>
                <li>Directory submissions and citations</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="single_marketing">
              <div class="marketing_icon_img"><img src="assets/img/service-icon/SEO/localSEO&GMB.png" alt="icon" /></div>
              <h3>Local SEO & GMB</h3>
              <p>Appear on local map results and dominate your city or region in Google searches.</p>
              <ul class="tx-new">
                <li>Google My Business optimization</li>
                <li>NAP consistency and local content</li>
                <li>Local link building and reviews</li>
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
      <h2>Our SEO Workflow</h2>
      <p>We blend content, code, and credibility to improve your site’s ranking and visibility.</p>
    </div>
    <div class="row text-center">
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>1</h4></div>
          <h3>SEO Audit</h3>
          <p>Full technical and content review with improvement roadmap</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>2</h4></div>
          <h3>Keyword & Competitor Research</h3>
          <p>Identify ranking opportunities and content gaps</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>3</h4></div>
          <h3>Optimization & Link Building</h3>
          <p>Improve on-page SEO and build backlinks from trusted sites</p>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-xs-12">
        <div class="single_process"><div class="process_num"><h4>4</h4></div>
          <h3>Tracking & Reports</h3>
          <p>Monthly insights, performance trends, and strategy refinement</p>
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
          <h1>Boost Your Search Visibility & Grow Organically</h1>
          <p>Let Digitals Journey help you rank higher, get more traffic, and turn visitors into leads with white-hat SEO strategies built to last.</p>
        </div>
        <div class="pc_btn"><a href="tel:+91 91265 10051">Call Now</a></div>
      </div>
    </div>
  </div>
</section>

<?php include ('include/footer.php') ?>
