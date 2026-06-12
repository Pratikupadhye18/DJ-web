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
                    Contact Details
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Contact Details</li>
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
                $stmt = $conn->prepare("SELECT * FROM contact_details WHERE admin_id=$admin");
                $stmt->execute();

    foreach ($stmt as $show) {
            $contact_name = $show['contact_name'];
            $timming = $show['timming'];
            $contact_email = $show['contact_email'];
            $contact_email1 = $show['contact_email1'];
            $contact_phone = $show['contact_phone'];
            $contact_phone1 = $show['contact_phone1'];
            $contact_addr = $show['contact_addr'];

            $brcontact_email = $show['brcontact_email'];
            $brcontact_phone = $show['brcontact_phone'];
            $brcontact_phone1=$show['brcontact_phone1'];
            $brcontact_addr = $show['brcontact_addr'];

            $contact_content = $show['contact_content'];
            $map_longitude = $show['map_longitude'];
            $map_latitude = $show['map_latitude'];
                }
                ?>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <form method="post" action="">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fa fa-user" aria-hidden="true"></i> Name</label>
                                        <input type="text" name="contact_name" class="form-control" id="contact_name" placeholder="Name" value="<?php echo @$contact_name ?>">
                                    </div> 
    <div class="form-group">
           <label for="exampleInputEmail1"><i class="fa fa-user" aria-hidden="true"></i>Timming</label>
    <input type="text" name="timming" class="form-control" id="timming" placeholder="Timming" value="<?php echo @$timming ?>">
                    </div>                                
                                    
                                    <div class="form-group">
            <label for="exampleInputEmail1"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email</label>
                <input type="email" name="contact_email" class="form-control" id="contact_email" placeholder="Email" value="<?php echo @ $contact_email ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fa fa-phone" aria-hidden="true"></i> Phone</label>
                                        <input type="text" name="contact_phone" class="form-control" id="contact_phone" placeholder="Phone" value="<?php echo @$contact_phone ?>">
                                    </div>

                                    

                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fa fa-map-marker" aria-hidden="true"></i> Address</label>
                                        <textarea name="contact_address" class="form-control" id="contact_address" placeholder="address"><?php echo @$contact_addr ?></textarea>
                                    </div>
                    
                                                      

                                    <div class="ui_button">
                                        <button type="submit" name="contact_submit" class="btn btn-default hi-icon hi-icon-images"><i class="fa fa-paper-plane-o"></i> Submit</button>
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
    if (isset($_POST['contact_submit'])) {

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $admin_id = test_input($_SESSION['admin']);
        $contact_name = test_input($_POST['contact_name']);
        $timming = test_input($_POST['timming']);
        $contact_email = test_input($_POST['contact_email']);
        $contact_phone = test_input($_POST['contact_phone']);
        $contact_phone1 = test_input($_POST['contact_phone1']);
        $contact_addr = $_POST['contact_address'];

        $brcontact_email = $_POST['brcontact_email'];
        $brcontact_phone = $_POST['brcontact_phone'];
        $brcontact_phone1=$_POST['brcontact_phone1'];
        $brcontact_addr = $_POST['brcontact_addr'];

        $ip = getClientIP();

        $conn = $pdo->open();
        $stmt = $conn->prepare("SELECT * FROM contact_details WHERE admin_id=$admin_id");
        $stmt->execute();
        $row = $stmt->fetch();
        if ($row == 0) {

$insert = $conn->prepare("INSERT into contact_details(admin_id,contact_name,timming,contact_email,contact_phone,contact_phone1,contact_addr,brcontact_email,brcontact_phone,brcontact_phone1,brcontact_addr,contact_det_insert_date,contact_det_ip) VALUES('" . $admin_id . "','" . $contact_name . "','" . $timming . "','" . $contact_email . "','" . $contact_phone . "','" . $contact_phone1 . "','" . $contact_addr . "','" . $brcontact_email . "','" . $brcontact_phone . "','" . $brcontact_phone1 . "','" . $brcontact_addr . "', now() ,'" . $ip . "')");
            $insert->execute();
            if ($insert) {
                echo "<script>alert('Inserted Successfully.');</script>";
                ?>
                <script>
                    window.location = '<?php echo $_SERVER["REQUEST_URI"] ?>';
                </script>
                <?php
            }
        }
        if ($row > 0) {
$update = $conn->prepare("UPDATE contact_details SET contact_name='" . $contact_name . "',timming='" . $timming . "', contact_email='" . $contact_email . "', contact_phone='" . $contact_phone . "',contact_phone1='" . $contact_phone1 . "',contact_addr='" . $contact_addr . "',brcontact_email='" . $brcontact_email . "',brcontact_phone='" . $brcontact_phone . "',brcontact_phone1='" . $brcontact_phone1 . "',brcontact_addr='" . $brcontact_addr . "', contact_det_update_date=now() , contact_det_ip='" . $ip . "' WHERE contact_id='" . $row['contact_id'] . "' AND admin_id='" . $admin_id . "'");
            $update->execute();
            if ($update) {
                echo "<script>alert('Updated Successfully.');</script>";
                ?>
                <script>
                    window.location = '<?php echo $_SERVER["REQUEST_URI"] ?>';
                </script>
                <?php
            } else {
                echo "<script>alert('Updatation Failed.');</script>";
            }
            ?>
            <script>
                window.location = '<?php echo $_SERVER["REQUEST_URI"] ?>';
            </script>
            <?php
        }
    }
    $pdo->close();
    ?>
</body>
</html>
