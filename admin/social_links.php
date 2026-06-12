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
                    Social Links
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Social Links</li>
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
                $stmt = $conn->prepare("SELECT * FROM social_links WHERE admin_id=$admin");
                $stmt->execute();

                foreach ($stmt as $show) {

                    $facebook = $show['facebook'];
                    $twitter = $show['twitter'];
                    $instagram = $show['instagram'];
                    $linkdin = $show['linkdin'];
                    
                    $pinterest = $show['pinterest'];
                    $youtube = $show['youtube'];
                    
                }
                ?>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <form name="social" method="post" action="">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fa fa-facebook-official"></i> Facebook</label>
                                        <input type="text" class="form-control" name="facebook_link" id="facebook_link" placeholder="Facebook" value="<?php echo @$facebook; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fa fa-twitter-square"></i> Twitter</label>
                                        <input type="text" class="form-control" name="twitter_link" id="twitter_link" placeholder="Twitter" value="<?php echo @$twitter ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fa fa-linkedin-square" aria-hidden="true"></i> Linkedin</label>
                                        <input type="text" class="form-control" name="linkdin" id="linkdin" placeholder="Linkedin" value="<?php echo @$linkdin ?>">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fa fa-pinterest-square" aria-hidden="true"></i>
                                            Pinterest</label>
                                        <input type="text" class="form-control" name="pinterest" id="pinterest" placeholder="Pinterest" value="<?php echo @$pinterest ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fa fa-youtube-square" aria-hidden="true"></i>
                                            YouTube</label>
                                        <input type="text" class="form-control" name="youtube" id="youtube" placeholder="YouTube" value="<?php echo @$youtube ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</label>
                                        <input type="text" class="form-control" name="instagram" id="instagram" placeholder="Instragram" value="<?php echo @$instagram ?>">
                                    </div>

                                    <div class="ui_button">
                                        <button type="submit" class="btn btn-default hi-icon hi-icon-images" name="social_submit"><i class="fa fa-paper-plane-o"></i> Submit</button>
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
    if (isset($_POST['social_submit'])) {

        $facebook1 = $_POST['facebook_link'];
        $twitter1 = $_POST['twitter_link'];
        $instagram1 = $_POST['instagram'];
        $linkdin1 = $_POST['linkdin'];
        $youtube1 = $_POST['youtube'];
        
        $pinterest1 = $_POST['pinterest'];
        $admin_id = $_SESSION['admin'];
        $ip = getClientIP();

        $conn = $pdo->open();
        $stmt = $conn->prepare("SELECT * FROM social_links WHERE admin_id=$admin_id");
        $stmt->execute();
        $row = $stmt->fetch();

        if ($row == 0) {
            $insert1 = $conn->prepare("INSERT into social_links(admin_id,facebook,twitter,linkdin,pinterest,instagram,youtube,social_status,social_insert_date,social_ip) VALUES('" . $admin_id . "','" . $facebook1 . "','" . $twitter1 . "','" . $linkdin1 . "', '" . $pinterest1 . "', '" . $instagram1 . "', '" . $youtube1 . "', 1 , now() ,'" . $ip . "')");
            $insert1->execute();

            if ($insert1) {
                echo "<script>alert('Inserted Successfully.');</script>";
                ?>
                <script>
                    window.location = '<?php echo $_SERVER["REQUEST_URI"] ?>';
                </script>
                <?php
            }
        }
        if ($row > 0) {
                $update = $conn->prepare("UPDATE social_links SET facebook='" . $facebook1 . "', twitter='" . $twitter1 . "', linkdin='" . $linkdin1 . "', pinterest='" . $pinterest1 . "', instagram='" . $instagram1 . "', youtube='" . $youtube1 . "', social_update_date=now() , social_ip='" . $ip . "' WHERE social_id='" . $row['social_id'] . "' AND admin_id='" . $admin_id . "'");
                $update->execute();
            if ($update) {
                echo "<script>alert('Updated Successfully.');</script>";
                ?>
                <script>
                    window.location = '<?php echo $_SERVER["REQUEST_URI"] ?>';
                </script>
                <?php
            }
        }
    }
    $pdo->close();
    ?>
</body>
</html>
