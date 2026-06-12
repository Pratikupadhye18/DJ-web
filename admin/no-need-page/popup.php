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
                    Special Offer
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Special Offer</li>
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
                $popup_img_c = '';
                $popup_title_c = '';
                $popup_content_c = '';
                $status_c = '';
                $admin = $_SESSION['admin'];
                $conn = $pdo->open();
                $stmt = $conn->prepare("SELECT * FROM popup_details WHERE admin_id=$admin");
                $stmt->execute();

                foreach ($stmt as $show) {
                    $popup_img_c = $show['popup_img'];
                    $popup_title_c = $show['popup_title'];
                    $popup_content_c = $show['popup_content'];
                    $status_c = $show['status'];
                }
                ?>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <?php if ($popup_img_c != "") { ?>
                                    <form method="post" action="" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?php echo $show['popup_id'] ?>"> 
                                        <div class="row">
                                            <div class="col-md-3 text-left">
                                                <div class="ui_button">
                                                    <button type="submit" name="img_remove" class="btn btn-danger btn-block"><i class="fa fa-trash"></i> Remove Image</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                <?php } else { ?>
                                <?php } ?>

                                <form method="post" action="" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="image_holder">
                                                <?php if ($popup_img_c == "") { ?>
                                                    <img style="width: 100%;" class="thumbnail"  src="../images/noimage.jpg">
                                                <?php } else { ?>
                                                    <img style="width: 100%;" class="thumbnail" src="../uploads/popup/<?php echo $popup_img_c ?>" title="<?php echo $popup_title_c ?>" alt="<?php echo $popup_title_c ?>" >

                                                <?php } ?>
                                                <div class="form-group">
                                                    <input type="file" name="image" id="popup_img">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="popup_title">Special Office Video</label>
                                                <input type="text" name="popup_title" class="form-control" id="popup_title" placeholder="Video" value="<?php echo $popup_title_c ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="popup_content">Special Offer Content</label>
                                                <div class="editor">
                                                    <textarea class="ckeditor" name="popup_content" id="popup_content"><?php echo $popup_content_c ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="col-md-12">-->
                                        <!--    <div class="form-group">-->
                                        <!--        <label for="status">Hide/Show</label>-->
                                        <!--        <select id="status" name="status" class="form-control">-->
                                        <!--            <option value="1"  <?php if ($status_c == "1") { ?>selected=""<?php } ?>>Show</option>-->
                                        <!--            <option value="0" <?php if ($status_c == "0") { ?>selected=""<?php } ?>>Hide</option>-->
                                        <!--        </select>-->
                                        <!--    </div>        -->
                                        <!--</div>-->
                                        <input type="hidden" name="status" value="1">
                                        <div class="col-md-12 text-center">
                                            <div class="ui_button">
                                                <button type="submit" name="popup_submit" class="btn btn-default"><i class="fa fa-paper-plane-o"></i> Submit</button>
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
    </div>
    <!-- ./wrapper -->

    <?php include 'includes/scripts.php'; ?>
    <?php
    if (isset($_POST['popup_submit'])) {

        $admin_id = $_SESSION['admin'];
        $popup_title = $_POST['popup_title'];
        $popup_content = $_POST['popup_content'];
        $status = $_POST['status'];
        $name = $_FILES['image']['name'];
        $type = $_FILES['image']['type'];
        $size = $_FILES['image']['size'];
        $tmp = $_FILES['image']['tmp_name'];
        $ip = getClientIP();
        $folder_path = '../uploads/popup';
        if (!file_exists($folder_path)) {
            mkdir($folder_path, 0777, true);
        }
        $conn = $pdo->open();
        $stmt = $conn->prepare("SELECT * FROM popup_details WHERE admin_id=$admin_id");
        $stmt->execute();
        $row = $stmt->fetch();
        if ($row == 0) {

            if (($type == "image/jpeg") || ($type == "image/png") || ($type == "image/gif") || ($name == "")) {
                if ($size <= 2000000) {
                    $insert = $conn->prepare("INSERT into popup_details(admin_id, popup_img, popup_title,popup_content,status) VALUES('" . $admin_id . "','" . $name . "','" . $popup_title . "','" . $popup_content . "', '" . $status . "')");
                    $insert->execute();
                } else {
                    echo"<script>alert('size is more than 1000kb,choose another one')</script>";
                }
            } else {
                echo"<script>alert('$type is not a valid type of file')</script>";
            }


            if ($insert) {
                move_uploaded_file($tmp, "../uploads/popup/$name");
                echo "<script>alert('Inserted Successfully.');</script>";
                ?>
                <script>
                    window.location = '<?php echo $_SERVER["REQUEST_URI"] ?>';
                </script>
                <?php
            }
        }
        if ($row > 0) {
            // while ($loop = mysqli_fetch_assoc($row)) {
            $del_file = $row['popup_img'];
            if ($name == "") {
                $name = $row['popup_img'];
            }
            if (($type == "image/jpeg") || ($type == "image/png") || ($type == "image/gif") || ($type == "")) {
                $update = $conn->prepare("UPDATE popup_details SET popup_img='" . $name . "' , popup_title='" . $popup_title . "', popup_content='" . $popup_content . "', status='" . $status . "' WHERE popup_id='" . $row['popup_id'] . "' AND admin_id='" . $admin_id . "'");
                $update->execute();
            }
            //}
            if ($update == true) {
                move_uploaded_file($tmp, "../uploads/popup/$name");
                $FileName = '../uploads/popup/' . $del_file;
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
    if (isset($_POST['img_remove'])) {

        $admin_id = $_SESSION['admin'];
        $id = $_POST['id'];
        $name = '';
        $type = '';
        $conn = $pdo->open();
        $stmt = $conn->prepare("SELECT * FROM popup_details WHERE admin_id=$admin_id");
        $stmt->execute();
        $row = $stmt->fetch();
        if ($row > 0) {
            $del_file = $row['popup_img'];
            if (($type == "image/jpeg") || ($type == "image/png") || ($type == "image/gif") || ($type == "")) {
                $update = $conn->prepare("UPDATE popup_details SET popup_img='" . $name . "' WHERE popup_id='" . $row['popup_id'] . "' AND admin_id='" . $admin_id . "'");
                $update->execute();
            }
            //}
            if ($update == true) {
                move_uploaded_file($tmp, "../uploads/popup/$name");
                $FileName = '../uploads/popup/' . $del_file;
                @chown($FileName, 465); //Insert an Invalid UserId to set to Nobody Owner; for instance 465
                if ($name != $del_file) {
                    unlink($FileName);
                }
                echo "<script>alert('Image Deleted Successfully.');</script>";
                ?>
                <script>
                    window.location = '<?php echo $_SERVER["REQUEST_URI"] ?>';
                </script>
                <?php
            } else {
                echo "<script>alert('Somthing went wrong');</script>";
            }
        }
    }
    $pdo->close();
    ?>
</body>
</html>
