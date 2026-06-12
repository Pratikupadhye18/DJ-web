<?php include 'includes/session.php'; ?>
<?php
$p_id = $_REQUEST['p_id'];
$f_name = $_REQUEST['p_name'];

if ($p_id === '') {
    echo "<script>window.location = 'products.php'</script>";
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
                    <?= $f_name ?> Features
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Car Features</li>
                </ol>
            </section>
            <section   class="content">
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
                <form class="form-horizontal" method="POST" action="products_f.php" enctype="multipart/form-data">
                    <input type="hidden" name="pro_id" value="<?= $p_id ?>" />
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <!--<a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat" id="addproduct"><i class="fa fa-plus"></i> New</a>-->
                                </div>
                                <div class="box-body">
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>Features</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $conn = $pdo->open();
                                            try {
                                                $stmt = $conn->prepare("SELECT * FROM car_features");
                                                $stmt->execute();
                                                $i = 1;
                                                foreach ($stmt as $row) {
                                                    $f_id = $row['id'];
                                                    $value = 1;
                                                    $chek = '';
                                                    $stmt1 = $conn->prepare("SELECT * FROM car_details where product_id=$p_id and feature_id=$f_id ");
                                                    $stmt1->execute();
                                                    foreach ($stmt1 as $row1) {
                                                        $value = 1;
                                                        $chek = 'checked';
                                                    }
                                                    echo "
                                        <tr>
                                          <td><input class='feature' id='feature_" . $f_id . "' name='feature[]'  type='checkbox' value='" . $f_id . "' $chek/> <label for='feature_" . $f_id . "'>" . $row['name'] . "</label></td>
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
                                <div class="box-footer text-right">
                                    <button type="submit" class="btn btn-success btn-flat " name="update"><i class="fa fa-check-square"></i> Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>
        <?php include 'includes/footer.php'; ?>


    </div>
    <!-- ./wrapper -->

    <?php include 'includes/scripts.php'; ?>
    <?php include 'includes/feature_modal.php'; ?>
    <script>
        $(document).on('click', '#addproduct', function (e) {
            //e.preventDefault();
            // $('#features').modal('show');
            var id = $(this).data('id');
            getRow(id);
        });
        function getRow(id) {
            $.ajax({
                type: 'POST',
                url: 'products_row.php',
                data: {id: id},
                dataType: 'json',
                success: function (response) {
                    $('.name').html(response.name);
                }
            });
        }
    </script>

</body>
</html>
