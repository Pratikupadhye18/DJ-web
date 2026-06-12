<?php include 'includes/session.php';

$f_id_data = $_REQUEST['f_id'];
$f_name = $_REQUEST['f_name'];
if ($f_id_data === '') {
    echo "<script>window.location = 'service.php'</script>";
}
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

		<?php include 'includes/navbar.php'; ?>
		<?php include 'includes/menubar.php'; ?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					<?= $f_name ?> Images
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="active">Product Images</li>
				</ol>
			</section>
			<section   class="content">
				<?php
				if (isset($_SESSION['error'])) {
					echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              " . $_SESSION['error'] . "
            </div>
          ";
					unset($_SESSION['error']);
				}
				if (isset($_SESSION['success'])) {
					echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              " . $_SESSION['success'] . "
            </div>
          ";
					unset($_SESSION['success']);
				}
				?>
				<div class="row">
					<div class="col-md-12 board">
						<style>
							.dz-max-files-reached {
								background-color: red
							};
						</style>
						<div class="tab-pane" id="uidesign">
							<div class="heading">
								<h1>Drag &amp; Drop Multiple Files Upload</h1>
							</div>
							<?php
							if ($f_id_data) { ?>
							<div class="image_upload_div">
								<form action="upload.php" method="post" class="dropzone" id="HomeSlideGallery">
									<input type="hidden" name="s_id" value="<?= $f_id_data ?>">
								</form>
							</div>
							<?php } ?>

							<?php
							if ($f_id_data) { ?>
							<form name="r" id="form_mul_ref" method="post" action="">
								<div class="buttonContainer" style="text-align: center;">
									<input type="hidden" name="f_id" value="<?php echo $f_id_data; ?>">
									<input type="hidden" name="f_name" value="<?php echo $f_name; ?>">
									<p>
										<a href="service.php" class="btn btn-success green">
											<i class="fa fa-arrow-circle-left"> Back to Product</i></a>
										<button class="btn btn-success green" type="submit" name="refresh" onClick="return gallery()">
											<i class="fa fa-refresh"> Refresh Images</i></button></p>
								</div>
							</form>
							<?php } ?>
							<div style="clear:both;"></div>
							<form name="k" id="form_mul_del" method="post" action="">
								<ul class="img_ul" id="sortable">
									<?php
									if (!empty($f_id_data)) {
										$conn = $pdo->open();
										try {
											$now = date('Y-m-d');
											$stmt = $conn->prepare("SELECT * FROM spro_images WHERE s_id='" . $f_id_data . "' ORDER BY image_id ASC");
											$stmt->execute();
											foreach ($stmt as $row) {

												echo '<li class="img_li" id="menu-order-' . $row['image_id'] . '">
                                            <figure style="height: auto">
                                                <img src="../uploads/pro_g/' . $row['s_id'] . '/' . $row['file_name'] . '" />
                                            </figure>
                                            <input type="hidden" class="dprog_id" value="' . $row['s_id'] . '" />
                                            <div>
                                                <button  style="margin-bottom: 10px;width: 100%;text-align: center;position: relative;" class="del" type="submit" value="' . $row['image_id'] . '">Delete</button>
                                            </div>
                                        </li>';
											}
										} catch (PDOException $e) {
											echo $e->getMessage();
										}

										$pdo->close();
									}
									?>
								</ul>
							</form>
							<div class="success-msg"></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</section>
		</div>
		<?php include 'includes/footer.php'; ?>


	</div>
	<!-- ./wrapper -->

	<?php include 'includes/scripts.php'; ?>
	<link rel="stylesheet" type="text/css" href="framework/css/dropzone.css" />
	<script type="text/javascript" src="framework/js/dropzone.js"> </script>
	<script>

		$(document).ready(function (e) {

			$('.del').click(function () {

				var del = $(this).val();

				var img_id = del;
				var f_id = $('.dprog_id').val();
				var ret = confirm(" Do you want to delete? ");
				if (ret == true) {

					$.ajax({
						url: "delete_gallery.php",
						type: "POST",
						cache: false,
						data: {'dele_gallery': del, 'f_id': f_id}
					})
					.done(function (msg) {
						$('#menu-order-' + img_id + '').fadeOut("slow", function () {
							alert(msg);
						});
					});
					return false;
				} else {
					return false;
				}
			});
		})

	</script>
	<script>

		function check()
		{

			var retVal = confirm(" Do you want to delete? ");

			if (retVal == true) {

				return true;

			} else {

				return false;

			}
		}
	</script>
	<script>
		$(function () {

			$("#sortable").sortable({

				update: function (event, ui) {

					var sorted = $("#sortable").sortable("serialize");

					$.post("ajax/save_order_gallery.php", {'choices': sorted}, function (data) {

						$(".success-msg").html(data);

					});

				}

			});

		});

	</script>
	<script>
		function gallery()
		{
			alert('Images are refreshed now.');
		}

	</script>
</body>
</html>
