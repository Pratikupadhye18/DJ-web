<?php include("include/headerf.php")?>

	    <?php
	$banner = mysqli_query($conn2,"Select * from crew3 where slug = 'portfolio'");
	while($val = mysqli_fetch_array($banner)){
		$port_photo = 'uploads/inner_pages/'.$val['photo'] ;
		$port_name = $val['name'] ;
	}
	?>
		<!-- START SECTION TOP -->
		<section class="section-top" style="background-image: url(<?php echo $port_photo; ?>);  background-size:cover; background-position: center center;">
			<div class="container">
				<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
					<div class="section-top-title">
						<h1><?php echo $port_name; ?></h1>
					</div><!-- //.HERO-TEXT -->
				</div><!--- END COL -->
			</div><!--- END CONTAINER -->
		</section>	
		<!-- END SECTION TOP -->
	
	<!-- START PORTFOLIO -->
	<section id="portfolio" class="our_portfolio section-padding">
		<div class="container">							
			<div class="col-lg-12 text-center">
				<div class="portfolio_filter">
					<ul>
						<li class="active filter" data-filter="all">All</li>
						<?php
						$one = "Select * from category";
						$res = mysqli_query($conn2,$one);
						while($val = mysqli_fetch_array($res)){
						?>
						<li class="filter" data-filter=".<?php echo $val['cat_slug'];?>"><?php echo $val['name']; ?></li>
						<?php } ?>
					</ul>
				</div>
			</div>				
			<div class="row portfolio_item">			
				<?php
				$port = mysqli_query($conn2,"SELECT * FROM `tour`");
				while($row = mysqli_fetch_array($port)){
				?>
				<div class="col-xs-12 col-sm-6 col-lg-4 mix <?php echo $row['hide']; ?>">
					<div class="box">
						<img src="uploads/portfolio/<?php echo $row['photo']; ?>" alt="portfolio-image">
						<div class="box-content">
							<h3 class="title"><?php echo $row['name']; ?></h3>
							<span class="post"><?php echo $row['head']; ?></span>
							<ul class="icon">
								<li><a href="uploads/portfolio/<?php echo $row['photo']; ?>" class="port-icon lightbox" data-gall="gall-work">
								<i class="ti-eye"></i></a></li>
								<li><a href="#"><i class="ti-search"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<?php
				}
				?>
				<div class="col-lg-12 col-sm-12 col-xs-12 text-center">		
					<div class="all-work-btn">
						<a href="#">View More</a>
					</div>
				</div><!--- END COL -->																	
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END PORTFOLIO -->			
											
<?php include ('include/footer.php') ?>