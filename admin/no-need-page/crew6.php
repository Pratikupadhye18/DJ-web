<?php include 'includes/session.php'; ?>
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
                    VOICES
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li>VOICES</li>
                    <li class="active">VOICES</li>
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
                                <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat" id="addproduct">
                                <i class="fa fa-plus"></i> New</a> 
                            </div>
                            <div class="box-body">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                    <th>Title</th>
                                    <th>Tools</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $conn = $pdo->open();
                                        try {
                                            $now = date('Y-m-d');
                    						$stmt = $conn->prepare("SELECT * FROM crew6");
                                            $stmt->execute();
                                            foreach ($stmt as $row) {
                                            echo "
					                          <tr>
					                            <td>" . $row['name'] . "</td>
					                            <td>
					                              <button class='btn btn-success btn-sm edit btn-flat' data-id='" . $row['id'] . "'>
					                              <i class='fa fa-edit'></i> Edit</button>
												  <button class='btn btn-danger btn-sm delete btn-flat' data-id='" . $row['id'] . "'>
					                              <i class='fa fa-trash'></i> Delete</button>
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
        </div>
        <!-- -->
        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/crew_modal6.php'; ?>
    </div>
    <!-- ./wrapper -->

    <?php include 'includes/scripts.php'; ?>
    <script>
        $(function () {
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

            $("#addnew").on("hidden.bs.modal", function () {
                $('.append_items').remove();
                getCategory();
            });
            $("#edit").on("hidden.bs.modal", function () {
                $('.append_items').remove();
            });

        });

        function getRow(id) {
            $.ajax({
                type: 'POST',
                url: 'crew_row6.php',
                data: {id: id},
                dataType: 'json',
                success: function (response) {
                    $('.name').html(response.name);
                    $('.srid').val(response.id);
                    $('#edit_name').val(response.name);
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
        
    </script>
</body>
</html>
