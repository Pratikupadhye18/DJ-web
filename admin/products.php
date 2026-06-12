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
                    Product List
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li>Products</li>
                    <li class="active">Product List</li>
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
                                    <th>Name</th>
                                    <th>Photo</th>
                                
                                    <th>Tools</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $conn = $pdo->open();
                                        try {
                                            $now = date('Y-m-d');
                                            $stmt = $conn->prepare("SELECT * FROM products $where");
                                            $stmt->execute();
                                            foreach ($stmt as $row) {
                                                $image = (!empty($row['photo'])) ? '../images/' . $row['photo'] : '../images/noimage.jpg';
                                                $attachment = (!empty($row['attachment'])) ? '<a href="../pdf/' . $row['attachment'] . '" target="_blank"><span class="btn btn-success"><i class="fa fa-file-pdf-o"></i> Attachment</span></a>' : 'NO Attachment';
                                                $counter = ($row['date_view'] == $now) ? $row['counter'] : 0;
                                                echo "
                          <tr>
                            <td>" . $row['name'] . "</td>
                            <td>
                            <img src='" . $image . "' height='30px' width='30px'>
                            <span class='pull-right'><a href='#edit_photo' class='photo' data-toggle='modal' data-id='" . $row['id'] . "'><i class='fa fa-edit'></i></a></span>
                            </td>
                            <td>
                            <button class='btn btn-success btn-sm edit btn-flat' data-id='" . $row['id'] . "'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='" . $row['id'] . "'><i class='fa fa-trash'></i> Delete</button>
                            <form style='display:inline;' action='upload_image.php' method='POST'><input type='hidden' name='f_id' value='" . $row['id'] . "' /> <input type='hidden' name='f_name' value='" . $row['name'] . "' /> <button class='btn btn-success btn-sm btn-flat' name='u_img'><i class='fa fa-upload'></i> Add Images</button></form> 
                             <form style='display:inline;' action='feature_list.php' method='POST'><input type='hidden' name='p_id' value='" . $row['id'] . "' /> <input type='hidden' name='p_name' value='" . $row['name'] . "' /> <button class='btn btn-success btn-sm btn-flat' name='u_details'><i class='fa fa-plus'></i> Add Details</form>                            
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
        <?php include 'includes/products_modal.php'; ?>
        <?php include 'includes/products_modal_1.php'; ?>

    </div>
    <!-- ./wrapper -->

    <?php include 'includes/scripts.php'; ?>
    <script>
        $(function () {
            $(document).on('click', '.edit', function (e) {
                e.preventDefault();
                $('#edit').modal('show');
                var id = $(this).data('id');
                getCategory();
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
            $(document).on('click', '.edit_attachment', function (e) {
                e.preventDefault();
                var id = $(this).data('id');
                getRow(id);
            });

            $(document).on('click', '.features_add', function (e) {
                e.preventDefault();
                $('#features').modal('show');
                var id = $(this).data('id');
                getRow(id);
            });

            $('#select_category').change(function () {
                var val = $(this).val();
                if (val == 0) {
                    window.location = 'products.php';
                } else {
                    window.location = 'products.php?category=' + val;
                }
            });

            $('#addproduct').click(function (e) {
                e.preventDefault();
                getCategory();
            });

            $("#addnew").on("hidden.bs.modal", function () {
                $('.append_items').remove();
            });

            $("#edit").on("hidden.bs.modal", function () {
                $('.append_items').remove();
            });

        });

        function getRow(id) {
            $.ajax({
                type: 'POST',
                url: 'products_row.php',
                data: {id: id},
                dataType: 'json',
                success: function (response) {
                    $('.name').html(response.prodname);
                    $('.prodid').val(response.prodid);
                    $('#edit_name').val(response.prodname);
                    $('#edit_Per_Hour_Rate').val(response.phr);
                    $('#edit_Per_Day_Rate').val(response.pdr);
                    $('#edit_Airport_Transfer_Rate').val(response.atr);
                    $('#edit_hide').val(response.hide);
                    $('#edit_category').val(response.cat_id);
                    CKEDITOR.instances["editor4"].setData(response.car_overviwe);
                    CKEDITOR.instances["editor5"].setData(response.service_offered);
                }
            });
        }
        function getCategory() {
            $.ajax({
                type: 'POST',
                url: 'category_fetch.php',
                dataType: 'json',
                success: function (response) {
                    $('#category').append(response);
                    $('#edit_category').append(response);
                }
            });
        }
        
        CKEDITOR.replace('editor4');
        CKEDITOR.replace('editor5');
        
    </script>
</body>
</html>
