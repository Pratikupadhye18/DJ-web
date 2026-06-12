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
                    Update Review
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Update Review</li>
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
                if (isset($_POST['edit_team_button'])) {
                    $conn = $pdo->open();
                    $admin_id = 1;
                    $r_id = $_POST['edit_team_id'];
                    $fetch = $conn->prepare("SELECT * FROM team_detail WHERE id='" . $r_id . "'");
                    $fetch->execute();
                    foreach ($fetch as $show) {
                        $t_img = $show['img'];
                        $t_name = $show['t_name'];
                        $t_designation = $show['designation'];
                        $t_about = $show['t_about'];
                        $image = (!empty($t_img)) ? '../uploads/team/' . $t_img : '../images/user.jpg';
                    }

                    $pdo->close();
                    ?>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-body">
                                    <form method="post" action="" id="review_form" enctype="multipart/form-data">
                                       
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" name="t_name" class="form-control" id="t_name" placeholder="Name" value="<?php echo $t_name ?>" />
                                            <div id="#error_firstname"></div>
                                        </div>
                  <!--   <div class="form-group">
                     <label for="exampleInputEmail1">Designation</label>
            <input type="text" name="designation" class="form-control" id="designation" placeholder="Designation" value="<?php echo $t_designation ?>" />
                <div id="#error_firstname"></div>
                        </div> -->
<div class="form-group">
        <label for="designation">Review</label>
                                 <div class="editor">
        <textarea class="ckeditor" name="designation" id="designation"><?php echo $t_designation ?> </textarea>
                                                </div>
                    <div id="#error_firstname"></div>  
                                            </div>


                                        <!--<div class="editor">-->
                                        <!--    <label for="exampleInputEmail1">About</label>-->
                                        <!--    <textarea class="ckeditor" name="t_about" id="noticeMessage" ><?php echo $t_about ?></textarea>-->
                                        <!--</div>-->
                                        <div class="row">
                                            <div style="clear:both"></div>
                                            <br>
                                            <p class="text-center">
                                                <input type="hidden" name="t_id" id="t_id" value="<?php echo $r_id ?>" />
                                                <button type="submit" name="home_details_submit" class="btn btn-success btn-outline-rounded green"> Update <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></button>
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        <?php } ?>
        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/products_modal.php'; ?>

    </div>
    <!-- ./wrapper -->
    <?php include 'includes/scripts.php'; ?>
    <?php
    if (isset($_POST['home_details_submit'])) {
        $t_name = $_POST['t_name'];
        $t_id = $_POST['t_id'];
        $t_about = $_POST['t_about'];
        $t_designation = $_POST['designation'];
        $admin_id = 1;
        $name = $_FILES['image']['name'];
        $type = $_FILES['image']['type'];
        $size = $_FILES['image']['size'];
        $tmp = $_FILES['image']['tmp_name'];
        $name1 = preg_replace('/\s+/', '', $name);
        $tmp = preg_replace('/\s+/', '', $tmp);
        $img_name = preg_replace_callback('/\.\w+$/', function($m) {
            $img = @$m[1] . "_" . time() . strtolower($m[0]);
            return $img;
        }, $name1);
        $folder_path = '../uploads/team';
        $targetDir = '../uploads/team/';
        if (!file_exists($folder_path)) {
            mkdir($folder_path, 0777, true);
        }
        $conn = $pdo->open();
        $select = $conn->prepare("SELECT * FROM team_detail WHERE id='" . $t_id . "'");
        $select->execute();
        $row = $select->fetch();
        if (($_FILES["image"]["type"] == "image/gif") ||
                ($_FILES["image"]["type"] == "image/JPEG") ||
                ($_FILES["image"]["type"] == "image/PNG") ||
                ($_FILES["image"]["type"] == "image/png") ||
                ($_FILES["image"]["type"] == "image/jpeg") ||
                ($img_name == "")
        ) {

            function compress_image($source_url, $destination_url, $quality) {
                $info = @getimagesize($source_url);
                if ($info['mime'] == 'image/jpeg')
                    $image = imagecreatefromjpeg($source_url);
                elseif ($info['mime'] == 'image/gif')
                    $image = imagecreatefromgif($source_url);
                elseif ($info['mime'] == 'image/png')
                    $image = imagecreatefrompng($source_url);
                @imagejpeg($image, $destination_url, $quality);
                return $destination_url;
            }

        }
        if ($size <= 4194304) { // 4 Mb
            $targetFile = $targetDir . $img_name;
            $filenames = compress_image($_FILES["image1"]["tmp_name"], $targetFile, 80);
            $compress_size = filesize($folder_path);
        } else {
            echo "<script>alert('Size of image is greater than 4MB, Please insert image than 4 Mb.');</script>";
            ?>
            <script>
                window.location = 'all_products.php';
            </script>
            <?php
        }

        if ($row > 0) {
            while ($loop = mysqli_fetch_assoc($select)) {
                $del_file = $loop['file_name'];
                if ($img_name == "") {
                    $img_name = $loop['file_name'];
                }
                $id = $loop ['property_id'];
            }
            $query_upd = "UPDATE team_detail SET img='" . $img_name . "' , t_name='" . $t_name . "', designation='" . $t_designation . "', t_about='" . $t_about . "' WHERE id='" . $t_id . "'";
            $insert = $conn->prepare($query_upd);
            $insert->execute();
            if ($insert) {
                move_uploaded_file($tmp, "../uploads/team/$img_name");
                $FileName = '../uploads/team/' . $del_file;
                @chown($FileName, 465); //Insert an Invalid UserId to set to Nobody Owner; for instance 465
                if ($img_name != $del_file) {
                    @unlink($FileName);
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
    <?php
    if (!isset($_POST['edit_team_button'])) {

        $server = 'team.php';
        ?>
        <script>
            window.location = '<?php echo $server; ?>';
        </script>

        <?php
    }
    ?>
    <link href="../dist/css/rating.css" rel="stylesheet" type="text/css"/>
</body>
</html>
