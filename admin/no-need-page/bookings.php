<?php include 'includes/session.php'; ?>
<?php
$where = '';
if (isset($_GET['category'])) {
    $catid = $_GET['category'];
    $where = 'WHERE category_id =' . $catid;
}
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <style>
            .config-swatch-list{
                margin-bottom: 0;
                padding-left: 0;
                display: inline-block
            }
            .config-swatch-list > li{
                list-style: none;
                display: inline-block
            }
            .config-swatch-list > li > label {
                position: relative;
                display: block;
                width: 10px;
                height: 10px;
                margin: 3px 6px 3px 0;
                box-shadow: 0 0 3px 0 rgb(0 0 0 / 20%);
            }
            #description label {
                display: block;
                max-width: 100%;
                margin-bottom: 5px;
                font-weight: 500;
            }
            #description label span{
                
                font-weight: 600;
            }
            .lname {
    font-family: verdana, arial;
    font-size: 11px;
    color: #000;
    line-height: 11px;
}
        </style>
        <?php include 'includes/navbar.php'; ?>
        <?php include 'includes/menubar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Bookings
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li>Bookings</li>
                    <li class="active">Booking List</li>
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
                            <!--<div class="box-header with-border">-->
                                <!--<a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat" id="addproduct"><i class="fa fa-plus"></i> New</a>-->
                            <!--</div>-->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Pickup Location</th>
                                    <th>Drop Location</th>
                                    <th>Trip Type</th>
                                    <th>Trip Date</th>
                                    <th>Tools</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $conn = $pdo->open();
                                        try {
                                            $now = date('Y-m-d');
                                            $stmt = $conn->prepare("SELECT * FROM booking");
                                            $stmt->execute();
                                            foreach ($stmt as $row) {
                                                $TripType = '';
                                                if ($row['TripType'] === 'phr') {
                                                    $TripType = 'Per Hour';
                                                }
                                                if ($row['TripType'] === 'pdr') {
                                                    $TripType = 'Per Day';
                                                }
                                                if ($row['TripType'] === 'atr') {
                                                    $TripType = 'Airport Transfer';
                                                }
                                                echo "
                                            <tr>
                                              <td>" . $row['FirstName'] . " " . $row['LastName'] . "</td>
                                              <td>" . $row['Phone'] . "</td>
                                              <td>" . $row['PL'] . "</td>
                                              <td>" . $row['DL'] . "</td>
                                              <td>" . $TripType . "</td>
                                              <td>" . $row['DDate'] . "</td>
                                              <td>
                                              <button class='btn btn-success btn-sm details btn-flat' data-id='" . $row['id'] . "'><i class='fa fa-edit'></i> Details</button>
                                              <button class='btn btn-danger btn-sm delete btn-flat' data-id='" . $row['id'] . "'><i class='fa fa-trash'></i> Delete</button>
                                              </td>
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

            <!--            <a href='upload_gallery_img.php?id=" . $row['id'] . "' class='table-link warning del_news' id='del_event_" . $row['id'] . "'  data-id='" . $row['id'] . "' title='Add Images' >
                            <span class='fa-stack'>
                                <i class='fa fa-square fa-stack-2x warning'></i>
                                <i class='fa fa-upload fa-stack-1x fa-inverse'></i>
                            </span>
                        </a>-->
        </div>
        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/booking_modal.php'; ?>


    </div>
    <!-- ./wrapper -->

    <?php include 'includes/scripts.php'; ?>
    <script>
        $(function () {
            $(document).on('click', '.details', function (e) {
                e.preventDefault();
                $('#description').modal('show');
                var id = $(this).data('id');
                getRow(id);
            });
            $(document).on('click', '.delete', function (e) {
                e.preventDefault();
                $('#delete').modal('show');
                var id = $(this).data('id');
                getRow(id);
            });
        });
        function getRow(id) {
            $.ajax({
                type: 'POST',
                url: 'booking_row.php',
                data: {id: id},
                dataType: 'json',
                success: function (response) {
                    $('.fname').html(response.fname);
                    $('.lname').html(response.LastName);
                    $('.email').html(response.Email);
                    $('.phone').html(response.Phone);
                    $('.trip_type').html(response.TripType);
                    $('.vehicle').html(response.carname);
                    $('.ddate').html(response.DDate);
                    $('.ddtime').html(response.DTime);
                    $('.nop').html(response.NOP);
                    $('.country').html(response.Country);
                    $('.state').html(response.State);
                    $('.zipcode').html(response.Zipcode);
                    $('.pickuplocation').html(response.PL);
                    $('.destination').html(response.DL);
                    $('.additional').html(response.AdditionalNote);
                }
            });
        }

    </script>
</body>
</html>
