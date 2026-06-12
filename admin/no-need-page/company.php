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
                    Our Company 
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Our Company </li>
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
                $company_img_c = '';
                $company_title_c = '';
                $company_content_c = '';
                $company_content_c2 = '';
                $status_c = '1';
                $admin = $_SESSION['admin'];
                $conn = $pdo->open();
                $stmt = $conn->prepare("SELECT * FROM company_details WHERE admin_id=$admin");
                $stmt->execute();

                foreach ($stmt as $show) {
                    $company_img_c = $show['company_img'];
                    $company_title_c = $show['company_title'];
                    $company_content_c = $show['company_content'];
                    $company_content_c2 = $show['company_content2'];
                    $status_c = $show['status'];
                }
                ?>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <?php if ($company_img_c != "") { ?>
                                    <form method="post" action="" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?php echo $show['company_id'] ?>"> 
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
                                                <?php if ($company_img_c == "") { ?>
                                                    <img style="width: 100%;" class="thumbnail"  src="../images/noimage.jpg">
                                                <?php } else { ?>
                                                    <img style="width: 100%;" class="thumbnail" src="../uploads/company/<?php echo $company_img_c ?>" title="<?php echo $company_title_c ?>" alt="<?php echo $company_title_c ?>" >

                                                <?php } ?>
                                                <div class="form-group">
                                                    <input type="file" name="image" id="company_img">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="company_title">company Title</label>
                                                <input type="text" name="company_title" class="form-control" id="company_title" placeholder="company Title" value="<?php echo $company_title_c ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="company_content">company Short Content</label>
                                                <div class="editor">
                                                    <textarea class="ckeditor" name="company_content" id="company_content"><?php echo $company_content_c ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="company_content">company Long Content</label>
                                                <div class="editor">
                                                    <textarea class="ckeditor" name="company_content2" id="company_content2"><?php echo $company_content_c2 ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 text-center">
                                            <div class="ui_button">
                                                <button type="submit" name="company_submit" class="btn btn-default"><i class="fa fa-paper-plane-o"></i> Submit</button>
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
    if (isset($_POST['company_submit'])) {

        $admin_id = $_SESSION['admin'];
        $company_title = $_POST['company_title'];
        $company_content = $_POST['company_content'];
        $company_content2 = $_POST['company_content2'];
        $status = 1;//$_POST['status'];
        $name = $_FILES['image']['name'];
        $type = $_FILES['image']['type'];
        $size = $_FILES['image']['size'];
        $tmp = $_FILES['image']['tmp_name'];
        $ip = getClientIP();
        $folder_path = '../uploads/company';
        if (!file_exists($folder_path)) {
            mkdir($folder_path, 0777, true);
        }
        $conn = $pdo->open();
        $stmt = $conn->prepare("SELECT * FROM company_details WHERE admin_id=$admin_id");
        $stmt->execute();
        $row = $stmt->fetch();
        if ($row == 0) {

            if (($type == "image/jpeg") || ($type == "image/png") || ($type == "image/gif") || ($name == "")) {
                if ($size <= 2000000) {
                    $insert = $conn->prepare("INSERT into company_details(admin_id, company_img, company_title,company_content,company_content2,status) VALUES('" . $admin_id . "','" . $name . "','" . $company_title . "','" . $company_content . "','" . $company_content2 . "',  '" . $status . "')");
                    $insert->execute();
                } else {
                    echo"<script>alert('size is more than 1000kb,choose another one')</script>";
                }
            } else {
                echo"<script>alert('$type is not a valid type of file')</script>";
            }


            if ($insert) {
                move_uploaded_file($tmp, "../uploads/company/$name");
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
            $del_file = $row['company_img'];
            if ($name == "") {
                $name = $row['company_img'];
            }
            if (($type == "image/jpeg") || ($type == "image/png") || ($type == "image/gif") || ($type == "")) {
                $update = $conn->prepare("UPDATE company_details SET company_img='" . $name . "' , company_title='" . $company_title . "', company_content='" . $company_content . "',  company_content2='" . $company_content2 . "', status='" . $status . "' WHERE company_id='" . $row['company_id'] . "' AND admin_id='" . $admin_id . "'");
                $update->execute();
            }
            //}
            if ($update == true) {
                move_uploaded_file($tmp, "../uploads/company/$name");
                $FileName = '../uploads/company/' . $del_file;
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
        $stmt = $conn->prepare("SELECT * FROM company_details WHERE admin_id=$admin_id");
        $stmt->execute();
        $row = $stmt->fetch();
        if ($row > 0) {
            $del_file = $row['company_img'];
            if (($type == "image/jpeg") || ($type == "image/png") || ($type == "image/gif") || ($type == "")) {
                $update = $conn->prepare("UPDATE company_details SET company_img='" . $name . "' WHERE company_id='" . $row['company_id'] . "' AND admin_id='" . $admin_id . "'");
                $update->execute();
            }
            //}
            if ($update == true) {
                move_uploaded_file($tmp, "../uploads/company/$name");
                $FileName = '../uploads/company/' . $del_file;
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
