<?php include("include/headerf.php")?>

<?php
	$banner = mysqli_query($conn2,"Select * from crew3 where slug = 'blog'");
	while($val = mysqli_fetch_array($banner)){
		$blog_photo = 'uploads/inner_pages/'.$val['photo'] ;
		$blog_name = $val['name'] ;
	}
	?>
		<!-- START SECTION TOP -->
		<section class="section-top" style="background-image: url(<?php echo $blog_photo; ?>);  background-size:cover; background-position: center center;">
			<div class="container">
				<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
					<div class="section-top-title">
						<h1><?php echo $blog_name; ?></h1>
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
					<?php
					if(isset($_GET['category'])){
					$blog = "Select * from blog where status = '1' and category = '".$_REQUEST['category']."' order by post_dt DESC";	
					}
					else{
					$blog = "Select * from blog where status = '1' order by post_dt DESC";
					}
					$res = mysqli_query($conn2,$blog);
					while($data = mysqli_fetch_array($res)){
					?>
					<div class="single_blog">
						<img src="uploads/blog/<?php echo $data['photo']; ?>" class="img-fluid" alt="image" />
						<div class="content_box">
							<span>
							<?php echo $data['post_dt'];?> | <a href="blog_single.php?slug=<?php echo $data['slug'];?>">Design</a>
							</span>
							<h2><a href="blog_single.php?slug=<?php echo $data['slug']; ?>"><?php echo $data['title']; ?></a></h2>
							<p><?php echo substr($data['post'],0,200); ?></p>
						</div>
					</div>
					<?php
					}
					?>
				</div>
				
				<!-- END COL-->
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
					</div>					
					<div class="sidebar-post">
						<div class="sidebar_title"><h4>Follow us</h4></div>
						<div class="single_social">
							<ul>
								<li><div class="social_item b_facebook"><a href="#" title="facebook"><i class="fa fa-facebook"></i><span class="item-list">150K Likes</span></a></div></li>
								
								<li><div class="social_item b_twitter"><a href="#" title="twitter"><i class="fa fa-twitter"></i><span class="item-list">138K Followers</span></a></div></li>
								
								<li><div class="social_item b_youtube"><a href="#" title="youtube"><i class="fa fa-youtube"></i><span class="item-list">90K Subscribers</span></a></div></li>
								
								<li><div class="social_item b_pinterest"><a href="#" title="pinterest"><i class="fa fa-pinterest"></i><span class="item-list">350K Followers</span></a></div></li>
								
								<li><div class="social_item b_tumblr"><a href="#" title="rss"><i class="fa fa-tumblr"></i><span class="item-list">901 Followers</span></a></div></li>
								
								<li><div class="social_item b_rss"><a href="#" title="rss"><i class="fa fa-rss"></i><span class="item-list">411 Followers</span></a></div></li>
							</ul>
						</div><!-- END SOCIAL MEDIA POST -->
					</div><!-- END SIDEBAR POST -->							
					<div class="sidebar-post">
						<div class="sidebar_title"><h4>CATEGORIES</h4></div>
						<div class="single_category">
							<ul>
								<?php
								$sql = "Select * from brand";
								$resu = mysqli_query($conn2,$sql);
								while($data = mysqli_fetch_array($resu)){
								$catnm = $data['cat_name'];
								$count="Select COUNT(category) as counter from blog where status = '1' and category = '$catnm'";
								$cres = mysqli_query($conn2,$count);
								while($cval = mysqli_fetch_array($cres)){
								$value = $cval['counter'];	
								?>
								<li>
								<div class="item-category">
								<a href="blog.php?category=<?php echo $data['cat_name']; ?>" title="<?php echo $data['cat_name']; ?>"><?php echo $value; ?><span class="item-cat">
								<?php echo $data['cat_name']; ?></span></a>
								</div>
								</li>
								<?php }} ?>
							</ul>
						</div><!-- END SOCIAL MEDIA POST -->
					</div><!-- END SIDEBAR POST -->
					<div class="sidebar-post">
						<div class="sidebar_title"><h4>Ad Banner</h4></div>
						<div class="sidebar-banner">
							<a href="#"><img src="assets/img/blog/banner.jpg" class="img-fluid" alt="" /></a>
						</div><!-- END SOCIAL MEDIA POST -->
					</div><!-- END SIDEBAR POST -->						
				</div><!-- END COL-->				
			</div><!-- / END ROW -->
		</div><!-- END CONTAINER  -->
	</section>	
	<!-- END BLOG -->	
											
	<?php include('include/footer.php');?>