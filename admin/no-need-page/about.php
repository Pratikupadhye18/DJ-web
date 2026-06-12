<?php include 'includes/session.php'; ?>
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
                  About Us
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">About Us</li>
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
                <?php
                $admin = $_SESSION['admin'];
                $conn = $pdo->open();
                $stmt = $conn->prepare("SELECT * FROM offer WHERE admin_id=$admin");
                $stmt->execute();

                foreach ($stmt as $show) {
        		$about_profile_img = $show['about_profile_img'];
            	$head1 = $show['head1'];
            	$content = $show['content'];                                                                   
                }
                ?>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <form method="post" action="" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-3">
     										<label for="tour_qoute">About Image</label>
                        					<div class="image_holder">
                     						<?php if (@$about_profile_img == "") { ?>
                    						<img style="width: 100%;" class="thumbnail"  src="../images/noimage.jpg">
                        					<?php } else { ?>
             								<img style="width: 100%;" class="thumbnail" src="../uploads/about/<?php echo @$about_profile_img ?>" title="<?php echo @html_entity_decode($about_heading) ?>" alt="<?php echo @html_entity_decode($about_heading) ?>" >
                         					<?php } ?>
                    						<div class="form-group">
                       						<input type="file" name="image" id="about_profile_img">
                         					</div>
                                            </div>
                                        </div>
                                        
                    
                                        
                 						<div class="col-md-12">
                        					<div class="form-group">
        								<label for="head1">Heading</label>
    									<input type="text" name="head1" class="form-control" id="head1" placeholder="Heading" value="<?php echo @html_entity_decode($head1) ?>">
                                        </div>
                                        </div>
                                        
                    					<div class="col-md-12">
                             				<div class="form-group">
        									<label for="content">Description</label>
             								<div class="editor">
        									<textarea class="ckeditor" name="content" id="content"><?php echo html_entity_decode(@$content) ?></textarea>
                                            </div>
                                            </div>
                                        </div>
       
    <div class="col-xs-12">
        <div class="col-md-12 text-center">
         <div class="ui_button">
          <button type="submit" name="about_submit" class="btn btn-default"><i class="fa fa-paper-plane-o"></i> Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php $pdo->close(); ?>
        </div>
        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/products_modal.php'; ?>
        <?php //include 'includes/products_modal2.php'; ?>

    </div>
    <!-- ./wrapper -->

    <?php include 'includes/scripts.php'; ?>
    <?php
    if (isset($_POST['about_submit'])) {

        $admin_id = $_SESSION['admin'];
		$head1 = $_POST['head1'];
        $content = $_POST['content'];

        $name = $_FILES['image']['name'];
        $type = $_FILES['image']['type'];
        $size = $_FILES['image']['size'];
        $tmp = $_FILES['image']['tmp_name'];


        $ip = getClientIP();
        $folder_path = '../uploads/about';
        if (!file_exists($folder_path)) {
            mkdir($folder_path, 0777, true);
        }
        $conn = $pdo->open();
        $stmt = $conn->prepare("SELECT * FROM offer WHERE admin_id='$admin_id'");
        $stmt->execute();
        $row = $stmt->fetch();
        if ($row == 0) {

    			if (($type == "image/jpeg") || ($type == "image/png") || ($type == "image/gif") || ($name == "")) {
                if ($size <= 2000000) {
$insert = $conn->prepare("INSERT into offer(admin_id,about_profile_img,head1,content,about_inst_date,about_ip) VALUES('" . $admin_id . "','" . $name . "','" . $head1 . "','" . $content . "',  now() ,'" . $ip . "')");
                    $insert->execute();
                } else {
        echo"<script>alert('size is more than 1000kb,choose another one')</script>";
                }
            } else {
                echo"<script>alert('$type is not a valid type of file')</script>";
            }


            if ($insert) {
                move_uploaded_file($tmp, "../uploads/about/$name");
                echo "<script>alert('Inserted Successfully.');</script>";
                ?>
                <script>
                    window.location = '<?php echo $_SERVER["REQUEST_URI"] ?>';
                </script>
                <?php
            }
        }
        if ($row > 0) {
            $del_file = $row['about_profile_img'];
		    if ($name == "") { $name = $row['about_profile_img'];}
		    if (($type == "image/jpeg") || ($type == "image/png") || ($type == "image/gif") || ($type == "")) {
                     
$update = $conn->prepare("UPDATE offer SET about_profile_img='" . $name . "',head1='" . $head1 . "',content='" . $content . "',about_update_date=now(), about_ip='" . $ip . "' WHERE about_id='" . $row['about_id'] . "' AND admin_id='" . $admin_id . "'");
                $update->execute();
            }
            if ($update == true) {
             move_uploaded_file($tmp, "../uploads/about/$name");
                $FileName = '../uploads/about/' . $del_file;
                @chown($FileName, 465); //Insert an Invalid UserId to set to Nobody Owner; for instance 465
                if ($name != $del_file) {
                    unlink($FileName);
                }
                echo "<script>alert('Updated Successfully.');</script>";
                ?>
                <script>
                    window.location = '<?php echo $_SERVER["REQUEST_URI"] ?>';
                </script>
                <?php
            } else {
                echo "<script>alert('Updatation Failed.');</script>";
            }
        }
    }
    $pdo->close();
    ?>
</body>
</html>
