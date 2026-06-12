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
                    Update FAQ
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Update FAQ</li>
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
                if (isset($_POST['edit_review_button'])) {
                    $conn = $pdo->open();
                    $admin_id = 1;
                    $r_id = $_POST['edit_review_id'];
                    $pro_id = $_POST['review_pro_id'];
                    $fetch = $conn->prepare("SELECT * FROM reviews_detail WHERE property_id='" . $pro_id . "' AND admin_id='" . $admin_id . "' AND id='" . $r_id . "'");
                    $fetch->execute();
                    foreach ($fetch as $show) {
                        $c_name = $show['c_name'];
                        $r_img = $show['img'];
                        $r_heading = $show['heading'];
                        $r_content = $show['c_review'];
                        $r_place = $show['c_place'];
                        $rating = $show['rating'];
                        $status = $show['status'];
                    }

                    $pdo->close();
                    ?>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-body">
                <form method="post" action="" enctype="multipart/form-data">
                            <div class="col-md-12">
                            <div class="form-group">

                 <label for="exampleInputEmail1">FAQ </label>
<input type="text" name="c_name" class="form-control" id="cust_name" placeholder="Question" value="<?php echo html_entity_decode($c_name); ?>"/>

                                            <div id="#error_firstname"></div>

                                        </div>
                                         </div>
                                        <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Status</label>
                                            <select class="form-control input-sm" id="select_status" name="select_status">
                                                <option value="on" <?php if ($status === 'on') { ?>selected<?php } ?>>Approved</option>
                                                <option value="off" <?php if ($status ==='off') { ?>selected<?php } ?>>Pending</option>
                                            </select>

                                        </div>
</div>
<div class="col-md-12">
                                        <div class="editor">

                                            <label for="exampleInputEmail1">Answer</label>

                                            <textarea class="ckeditor" name="c_review" id="noticeMessage" ><?php echo html_entity_decode($r_content); ?></textarea>

                                        </div>
</div>

<div class="col-md-12">

                                    </div>
                                        <input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>" />

                                        <input type="hidden" name="ip" value="<?php echo getClientIP(); ?>" />

        <input type="hidden" name="pro_id" value="<?php echo @$pro_id; ?>" >

            <input type="hidden" name="r_id" value="<?php echo @$r_id; ?>" >

                                        <div style="clear:both"></div>
                                        <p class="text-center">
                                            <button type="submit" name="home_details_submit" class="btn btn-success btn-outline-rounded green"> Submit <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></button>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        <?php } ?>
        <?php include 'includes/footer.php'; ?>
        <!--  -->

    </div>
    <!-- ./wrapper -->
    <?php include 'includes/scripts.php'; ?>
    <?php
       if (isset($_POST['home_details_submit'])) {
        $ip = $_POST['ip'];
        $admin_id = 1;
        $id = $_POST['r_id'];
        $r_content = $_POST['c_review'];
        $r_cname = $_POST['c_name'];
        $rating = $_POST['score'];
        $pro_id = $_POST['pro_id'];
        $pro_id2 = $_POST['select_product'];
        $status = $_POST['select_status'];
        
                $name = $_FILES['image']['name'];
        $type = $_FILES['image']['type'];
        $size = $_FILES['image']['size'];
        $tmp = $_FILES['image']['tmp_name'];
        
           $folder_path = '../uploads/review';
        if (!file_exists($folder_path)) {
            mkdir($folder_path, 0777, true);
        }
        
        
        $conn = $pdo->open();
        $select = $conn->prepare("SELECT * FROM reviews_detail WHERE id='" . $id . "' AND property_id='" . $pro_id . "' AND admin_id='" . $admin_id . "'");
        $select->execute();
        $row = $select->fetch();
        
        
        if ($row > 0) {
        $update = $conn->prepare("UPDATE reviews_detail SET img='" . $name . "' ,property_id='" . $pro_id2 . "', c_review='" . $r_content . "', c_name='" . $r_cname . "', rating='" . $rating . "', r_update_date=now(), r_ip='" . $ip . "', status='".$status."' WHERE id='" . $row['id'] . "' AND admin_id='" . $admin_id . "'");
            $update->execute();
            if ($update) {
                echo "<script>alert('Updated Successfully.');</script>";
                $server = 'review.php';
                ?>
                <script>
                    window.location = '<?php echo $server; ?>';
                </script>
                <?php
            } else {
                echo "<script>alert('Updatation Failed.');</script>";
            }
        }
    //}
    }
    $pdo->close();
    ?>
    <?php
    if (!isset($_POST['edit_review_button'])) {

        $server = 'review.php';
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
