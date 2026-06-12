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
                    Service Page
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Service Page</li>
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
                        </div>";
                    unset($_SESSION['error']);
                }
                if (isset($_SESSION['success'])) {
                    echo "<div class='alert alert-success alert-dismissible'>
                          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                          <h4><i class='icon fa fa-check'></i> Success!</h4>
                          " . $_SESSION['success'] . "
                          </div>";
                    unset($_SESSION['success']);
                }
                ?>
                <?php
                $admin = $_SESSION['admin'];
                $conn = $pdo->open();
                $stmt = $conn->prepare("SELECT * FROM service_page");
                $stmt->execute();

                foreach ($stmt as $show) {
                    $s_img = $show['service_img'];
                    $s_content = $show['service_content'];
                }
                ?>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <form method="post" action="" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="image_holder">
                                                <?php if (@$s_img == "") { ?>
                                                    <img style="width: 100%;" class="thumbnail"  src="../images/noimage.jpg">
                                                <?php } else { ?>
                                                    <img style="width: 100%;" class="thumbnail" src="../uploads/services/<?php echo @$s_img ?>" title="" alt="" >
                                                <?php } ?>
                                                <div class="form-group">
                                                    <input type="file" name="image" id="services_img" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="about_content">Services Content</label>
                                                <div class="editor">
                                                    <textarea class="ckeditor" name="s_content" id="about_content"><?php echo html_entity_decode(@$s_content) ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <div class="ui_button">
                                                <button type="submit" name="s_submit" class="btn btn-default"><i class="fa fa-paper-plane-o"></i> Submit</button>
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
        <?php include 'includes/products_modal2.php'; ?>

    </div>
    <!-- ./wrapper -->

    <?php include 'includes/scripts.php'; ?>
    <?php
    if (isset($_POST['s_submit'])) {

        $sr_content = $_POST['s_content'];
        $name = $_FILES['image']['name'];
        $type = $_FILES['image']['type'];
        $size = $_FILES['image']['size'];
        $tmp = $_FILES['image']['tmp_name'];
        $ip = getClientIP();
        $folder_path = '../uploads/services';
        if (!file_exists($folder_path)) {
            mkdir($folder_path, 0777, true);
        }
        $conn = $pdo->open();
        $stmt = $conn->prepare("SELECT * FROM service_page");
        $stmt->execute();
        $row = $stmt->fetch();
        if (!empty($name)) {
            $ext = pathinfo($name, PATHINFO_EXTENSION);
            $name = 'sr_' . time() . '.' . $ext;
        } else {
            $name = '';
        }
        if ($row == 0) {

            if (($type == "image/jpeg") || ($type == "image/png") || ($type == "image/gif") || ($type == "")) {
                if ($size <= 2000000) {
                    try {
                        $insert = $conn->prepare("INSERT into service_page(service_img,service_content,service_inst_date,service_ip) VALUES('" . $name . "','" . $sr_content . "',  now() ,'" . $ip . "')");
                        $insert->execute();
                        $_SESSION['success'] = 'Inserted Successfully';
                    } catch (PDOException $e) {
                        $_SESSION['error'] = $e->getMessage();
                    }
                } else {
                    $_SESSION['error'] = 'size is more than 1000kb,choose another one';
                }
            } else {
                $_SESSION['error'] = '$type is not a valid type of file';
            }


            if ($insert) {
                move_uploaded_file($tmp, "../uploads/services/$name");
                ?>
                <script>
                    window.location = '<?php echo $_SERVER["REQUEST_URI"] ?>';
                </script>
                <?php
            }
        }
        if ($row > 0) {
            $del_file = $row['service_img'];
            if ($name == "") {
                $name = $row['service_img'];
            }
            if (($type == "image/jpeg") || ($type == "image/png") || ($type == "image/gif"|| ($type == ""))) {
                try {
                    $update = $conn->prepare("UPDATE service_page SET service_img='" . $name . "', service_content='" . $sr_content . "', service_update_date=now(), service_ip='" . $ip . "' WHERE service_id='" . $row['service_id'] . "'");
                    $update->execute();
                    $_SESSION['success'] = 'Updated Successfully';
                } catch (PDOException $e) {
                    $_SESSION['error'] = $e->getMessage();
                }
            }
            if ($update == true) {
                move_uploaded_file($tmp, "../uploads/services/$name");
                $FileName = '../uploads/services/' . $del_file;
                @chown($FileName, 465);
                if ($name != $del_file) {
                    unlink($FileName);
                }
                ?>
                <script>
                    window.location = '<?php echo $_SERVER["REQUEST_URI"] ?>';
                </script>
                <?php
            } else {
                $_SESSION['error'] = 'Updatation Failed.';
            }
        }
    }
    $pdo->close();
    ?>
</body>
</html>
