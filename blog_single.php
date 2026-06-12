<?php include("include/headerf.php")?>

<?php
$value = $_GET['slug'];
$blog = "Select * from blog where status = '1' and slug = '$value'";
$res = mysqli_query($conn2,$blog);
while($data = mysqli_fetch_array($res)){
$photo = $data['photo'];
$title = $data['title'];
$post = $data['post'];
$dt = $data['post_dt'];
}

$banner = mysqli_query($conn2,"Select * from crew3 where slug = 'blog'");
while($val = mysqli_fetch_array($banner)){
	$blog_photo = 'uploads/inner_pages/'.$val['photo'];
	$blog_name = $val['name'];
}
?>
		<!-- START SECTION TOP -->
		<section class="section-top" style="background-image: url(<?php echo $blog_photo; ?>);  background-size:cover; background-position: center center;">
			<div class="container">
				<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
					<div class="section-top-title">
						<h1><?php echo $title; ?></h1>
					</div><!-- //.HERO-TEXT -->
				</div><!--- END COL -->
			</div><!--- END CONTAINER -->
		</section>	
		<!-- END SECTION TOP -->

	<!-- START BLOG -->
	<section id="blog" class="blog_area section-padding">
		<div class="container">		
			<div class="row">		
				<div class="col-lg-8 col-sm-8 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
					<div class="post-slide-blog"> 
						<img class="img-fluid" src="uploads/blog/<?php echo $photo; ?>" alt="Blog Image">
						<h5><?php echo $title; ?> | <?php echo $dt; ?></h5>
						<?php echo $post; ?>
					</div>
				</div>
				<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
					<div class="sidebar-post">
						<div class="sidebar_title"><h4>Popular post</h4></div>
						<?php
						$blog2 = "Select * from blog where status = '1' LIMIT 5";
						$res2 = mysqli_query($conn2,$blog2);
						while($data2 = mysqli_fetch_array($res2)){
						?>
						<div class="single_popular">
							<a href="blog_single.php?slug=<?php echo $data2['slug']; ?>">
							<img src="uploads/blog/<?php echo $data2['photo']; ?>" alt="" /></a>
							<h5><a href="blog_single.php?slug=<?php echo $data2['slug']; ?>">
							<?php echo $data2['title']; ?></a></h5>
						</div>
						<?php } ?>	
					</div><!-- END SIDEBAR POST -->										
				</div><!-- END COL-->				
			</div><!-- / END ROW -->
		</div><!-- END CONTAINER  -->
	</section>	
	<!-- END BLOG -->	
											
		<?php include('include/footer.php');?>