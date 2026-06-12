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
                    Blog List
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li>Blog</li>
                    <li class="active">Blog List</li>
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
                                <a href="addcons.php" class="btn btn-primary btn-sm btn-flat">
                                <i class="fa fa-plus"></i> New</a>
                            </div>
                            <div class="box-body">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                    <th>Category</th>
                                    <th>Name</th>
                                    <th>Photo</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Tools</th>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $now = date('Y-m-d');
            						$stmt = "SELECT * FROM blog";
                                    $stmt_res = mysqli_query($conn2,$stmt);
                                    while($row = mysqli_fetch_array($stmt_res)) {
                                    $image=(!empty($row['photo'])) ? '../uploads/blog/' . $row['photo'] : '../images/noimage.jpg';
                                    if($row['status'] === '1'){
                                    	$status = "Active";
                                    }
                                    else{
                                    	$status = "Inactive";
                                    }
                                    ?>
			                          <tr>
			                            <td><?php echo $row['category']; ?></td>
			                            <td><?php echo $row['title']; ?></td>
			                            <td><img src="<?php echo $image;?>" height="30" width="30"></td>
			                            <td><?php echo $row['post_dt']; ?></td>
			                            <td><?php echo $status; ?></td>
			                            <td>
			                            <a href="editcons.php?id=<?php echo $row['id']; ?>" class='btn btn-success btn-sm btn-flat'>
			                            <i class='fa fa-edit'></i> Edit</a>
			                            <form method="post" action="deletecons.php" class="config-swatch-list">
			                            <button class="btn btn-danger btn-sm btn-flat" name="delete" type="submit">
			                            <input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
			                            <i class='fa fa-trash'></i> Delete</button>
			                            </form>
			                            </td>
			                          </tr>
                        			<?php
                                    }
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
</body>
</html>
