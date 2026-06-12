<?php
include 'includes/session.php';
include 'includes/format.php';
?>
<?php
$admin_id = 1;
$today = date('Y-m-d');
$year = date('Y');
if (isset($_GET['year'])) {
    $year = $_GET['year'];
}

$conn = $pdo->open();
?>
<?php
if (isset($_POST['page_submit'])) {

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $page_type = '1';

    $page_heading = mysqli_real_escape_string($conn, $_POST['page_heading']);
    $page_content = mysqli_real_escape_string($conn, $_POST['page_content']);


    if ($row == 0) {
        $sql = "INSERT INTO `page_content`(`page_heading`, `page_content`, `page_type`, `admin`) VALUES ('$page_heading','$page_content','$page_type','$admin_id')";
        $rs1 = $conn->prepare($sql);
        $rs1->execute();
    } else {
        $sql = "UPDATE `page_content` SET `page_heading`='$page_heading',`page_content`='$page_content' WHERE id = '$idd'";
        $rs2 = $conn->prepare($sql);
        $rs2->execute();
        if ($rs2) {
            echo "<script> alert('Data update Successfully'); </script>";
            ?>
            <script>
                window.location = '<?php echo $_SERVER["REQUEST_URI"] ?>';
            </script>
            <?php
        }
    }
}
?>
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
                    DURAMAX Project
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">DURAMAX Project</li>
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
                            <div class="box-header with-border">
                                <h3 class="box-title">Upload Images</h3>

                            </div>
                            <div class="box-body">
                                <div class="tab-pane" id="uidesign">
                                    <?php
                                    $file_query = $conn->prepare("SELECT count(image_id) as c_no,sum(file_size) as file FROM project WHERE admin_id='" . $admin_id . "'");
                                    $file_query->execute();
                                    foreach ($file_query as $crow) {
                                        $file_size = $crow['file'];
                                        $file_count = $crow['c_no'];
                                    }
                                    ?>

                                    <div class="heading">
                                        <h1>Drag&amp;Drop Multiple Files Upload</h1>
                                    </div>
                                    <div class="image_upload_div">
                                        <form action="project_upload.php" method="post" class="dropzone" id="HomeSlideGallery">
                                            <input type="hidden" name="s_id" value="1">
                                        </form>
                                    </div>


                                    <?php if (isset($_GET['s_id'])) { ?>
                                        <div class="buttonContainer">
                                            <p>Click to Refresh Projects Button after uploading images <a href="projects.php?s_id=<?= $_GET['s_id'] ?>" class="btn btn-success btn-outline-rounded green" onClick="return gallery()">Refresh Projects</a></p>
                                        </div>
                                    <?php } else { ?>
                                        <div class="buttonContainer">
                                            <p>Click to Refresh Projects Button after uploading images <a href="projects.php" class="btn btn-success btn-outline-rounded green" onClick="return gallery()">Refresh Projects</a></p>
                                        </div>
                                    <?php } ?>
                                    <div style="clear:both;"></div>
                                    <form name="k" id="form_mul_del" method="post" action="">
                                        
                                        <br><br>
                                        <div class="row" id="sortable">
                                            <?php
                                            $s_id_data = 1;

                                            if (!empty($s_id_data)) {
                                                $fetch = $conn->prepare("SELECT * FROM project WHERE admin_id='" . $admin_id . "'  ORDER BY image_id ASC");
                                            } else {
                                                $fetch = $conn->prepare("SELECT * FROM project WHERE admin_id='" . $admin_id . "'  ORDER BY image_id ASC");
                                            }
                                            $fetch->execute();
                                            $count = $fetch->rowCount();
                                            foreach ($fetch as $row) {
                                                ?>
                                            <div class="col-lg-3" id="menu-order-<?php echo $row['image_id'] ?>" style="margin-bottom:15px;">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <img src="../uploads/project/<?php echo $row['file_name']; ?>" class="thumbnail img-responsive" style="min-height: 220px;max-height: 220px;margin-bottom:5px;"/>
                                                            <div>
                                                                <button class="del btn btn-danger" type="submit" value="<?php echo $row['image_id'] ?>">Delete</button>
                                                            </div>
                                                            <div class="secondBox_in"></div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </form>
                                    <div class="success-msg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- right col -->
        </div>
        <?php include 'includes/footer.php'; ?>

    </div>
    <?php $pdo->close(); ?>
    <?php include 'includes/scripts.php'; ?>
    <link rel="stylesheet" type="text/css" href="framework/css/dropzone.css" />
    <script type="text/javascript" src="framework/js/dropzone.js"></script>
    <script >

                                                $(function () {

                                                    $('#datetimepicker8, #datetimepicker9').datetimepicker({

                                                        icons: {

                                                            time: "fa fa-clock-o",

                                                            date: "fa fa-calendar",

                                                            up: "fa fa-arrow-up",

                                                            down: "fa fa-arrow-down"

                                                        }

                                                    });

                                                });

    </script> 
    <script type="text/javascript">

        $('#timepicker').timepicki();

        $('#timepicker1').timepicki();

        $('#timepicker3').timepicki();

        $('#timepicker4').timepicki();

    </script> 
    <script>

        (function () {

            [].slice.call(document.querySelectorAll('select.cs-select')).forEach(function (el) {

                new SelectFx(el);

            });

        })();



    </script>
    <script>

        $(document).ready(function () {

            document.addEventListener("leftclick", handler, true);



            function handler(e) {

                e.stopPropagation();

                e.preventDefault();

            }

        })

    </script>
    <script>
    $(document).ready(function (e) {
        $('.del').click(function () {
            
            var del = $(this).val();
            var img_id = del;
            var ret = confirm(" Do you want to delete? ");
            if (ret == true)
            {
                $.ajax({
                    url: "delete_project.php",
                    type: "POST",
                    cache: false,
                    data: {'dele_gallery': del}
                })
                        .done(function (msg) {
                            $('#menu-order-' + img_id + '').fadeOut("slow", function () {
                                alert(msg);
                            });
                        });
                return false;
            } else
            {
                return false;
            }
        });
    })

</script>
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
<script>

    function gallery()
    {
        alert('Projects is refreshed now.');
    }

</script>

</body>
</html>
