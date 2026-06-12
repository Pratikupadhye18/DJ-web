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
                    <?php 
                    if($_POST['add_inner_pages_id']) {
                        $inner_id = $_POST['add_inner_pages_id'];
                    } else if($_GET['id']){
                        $inner_id = $_GET['id'];
                    }
                    ?>
                    Add <?= $_POST['add_inner_pages_name']?>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"> <?= $_POST['add_inner_pages_name']?> </li>
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
                                    <!--<div class="form-group">-->
                                    <!--    <label for="exampleInputEmail1">Photo</label>-->
                                    <!--    <input type="file" name="image" class="form-control" id="about_profile_img">-->
                                    <!--</div>-->
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" name="t_name" class="form-control" id="t_name" placeholder="Name" />
                                        <div id="#error_firstname"></div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">fa fa-icon</label>
                                        <select name="designation" class="form-control">
                                            <option value="fa fa-car"> fa fa-car</option>
                                            <option value="fa fa-heart"> fa fa-heart</option>
                                            <option value="fa fa-user"> fa fa-user</option>
                                            <option value="fa fa-thumbs-up"> fa fa-thumbs-up</option>
                                            <option value="fa fa-history"> fa fa-history</option>
                                        </select>
                                    </div>
                                    <div class="editor">
                                        <label for="exampleInputEmail1">Description</label>
                                        <textarea class="ckeditor" name="t_about" id="noticeMessage" ></textarea>
                                    </div>
                                    <div class="row">
                                        <div style="clear:both"></div>
                                        <br>
                                        <p class="text-center">
                                            <input type="hidden" name="sub_id" value="<?= $inner_id?>">
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
                                    <th>Icon</th>
                                    <th>Tools</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $conn = $pdo->open();

                                        try {
                                            $now = date('Y-m-d');
                                            $stmt = $conn->prepare("SELECT * FROM inner_pages_detail where sub_id='$inner_id'");
                                            $stmt->execute();
                                            foreach ($stmt as $show11) {
                                                $inner_pages_id = $show11['id'];
                                                $t_img = $show11['img'];
                                                $t_designation = $show11['designation'];
                                                $t_name = $show11['t_name'];
                                                $t_about = $show11['t_about'];
                                                $c_rev = substr($t_about, 0, 60);

                                                if ($t_img != "") {
                                                    $cust_image = "../uploads/inner_pages/" . $t_img;
                                                } else {
                                                    $cust_image = "../images/noimage.jpg";
                                                }

                                                echo "
                                        <tr>
                                         <td>" . $t_name . "</td>
                                         <td><i class='" . $t_designation . "' height='50px'></i></td>";
                                                echo'<td>
                                        <form style="display: inline-block;"  method="post" action="edit_inner_pages.php">
                                        <input type="hidden" name="edit_inner_pages_id" value="' . $show11['id'] . '">
                                        <input type="hidden" name="sub_id" value="' . $show11['sub_id'] . '">
                                        <button type="submit" name="edit_inner_pages_button" class="btn-success"><i class="fa fa-pencil"></i></button>
                                        </form>
                                        <form style="display: inline-block;margin-left: 10px;" action="" method="post">
                                        <input type="hidden" name="delete_rate" value="' . $show11['id'] . '">
                                        <input type="hidden" name="sub_id" value="' . $show11['sub_id'] . '">
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
        $t_name = $_POST['t_name'];
        $t_about = $_POST['t_about'];
        $t_designation = $_POST['designation'];
        $admin_id = 1;
        $sub_id = $_POST['sub_id'];
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

        $folder_path = '../uploads/inner_pages';
        $targetDir = '../uploads/inner_pages/';
        if (!file_exists($folder_path)) {
            mkdir($folder_path, 0777, true);
        }
        if (($_FILES["image"]["type"] == "image/gif") ||
                ($_FILES["image"]["type"] == "image/jpeg") ||
                ($_FILES["image"]["type"] == "image/png") ||
                ($_FILES["image"]["type"] == "image/pjpeg") || ($name == "")
        ) {

            function compress_image($source_url, $destination_url, $quality) {

                $info = @getimagesize($source_url);

                if ($info['mime'] == 'image/jpeg')
                    $image = imagecreatefromjpeg($source_url);

                elseif ($info['mime'] == 'image/gif')
                    $image = imagecreatefromgif($source_url);

                elseif ($info['mime'] == 'image/png')
                    $image = imagecreatefrompng($source_url);

                imagejpeg($image, $destination_url, $quality);
                return $destination_url;
            }

            $targetFile = $targetDir . $img_name;
            $filenames = compress_image($_FILES["image"]["tmp_name"], $targetFile, 80);
            $compress_size = filesize($folder_path);
        }
        $conn = $pdo->open();
        $ins_q = "INSERT into inner_pages_detail(img,admin_id,t_name,t_about,designation,added_date,sub_id) VALUES('" . $img_name . "'," . $admin_id . ",'" . $t_name . "','" . $t_about . "','" . $t_designation . "',now(), '" . $sub_id . "')";
        $insert = $conn->prepare($ins_q);
        $insert->execute();
        if ($insert) {

            echo "<script>alert('Inserted Successfully.');</script>";
            ?>
            <script>
                window.location = 'add_inner_pages.php?id=<?= $sub_id?>';
            </script>
            <?php
        } else {
            echo "<script>alert('Sonthing went wrong please try after sometime.');</script>";
            ?>
            <script>
                window.location = 'add_inner_pages.php?id=<?= $sub_id?>';
            </script>
            <?php
        }
    }
    ?>
    <?php
    if (isset($_POST['delete_rate_button'])) {
        $delete_id = $_POST['delete_rate'];
        $sub_id = $_POST['sub_id'];
        $select = $conn->prepare("SELECT id,img FROM inner_pages_detail WHERE id='" . $delete_id . "'");
        $select->execute();
        $dell = $select->fetch();
        $del_file = $dell['img'];
        $pro_id = $dell['property_id'];
        $delete = $conn->prepare("DELETE FROM inner_pages_detail WHERE id=$delete_id");
        $delete->execute();
        if ($delete) {
            $FileName = '../uploads/inner_pages/' . $del_file;
            @chown($FileName, 465); //Insert an Invalid UserId to set to Nobody Owner; for instance 465
            @unlink($FileName);
            echo "<script>alert('Deleted Successfully.');</script>";
            echo "<script>window.location = 'add_inner_pages.php?id=$sub_id'</script>";
        }
    }

    $pdo->close();
    ?>
    <link href="../dist/css/rating.css" rel="stylesheet" type="text/css"/>
</body>
</html>
