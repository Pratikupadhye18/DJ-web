<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo (!empty($admin['photo'])) ? '../assets/' . $admin['photo'] : '../assets/admin-logo.jpg'; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $admin['firstname'] . ' ' . $admin['lastname']; ?></p>
                <a><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Dashboard</li>
            <li><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="header">MANAGE</li>
            <li><a href="crew3.php"><i class="fa fa-circle"></i> <span>Inner Pages Banner</span></a></li>
            <li><a href="crew2.php"><i class="fa fa-circle"></i> <span>Meta Data</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-circle"></i>
                    <span>Portfolio</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
					<li><a href="category.php"><i class="fa fa-circle"></i><span>Portfolio Category</span></a></li>
		            <li><a href="tour.php"><i class="fa fa-circle"></i> Portfolio</a></li>
		            
                </ul>
            </li> 
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-circle"></i>
                    <span>Blog</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
					<li><a href="brand.php"><i class="fa fa-circle"></i><span>Blog Category</span></a></li>
		            <li><a href="blog.php"><i class="fa fa-circle"></i> Blog</a></li>
		            
                </ul>
            </li> 
			<li><a href="review.php"><i class="fa fa-circle"></i>FAQ</a></li>
			<li><a href="social_links.php"><i class="fa fa-facebook"></i> <span>Social Links</span></a></li>
			<li><a href="registration.php"><i class="fa fa-envelope"></i> <span>Email Register</span></a></li>
			<li><a href="contact_details.php"><i class="fa fa-phone-square"></i> <span>Contact</span></a></li>
			
             
            
             
             
		     <!--<li><a href="treat.php"><i class="fa fa-circle-o"></i>Beta Program</a></li>      
		     <li><a href="institutions.php"><i class="fa fa-circle-o"></i>Institutions We Provide</a></li>
			 <li><a href="gallery.php"><i class="fa fa-circle-o"></i> Gallery</a></li> 
             <li><a href="popup.php"><i class="fa fa-circle"></i> <span>Special Offer</span></a></li>
             <li><a href="company.php"><i class="fa fa-info-circle"></i> <span>Our Company</span></a></li>
             <li><a href="pages.php"><i class="fa fa-circle-o"></i> <span>Add Other Pages</span></a></li>-->
            
        </ul>
    </section>
</aside>