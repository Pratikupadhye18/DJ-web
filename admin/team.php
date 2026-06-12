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
                    Review
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Review</li>
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
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" name="t_name" class="form-control" id="t_name" placeholder="Name" />
                                        <div id="#error_firstname"></div>
                                    </div>
                                   <div class="form-group">
        <label for="designation">Review</label>
                                 <div class="editor">
        <textarea class="ckeditor" name="designation" id="designation"></textarea>
                                                </div>
                                            </div>
<!--                                    <div class="editor">
                                        <label for="exampleInputEmail1">About</label>
                                        <textarea class="ckeditor" name="t_about" id="noticeMessage" ></textarea>
                                    </div>-->
                                    <div class="row">
                                        <div style="clear:both"></div>
                                        <br>
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
                                    
                                   
                                    <th>Tools</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $conn = $pdo->open();

                                        try {
                                            $now = date('Y-m-d');
                                            $stmt = $conn->prepare("SELECT * FROM team_detail");
                                            $stmt->execute();
            foreach ($stmt as $show11) {
                        $team_id = $show11['id'];
                     $t_img = $show11['img'];
                 $t_designation = $show11['designation'];
                  $t_name = $show11['t_name'];
                  $t_about = $show11['t_about'];
                 $c_rev = substr($t_about, 0, 60);

                    if ($t_img != "") {
                 $cust_image = "../uploads/team/" . $t_img;
                           } else {
              $cust_image = "../images/noimage.jpg";
                                                }

                                                echo "
                                        <tr>
                            <td>" . $t_name . "</td>";
                                                echo'<td>
                                        <form style="display: inline-block;"  method="post" action="edit_team.php">
                                        <input type="hidden" name="edit_team_id" value="' . $show11['id'] . '">
                                        <button type="submit" name="edit_team_button" class="btn-success"><i class="fa fa-pencil"></i></button>
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
        $t_name = $_POST['t_name'];
        $t_about = '0';
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
        $ins_q = "INSERT into team_detail(img,admin_id,t_name,t_about,designation,added_date) VALUES('" . $img_name . "'," . $admin_id . ",'" . $t_name . "','" . $t_about . "','" . $t_designation . "',now())";
        $insert = $conn->prepare($ins_q);
        $insert->execute();
        if ($insert) {

            echo "<script>alert('Inserted Successfully.');</script>";
            ?>
            <script>
                window.location = 'team.php';
            </script>
            <?php
        } else {
            echo "<script>alert('Sonthing went wrong please try after sometime.');</script>";
            ?>
            <script>
                window.location = 'team.php';
            </script>
            <?php
        }
    }
    ?>
    <?php
    if (isset($_POST['delete_rate_button'])) {
        $delete_id = $_POST['delete_rate'];
        $select = $conn->prepare("SELECT id,img FROM team_detail WHERE id='" . $delete_id . "'");
        $select->execute();
        $dell = $select->fetch();
        $del_file = $dell['img'];
        $pro_id = $dell['property_id'];
        $delete = $conn->prepare("DELETE FROM team_detail WHERE id=$delete_id");
        $delete->execute();
        if ($delete) {
            $FileName = '../uploads/team/' . $del_file;
            @chown($FileName, 465); //Insert an Invalid UserId to set to Nobody Owner; for instance 465
            @unlink($FileName);
            echo "<script>alert('Deleted Successfully.');</script>";
            echo "<script>window.location = 'team.php'</script>";
        }
    }

    $pdo->close();
    ?>
    <link href="../dist/css/rating.css" rel="stylesheet" type="text/css"/>
</body>
</html>
