<?php include 'includes/session.php'; ?>
<?php
//$where = '';
//if (isset($_GET['category'])) {
//    $catid = $_GET['category'];
//    $where = 'WHERE category_id =' . $catid;
//}
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<style>
			.config-swatch-list{
				margin-bottom: 0;
				padding-left: 0;
				display: inline-block
			}
			.config-swatch-list > li{
				list-style: none;
				display: inline-block
			}
			.config-swatch-list > li > label {
				position: relative;
				display: block;
				width: 10px;
				height: 10px;
				margin: 3px 6px 3px 0;
				box-shadow: 0 0 3px 0 rgb(0 0 0 / 20%);
			}
		</style>
		<?php include 'includes/navbar.php'; ?>
		<?php include 'includes/menubar.php'; ?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Product List
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li>Product</li>
					<li class="active">Product List</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
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
					<div class="col-xs-12">
						<div class="box">
							<div class="box-header with-border">
							</div>
							<div class="box-body">
								<form class="form-horizontal" method="POST" action="service_add.php" enctype="multipart/form-data">
										<div class="form-group">
											<label for="name" class="col-sm-1 control-label">Name</label>
											<div class="col-sm-5">
												<input type="text" class="form-control" id="name" name="name" required>
											</div>
											<label for="category" class="col-sm-1 control-label">Category</label>
											<div class="col-sm-5">
												<select name="category" class="form-control">
													<option>Select Category</option>
												<?php
												$q1 = "Select * from category";
												$r1 = mysqli_query($conn2,$q1);
												while($data = mysqli_fetch_array($r1)){
												?>
												<option value="<?php echo $data['name']; ?>"><?php echo $data['name']; ?></option>
												<?php
												}
												?>
												</select>
											</div>
										</div>
										
										<div class="form-group">
											<label for="photo" class="col-sm-1 control-label">Image</label>
											<div class="col-sm-5">
												<input type="file" class="form-control" id="photo" name="photo" required>
											</div>
											<label for="p3" class="col-sm-1 control-label">Price</label>
											<div class="col-sm-5">
												<input type="text" class="form-control" id="price" name="price" required>
											</div>
											
										</div>
										<div class="form-group">
											<label for="photo" class="col-sm-1 control-label">Offer Price</label>
											<div class="col-sm-5">
												<input type="text" class="form-control" id="off_price" name="off_price" required>
											</div>
										</div>

										<p><b>Description</b></p>
										<div class="form-group">
										<div class="col-sm-12">
										<textarea id="editor1" class="form-control" name="description" rows="5" cols="150" required></textarea>
										</div>
										</div>

										<p><b>Components</b></p>
										<div class="form-group">
										<div class="col-sm-12">
										<textarea id="editor2" class="form-control" name="components" rows="5" cols="150" required></textarea>
										</div>
										</div>

										<p><b>Specifications</b></p>
										<div class="form-group">
										<div class="col-sm-12">
										<textarea id="editor3" class="form-control" name="specification" rows="5" cols="150" required></textarea>
										</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-primary btn-flat" name="add">
										<i class="fa fa-save"></i> Save</button>
									</div>
								</form> 
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<?php include 'includes/footer.php'; ?>
	</div>
	<!-- ./wrapper -->

	<?php include 'includes/scripts.php'; ?>
	<script>
		$(function () {
			CKEDITOR.replace('editor2');
			CKEDITOR.replace('editor3');
			CKEDITOR.replace('editor4');
			// CKEDITOR.replace('editor5');
			$(document).on('click', '.edit', function (e) {
				e.preventDefault();
				$('#edit').modal('show');
				var id = $(this).data('id');
				getRow(id);
			});

</script>
</body>
</html>
