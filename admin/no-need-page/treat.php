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
        </style>
        <?php include 'includes/navbar.php'; ?>
        <?php include 'includes/menubar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                   Dear Beta Drone-User Customer:
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li>Dear Beta Drone-User Customer:</li>
                    <li class="active">Dear Beta Drone-User Customer:</li>
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
                                <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat" id="addproduct"><i class="fa fa-plus"></i> New</a>
                            </div>
                            <div class="box-body">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                    <th>Title</th>
                            <!-- <th>Tour Category</th> -->
                                    <!-- <th>Photo</th> -->
                                    <th>Tools</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $conn = $pdo->open();
                                        try {
                                            $now = date('Y-m-d');
                $stmt = $conn->prepare("SELECT * FROM treat");
                            $stmt->execute();
                foreach ($stmt as $row) {

                   $t_cat=$row['hide'];
    // $stmt2 = $conn->prepare("SELECT * FROM tour WHERE id=$t_cat ");
    //         $stmt2->execute();
    //         foreach ($stmt2 as $row2) {
    //         $cat=$row2['name'];
    //                  }

        $image = (!empty($row['photo'])) ? '../images/' . $row['photo'] : '../images/noimage.jpg';
                $ser = ($row['hide'] == 'feet') ? 'fleet' : $row['hide'];
                                                echo "
                          <tr>
                            <td>" . $row['name'] . "</td>
                            
                           
                            <td>
                              <button class='btn btn-success btn-sm edit btn-flat' data-id='" . $row['id'] . "'><i class='fa fa-edit'></i> Edit</button>
                               
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
        <?php include 'includes/treat_modal.php'; ?>
    </div>
    <!-- ./wrapper -->

    <?php include 'includes/scripts.php'; ?>
    <script>
        $(function () {
             getCategory();
            // CKEDITOR.replace('editor2');
            // CKEDITOR.replace('editor3');
            $(document).on('click', '.edit', function (e) {
                e.preventDefault();
                $('#edit').modal('show');
                var id = $(this).data('id');
                getRow(id);
            });

            $(document).on('click', '.delete', function (e) {
                e.preventDefault();
                $('#delete').modal('show');
                var id = $(this).data('id');
                getRow(id);
            });

            $(document).on('click', '.photo', function (e) {
                e.preventDefault();
                var id = $(this).data('id');
                getRow(id);
            });
            $("#addnew").on("hidden.bs.modal", function () {
                $('.append_items').remove();
                getCategory();
            });
            $("#edit").on("hidden.bs.modal", function () {
                $('.append_items').remove();
                 getCategory();
            });

        });

        function getRow(id) {
            $.ajax({
                type: 'POST',
                url: 'treat_row.php',
                data: {id: id},
                dataType: 'json',
                success: function (response) {
                    $('#desc').html(response.description);
                    $('.name').html(response.name);
                    $('.srid').val(response.id);
                    $('#edit_name').val(response.name);
                    $('#edit_location').val(response.location);
                    $('#edit_waiter').val(response.waiter);
                    $('#edit_seat').val(response.seat);
                    $('#edit_price').val(response.price);
                    $('#edit_category').val(response.hide);
                    // CKEDITOR.instances["editor3"].setData(response.description);
                }
            });
        }

        function getCategory() {
            $.ajax({
                type: 'POST',
                url: 'fetch_cat.php',
                dataType: 'json',
                success: function (response) {
                    $('#category').append(response);
                    $('#edit_category').append(response);
                }
            });
        }
        
    </script>
</body>
</html>
