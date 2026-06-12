<?php
include 'includes/session.php';
include 'includes/header.php';
?>
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
                    Edit Blog
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li>Blog</li>
                    <li class="active">Edit Blog</li>
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
                        <form class="form-horizontal" method="POST" action="edit_cons.php" enctype="multipart/form-data">
                            <div class="box">
                                <div class="box-header with-border">
                                    <a href="blog.php" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-arrow-left"></i>
                                    Back to All</a>
                                </div>
                                <?php
                                $id = $_REQUEST['id'];
								$stmt1 = "SELECT * FROM blog WHERE `id`= '$id'";
								$res = mysqli_query($conn2,$stmt1);
                                while($rows = mysqli_fetch_array($res)){
                                $image = (!empty($rows['photo'])) ? '../uploads/blog/' . $rows['photo'] : '../images/noimage.jpg';
                                ?>
                                <div class="box-body">
                                	<div class="form-group">
                                        <label for="photo" class="col-sm-2">Photo 
                                        <span style="font-size:10px;font-weight:normal;"> (JPG,PNG)</span></label>
                                        <div class="col-sm-1">
                                            <img src="<?= $image ?>" style="height: 35px;width: 35px;" />
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="file" class="form-control" id="photo" name="photo" accept=".jpg, .png"/>
                                            <input type="hidden" name="old_image" value="<?= $rows['photo'] ?>">
                                            <input type="hidden" name="id" value="<?= $rows['id'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="availability" class="col-sm-2">Category</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="blog_cat">
                                            	<?php
                                            	$cat = "select * from brand";
                                            	$res = mysqli_query($conn2,$cat);
                                            	while($row=mysqli_fetch_array($res)){
                                            	if($row['cat_name'] == $rows['category']){
                                            		$a = 'selected';
                                            	}
                                            	else{
                                            		$a = '';
                                            	}
                                            	?>
                                            	<option value="<?php echo $row['cat_name']; ?>"<?= $a; ?>>
                                            	<?php echo $row['cat_name']; ?></option>
                                            	<?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-sm-2">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="title" value="<?= $rows['title']; ?>" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="name" class="col-sm-2">Post Description</label>
                                        <div class="col-sm-10">
                                          <textarea id="editor1" name="postdescription" rows="10" cols="80"  required><?= $rows['post']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="availability" class="col-sm-2">Status</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" id="availability" name="availability">
                                            	<option value="0" <?php
                                                if ($rows['status'] == '0') {
                                                    echo 'selected';
                                                }
                                                ?>>Not Active</option>
                                                <option value="1" <?php
                                                if ($rows['status'] == '1') {
                                                    echo 'selected';
                                                }
                                                ?>>Active</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                                <?php
								}
								?>
                                <div class="box-footer text-right">
                                    <button type="submit" class="btn btn-primary btn-flat" name="edit_post"><i class="fa fa-edit"></i> Save</button>
                                </div>
                            </div>
                        </form>
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
            //CK Editor
            CKEDITOR.replace('editor3');
        });
    </script>
</body>
</html>
