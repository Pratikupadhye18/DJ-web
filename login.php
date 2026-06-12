<?php
include('include/headerf.php');
if (isset($_SESSION['admin'])) {
    echo "<script>window.location = 'admin/home.php'</script>";
}
?>

	<!-- START SECTION TOP -->
	<section class="section-top" style="background-image: url(assets/img/bg/section-bg.jpg);  background-size:cover; background-position: center center;">
		<div class="container">
			<div class="col-lg-12 col-sm-12 col-xs-12 text-center">
				<div class="section-top-title">
					<h1>Login Page</h1>
				</div><!-- //.HERO-TEXT -->
			</div><!--- END COL -->
		</div><!--- END CONTAINER -->
	</section>	
	<!-- END SECTION TOP -->
	
	

<main class="site-main page-wrapper woocommerce single single-product">
    <section class="space-3 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-sm-12 col-xs-12">
                    <div class="woocommerce-notices-wrapper">
                    	<?php
                        if (isset($_SESSION['error'])) {
                            echo "<div class='callout bg-danger text-center'>
				            <span class='text-white'>" . $_SESSION['error'] . "</span> 
				          	</div><bt/>";
                            unset($_SESSION['error']);
                        }
                        if (isset($_SESSION['success'])) {
                            echo "<div class='callout bg-success text-center'>
            				<span class='text-white'>" . $_SESSION['success'] . "</span> 
          					</div><bt/>";
                            unset($_SESSION['success']);
                        }
                        ?> 
                    </div>
                    <h2 class="font-weight-bold mb-4">Login</h2>
                    <form class="woocommerce-form woocommerce-form-login login" method="post" action="verify.php">
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="username">Username or email address&nbsp;<span class="required">*</span></label>
                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="email" autocomplete="off" value="" required="">
                        </p>
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label for="password">Password&nbsp;<span class="required">*</span></label>
                            <input class="woocommerce-Input woocommerce-Input--text input-text form-control" type="password" name="password" autocomplete="off" required="">
                        </p>
                        <p class="form-row">
                        <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login">
                        Log in
                        </button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--shop category end-->
</main>	
											
	<?php include('include/footer.php');?>