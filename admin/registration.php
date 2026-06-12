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
                    New Registartion
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li>User</li>
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
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Website</th>
                                    <th>Service</th>
                                    <th>Message</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $conn = $pdo->open();
                                        try {
                                            $stmt = $conn->prepare("SELECT * FROM register");
                                            $stmt->execute();
                                            foreach ($stmt as $row) {
                                                echo "
                                                        <tr>
                                                          <td>" . $row['name'] . "</td>
                                                          <td>" . $row['email'] . "</td>
                                                          <td>" . $row['phone'] . "</td>
                                                          <td>" . $row['subject'] . "</td>
                                                          <td>" . $row['service'] . "</td>
                                                          <td>" . $row['message'] . "</td>
                                                        </tr>
                                                      ";
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
    <?php
    if (isset($_POST['delete_rate_button'])) {
        $delete_id = $_POST['delete_rate'];

        try {
            $delete = $conn->prepare("DELETE FROM register WHERE id='$delete_id'");
            $delete->execute();
            $_SESSION['success'] = 'Data deleted successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
        echo "<script>window.location = 'registration.php'</script>";
    }
    ?> 
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
</body>
</html>
