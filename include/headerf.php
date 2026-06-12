<?php include 'includes/session.php'; ?>
<?php 
$contact = "SELECT * FROM contact_details";
$result = mysqli_query($conn2,$contact);
while ($row = mysqli_fetch_array($result)) {
      $contact_name = $row['contact_name'];
      $timming = $row['timming'];
      $contact_email = $row['contact_email'];
      $contact_phone = $row['contact_phone'];
      $contact_phone1 = $row['contact_phone1'];
      $contact_addr = $row['contact_addr'];
}


$social = "SELECT * FROM social_links";
$result = mysqli_query($conn2,$social);
while ($row_s = mysqli_fetch_array($result)) {
    $facebook = $row_s['facebook'];
    $twitter = $row_s['twitter'];
    $linkdin = $row_s['linkdin'];
    $instagram = $row_s['instagram'];
    $youtube = $row_s['youtube'];
    $pinterest = $row_s['pinterest'];
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5LTWHR5N');</script>
<!-- End Google Tag Manager -->
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Digitals Journey - Best Digital Marketing Solution">
		<meta name="keywords" content="blog, business, clean, corporate, creative, ecommerce, gallery, multipurpose, one page, photography, portfolio, responsive, shop">
		<meta name="author" content="themes_master">
		<!-- SITE TITLE -->
		<title>Digitals Journey - Best Digital Marketing Solution</title>			
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">		
		<!-- Google Font -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
		<link rel="stylesheet" href="assets/fonts/themify-icons.css">
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">		
		<!--slicknav Css-->
        <link rel="stylesheet" href="assets/css/slicknav.css">			
		<!-- MAGNIFIC CSS -->
		<link rel="stylesheet" href="assets/css/magnific-popup.css">	
		<!-- animate CSS -->
		<link rel="stylesheet" href="assets/css/animate.css">		
		<!-- Style CSS -->		
		<link rel="stylesheet" href="assets/css/slider.css">
		<link rel="stylesheet" href="assets/css/style.css" />	
		<!-- WooCOmmerce CSS -->
	   <link rel="stylesheet" href="assets/woocommerce/woocommerce-layouts.css">
	   <link rel="stylesheet" href="assets/woocommerce/woocommerce-small-screen.css">
	   <link rel="stylesheet" href="assets/woocommerce/woocommerce.css">	
	   
	   <link rel="apple-touch-icon" sizes="180x180" href="assets/fav/apple-touch-icon.png">
	   <link rel="icon" type="image/png" sizes="32x32" href="assets/fav/favicon-32x32.png">
	   <link rel="icon" type="image/png" sizes="16x16" href="assets/fav/favicon-16x16.png">
	   <link rel="manifest" href="/site.webmanifest">			
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LTWHR5N"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<!-- START LOGO WITH CONTACT -->
	<section class="logo-contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
					<div class="single-top-contact">
						<i class="fa fa-home"></i>
						<h4><strong><a href="tel:<?php echo $contact_phone; ?>" style="color:white;"><?php echo $contact_phone; ?></a></strong></h4>
					</div>
				</div><!--- END COL -->	
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
					<div class="single-top-contact">							
						<i class="fa fa-envelope"></i>
						<h4><strong><a href="mailto:<?php echo $contact_email; ?>" style="color:white;"><?php echo $contact_email; ?></a></strong></h4>	
					</div>
				</div><!--- END COL -->	
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
					<div class="single-top-contact">
						<i class="fa fa-clock-o"></i>
						<h4><strong><?php echo $timming; ?></strong></h4>
					</div>
				</div><!--- END COL -->	
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
					<div class="top_social_profile">
						<ul>
							<li><a href="<?php echo $facebook;?>" class="" target="_blank">
							<img src="assets/img/social/fb.png" title="Facebook"></img></a></li>
							<li><a href="<?php echo $twitter;?>" class="top_f_twitter" target="_blank">
							<img src="assets/img/social/twitter.png" title="Twitter"></i></a></li>
							<li><a href="<?php echo $instagram;?>" class="top_f_instagram" target="_blank">
							<img src="assets/img/social/insta.png" title="Instagram"></i></a></li>
							<li><a href="<?php echo $linkdin;?>" class="top_f_linkedin" target="_blank">
							<img src="assets/img/social/link.png" title="LinkedIn"></i></a></li>
							<li><a href="<?php echo $youtube;?>" class="top_f_youtube" target="_blank">
							<img src="assets/img/social/you.png" title="Youtube"></i></a></li>
							<li><a href="<?php echo $pinterest;?>" class="top_f_pinterest" target="_blank">
							<img src="assets/img/social/pin.png" title="Pinterest"></i></a></li>
						</ul>
					</div>
				</div><!--- END COL -->						
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END LOGO WITH CONTACT -->
	
	<!-- START NAVBAR -->  
	<div id="navigation" class="navbar-light bg-faded site-navigation menu_dropdown">		
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-3 col-sm-4">
					<div class="site-logo">
						<a class="navbar-logo" href="/"><img src="assets/img/Logo/logo.png" alt="logo"/></a>  
					</div>
				</div><!--- END Col -->					
				<div class="col-lg-10 col-md-9 col-sm-8">
					<div class="header_right">
						<nav id="main-menu" class="ml-auto">
							<ul>
							  <li><a href="/">Home</a></li>
							  <li><a href="about.php">About</a></li>
							  <li><a class="arrow-btn" href="#">Service</a>
								<ul class="sub-menu">
									<li><a href="PaidAdvertising.php">Paid Advertising (PPC)</a></li>
									<li><a href="SMM.php">Social Media Marketing</a></li>
									<li><a href="whatsapp-marketing.php">WhatsApp Marketing</a></li>
									<li><a href="video-editing-services.php">Video Editing Services</a></li>
									<li><a href="search-engine-optimization-(seo).php">Search Engine Optimization (SEO)</a></li>
									<li><a href="youtube-seo.php">YouTube SEO</a></li>
									<li><a href="website-design-and-development.php">Website Design & Development</a></li>
									<li><a href="graphic-design-services.php">Graphic Design Services</a></li>
									<li><a href="sms-marketing.php">SMS Marketing</a></li>
									<li><a href="content-marketing.php">Content Marketing</a></li>
									<li><a href="reels-marketing.php">Reels Marketing</a></li>
									<li><a href="marketing-strategy-and-planning.php">Marketing Strategy & Planning</a></li>
								</ul>
							  </li>
							  <li><a href="portfolio.php">Portfolio</a></li>
							  <li><a href="team.php">Team</a></li>	
							  <li><a href="faq.php">Faq Page</a></li>	
							  <li><a href="blog.php">Blog</a></li>	
							  <li><a href="contact.php">Contact</a></li>							  
							</ul>
						</nav>
						<div id="mobile_menu"></div> 
					</div>
				</div><!--- END COL -->					
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</div> 	  
	<!-- END NAVBAR -->	