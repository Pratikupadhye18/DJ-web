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
                    FAQ
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">FAQ</li>
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
                            <div class="box-body">
                                <form method="post" action="" id="review_form" enctype="multipart/form-data">
                                    <!--<div class="form-group">
                                        <label for="exampleInputEmail1">Photo</label>
                                        <input type="file" name="image" class="form-control" id="customer_photo">
                                    </div>-->
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">FAQ </label>
                                        <input type="text" name="c_name" class="form-control" id="cust_name" placeholder="FAQ" />
                                        <div id="#error_firstname"></div>
                                    </div>
                                 <input type="hidden" name="select_product" class="form-control" id="select_product" value="1" >
                                    <div class="editor">
                                        <label for="exampleInputEmail1">Answer</label>
                                        <textarea class="ckeditor" name="c_review" id="noticeMessage" ></textarea>
                                    </div>
                                    

                                    <div class="row">
                                        <div style="clear:both"></div>
                                        <p class="text-center">
                                            <button type="submit" name="home_details_submit" class="btn btn-success btn-outline-rounded green"> Submit <span style="margin-left:10px;" class="glyphicon glyphicon-send"></span></button>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-body">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                    <th>Name</th>
                                    <!--<th>Description</th>-->
                                    <th>Status</th>
                                    <th>Tools</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $conn = $pdo->open();

                                        try {
                                            $now = date('Y-m-d');
                                            $stmt = $conn->prepare("SELECT * FROM reviews_detail");
                                            $stmt->execute();
                                            foreach ($stmt as $show11) {
                                                $rev_id = $show11['id'];
                                                $pro_id = $show11['property_id'];
                                                $c_name = $show11['c_name'];
                                                $c_head = $show11['heading'];
                                                $c_place = $show11['c_place'];
                                                $rating = $show11['rating'];
                                                $c_status = $show11['status'];
                                                $c_review = $show11['c_review'];
                                                $c_rev = substr($c_review, 0, 60);
                                                if ($c_status != "on") {
                                                    $tr_status = '<button type="button" class="btn-danger">
                                                    <i class="fa fa-close"></i></button>';
                                                } else {
                                                    $tr_status = '<button type="button" class="btn-success">
                                                    <i class="fa fa-check"></i></button>';
                                                }
                                                echo "
                                        <tr>
                                        <td>" . $c_name . "</td>
                                        
                                        <td>" . $tr_status . '</td>
                                        <td>
                                        <form style="display: inline-block;"  method="post" action="edit_review.php">
                                        <input type="hidden" name="review_pro_id" value="' . $pro_id . '">
                                        <input type="hidden" name="edit_review_id" value="' . $show11['id'] . '">
                                        <button type="submit" name="edit_review_button" class="btn-success">
                                        <i class="fa fa-pencil"></i></button>
                                        </form>
                                        <form style="display: inline-block;margin-left: 10px;" action="" method="post">
                                        <input type="hidden" name="delete_rate" value="' . $show11['id'] . '">
                                        <button type="submit" name="delete_rate_button" onClick="return check()" class="btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>              
                                        </td>
                                        </td>
                                        </tr>';
                                            }
                                        } catch (PDOException $e) {
                                            echo $e->getMessage();
                                        }

                                        $pdo->close();
                                        ?>
                                    </tbody>
                                </table>
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
        function check()
        {
            var retVal = confirm(" Do you want to delete? ");
            if (retVal == true)
            {
                return true;
            } else
            {
                return false;
            }
        }

    </script>
    <?php
    if (isset($_POST['home_details_submit'])) {
        $c_name = $_POST['c_name'];
        $c_review = $_POST['c_review'];
        $rating = $_POST['score'];
        $property_id = $_POST['select_product'];
        $heading = 'No';
        $admin_id = 1;

        $name = $_FILES['image']['name'];
        $type = $_FILES['image']['type'];
        $size = $_FILES['image']['size'];
        $tmp = $_FILES['image']['tmp_name'];

        $name1 = preg_replace('/\s+/', '', $name);
        $tmp = preg_replace('/\s+/', '', $tmp);

        
        $conn = $pdo->open();
        ///echo "INSERT into reviews_detail(property_id,admin_id,img,c_name,heading,c_review,status,rating,added_date) VALUES(" . $property_id . "," . $admin_id . ",'0','" . $c_name . "','" . $heading . "','" . $c_review . "','on','" . $rating . "',now())";
        ///exit();
        $insert = $conn->prepare("INSERT into reviews_detail(property_id,admin_id,img,c_name,heading,c_review,status,rating,added_date) VALUES(" . $property_id . "," . $admin_id . ",'0','" . $c_name . "','" . $heading . "','" . $c_review . "','on','" . $rating . "',now())");
        $insert->execute();
        if ($insert) {

            echo "<script>alert('Inserted Successfully.');</script>";
            ?>
            <script>
                window.location = 'review.php';
            </script>
            <?php
        } else {
            echo "<script>alert('Sonthing went wrong please try after sometime.');</script>";
            ?>
            <script>
                window.location = 'review.php';
            </script>
            <?php
        }
    }
    ?>
    <?php
    if (isset($_POST['delete_rate_button'])) {
        $delete_id = $_POST['delete_rate'];
        $select = $conn->prepare("SELECT property_id,img FROM reviews_detail WHERE id='" . $delete_id . "'");
        $select->execute();
        $dell = $select->fetch();
        $del_file = $dell['img'];
        $pro_id = $dell['property_id'];
        $delete = $conn->prepare("DELETE FROM reviews_detail WHERE id=$delete_id");
        $delete->execute();
        if ($delete) {
//            $FileName = '../uploads/review/' . $pro_id . '/' . $del_file;
//            @chown($FileName, 465); //Insert an Invalid UserId to set to Nobody Owner; for instance 465
//            @unlink($FileName);
            echo "<script>alert('Deleted Successfully.');</script>";
            echo "<script>window.location = 'review.php'</script>";
        }
    }

    $pdo->close();
    ?>
    <link href="../dist/css/rating.css" rel="stylesheet" type="text/css"/>
</body>
</html>
