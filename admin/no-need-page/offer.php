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
                  About Us
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">About Us</li>
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
                $stmt = $conn->prepare("SELECT * FROM offer WHERE admin_id=$admin");
                $stmt->execute();

                foreach ($stmt as $show) {

                    $about_profile_img = $show['about_profile_img'];
                    $about_profile_img1 = $show['img1'];
                    $about_profile_img2 = $show['img2'];
                     $about_profile_img3 = $show['img3'];

            $head1 = $show['head1'];
            $head2 = $show['head2'];       
            $since = $show['since'];
            $content = $show['content'];
            $year = $show['year'];
            $project = $show['project'];
            $customer = $show['customer'];       
            $review = $show['review'];
            $why = $show['why'];
            $why_content = $show['why_content'];
           
            $accred_head = $show['accred_head'];
            $accred_head1 = $show['accred_head1'];       
            $accred_content = $show['accred_content'];
            $ontario_head = $show['ontario_head'];
            $ontario_content = $show['ontario_content'];
           
            $canadian_head = $show['canadian_head'];
           $canadian_content = $show['canadian_content'];      
            $staff_head = $show['staff_head'];
             $staff_content = $show['staff_content'];
                                        
                }
                ?>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <form method="post" action="" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-3">
     <label for="tour_qoute">About Image</label>
                        <div class="image_holder">
                     <?php if (@$about_profile_img == "") { ?>
                    <img style="width: 100%;" class="thumbnail"  src="../images/noimage.jpg">
                        <?php } else { ?>
             <img style="width: 100%;" class="thumbnail" src="../uploads/about/<?php echo @$about_profile_img ?>" title="<?php echo @html_entity_decode($about_heading) ?>" alt="<?php echo @html_entity_decode($about_heading) ?>" >
                         <?php } ?>
                     <div class="form-group">
                       <input type="file" name="image" id="about_profile_img">
                         </div>
                                            </div>
                                        </div>
                                        
                     <div class="col-md-3">
                <label for="tour_qoute">About Image</label>
                        <div class="image_holder">
                     <?php if (@$about_profile_img1 == "") { ?>
                    <img style="width: 100%;" class="thumbnail"  src="../images/noimage.jpg">
                        <?php } else { ?>
             <img style="width: 100%;" class="thumbnail" src="../uploads/about/<?php echo @$about_profile_img1 ?>" title="<?php echo @html_entity_decode($about_heading) ?>" alt="<?php echo @html_entity_decode($about_heading) ?>" >
                         <?php } ?>
                     <div class="form-group">
                       <input type="file" name="image1" id="about_profile_img1">
                         </div>
                                            </div>
                                        </div>
                                        
                 <div class="col-md-12">
                        <div class="form-group">
        <label for="head1">Heading - 1</label>
    <input type="text" name="head1" class="form-control" id="head1" placeholder="Heading - 1" value="<?php echo @html_entity_decode($head1) ?>">
                                            </div>
                                        </div>
                                        
                      <div class="col-md-12">
                                            <div class="form-group">
        <label for="head2">Heading - 2</label>
            <input type="text" name="head2" class="form-control" id="head2" placeholder="Heading - 2" value="<?php echo @html_entity_decode($head2) ?>">
                                            </div>
                                        </div>                    
                                        
                    
                <div class="col-md-12">
                                            <div class="form-group">
            <label for="since">Since</label>
    <input type="text" name="since" class="form-control" id="since" placeholder="Since" value="<?php echo @html_entity_decode($since) ?>">
                                            </div>
                                        </div>    
                                        <div class="col-md-12">
                             <div class="form-group">
        <label for="content">Description</label>
             <div class="editor">
        <textarea class="ckeditor" name="content" id="content"><?php echo html_entity_decode(@$content) ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                            
                                        <div class="col-md-12">
                                            <div class="form-group">
    <label for="year">Years Of Success</label>
                <input type="text" name="year" class="form-control" id="year" placeholder="Years Of Success" value="<?php echo @html_entity_decode($year) ?>">
                                            </div>
                                        </div>            
            <div class="col-md-12">
                                            <div class="form-group">
    <label for="project">Completed Projects</label>
                <input type="text" name="project" class="form-control" id="project" placeholder="Completed Projects" value="<?php echo @html_entity_decode($project) ?>">
                                            </div>
                                        </div>                            
           <div class="col-md-12">
                <div class="form-group">
    <label for="customer">Regular Customers</label>
                <input type="text" name="customer" class="form-control" id="customer" placeholder="Regular Customers" value="<?php echo @html_entity_decode($customer) ?>">
                                            </div>
                                        </div> 
                                        <div class="col-md-12">
                                            <div class="form-group">
    <label for="review">Positive Reviews</label>
                <input type="text" name="review" class="form-control" id="review" placeholder="Positive Reviews" value="<?php echo @html_entity_decode($review) ?>">
                                            </div>
                                        </div>   

                    <div class="col-md-3">
             <label for="tour_qoute">About Image</label>
                        <div class="image_holder">
                     <?php if (@$about_profile_img2 == "") { ?>
                    <img style="width: 100%;" class="thumbnail"  src="../images/noimage.jpg">
                        <?php } else { ?>
             <img style="width: 100%;" class="thumbnail" src="../uploads/about/<?php echo @$about_profile_img2 ?>" title="<?php echo @html_entity_decode($about_heading) ?>" alt="<?php echo @html_entity_decode($about_heading) ?>" >
                         <?php } ?>
                     <div class="form-group">
                       <input type="file" name="image2" id="about_profile_img2">
                         </div>
                                            </div>
                                        </div>  

                                         <div class="col-md-12">
                <div class="form-group">
            <label for="why">Why choose Source Momentum HealthCare - Heading</label>
            <input type="text" name="why" class="form-control" id="why" placeholder="Why choose Source Momentum HealthCare - Heading" value="<?php echo @html_entity_decode($why) ?>">
                                            </div>
                                        </div>    
                                        <div class="col-md-12">
                             <div class="form-group">
                             <label for="why_content">Description</label>
                                 <div class="editor">
                         <textarea class="ckeditor" name="why_content" id="why_content"><?php echo html_entity_decode(@$why_content) ?></textarea>
                                                </div>
                                            </div>
                                        </div> 

                                         <div class="col-md-12">
                                            <div class="form-group">
            <label for="accred_head">Accreditations/Memberships- Heading</label>
            <input type="text" name="accred_head" class="form-control" id="accred_head" placeholder="Qoute - 2" value="<?php echo @html_entity_decode($accred_head) ?>">
                                            </div>
                                        </div>  
                                        <div class="col-md-12">
                                            <div class="form-group">
                             <label for="accred_head1">Accreditation Canada - Heading</label>
            <input type="text" name="accred_head1" class="form-control" id="accred_head1" placeholder="Qoute - 2" value="<?php echo @html_entity_decode($accred_head1) ?>">
                                            </div>
                                        </div>   
                                        <div class="col-md-12">
                             <div class="form-group">
                             <label for="accred_content">Description</label>
                                 <div class="editor">
                         <textarea class="ckeditor" name="accred_content" id="accred_content"><?php echo html_entity_decode(@$accred_content) ?></textarea>
                                                </div>
                                            </div>
                                        </div>
 
 <div class="col-md-12">
                                            <div class="form-group">
        <label for="ontario_head">Ontario Home Care Association - Heading</label>
            <input type="text" name="ontario_head" class="form-control" id="ontario_head" placeholder="Ontario Home Care Association - Heading" value="<?php echo @html_entity_decode($ontario_head) ?>">
                                            </div>
                                        </div>   
                                        <div class="col-md-12">
                             <div class="form-group">
                             <label for="ontario_content">Description</label>
                                 <div class="editor">
        <textarea class="ckeditor" name="ontario_content" id="ontario_content"><?php echo html_entity_decode(@$ontario_content) ?></textarea>
                                                </div>
                                            </div>
                                        </div>

    <div class="col-md-12">
                                            <div class="form-group">
        <label for="canadian_head">Canadian Home Care Association - Heading</label>
            <input type="text" name="canadian_head" class="form-control" id="canadian_head" placeholder="Canadian Home Care Association - Heading" value="<?php echo @html_entity_decode($canadian_head) ?>">
                                            </div>
                                        </div>   
                                        <div class="col-md-12">
                             <div class="form-group">
                             <label for="canadian_content">Description</label>
                                 <div class="editor">
                         <textarea class="ckeditor" name="canadian_content" id="canadian_content"><?php echo html_entity_decode(@$canadian_content) ?></textarea>
                                                </div>
                                            </div>
                                        </div> 
                                        
    <div class="col-md-3">
        <label for="tour_qoute">About Image</label>
                        <div class="image_holder">
                     <?php if (@$about_profile_img3 == "") { ?>
                    <img style="width: 100%;" class="thumbnail"  src="../images/noimage.jpg">
                        <?php } else { ?>
             <img style="width: 100%;" class="thumbnail" src="../uploads/about/<?php echo @$about_profile_img3 ?>" title="<?php echo @html_entity_decode($about_heading) ?>" alt="<?php echo @html_entity_decode($about_heading) ?>" >
                         <?php } ?>
                     <div class="form-group">
                       <input type="file" name="image3" id="about_profile_img3">
                         </div>
                                            </div>
                                        </div>                                
     <div class="col-md-12">
                                            <div class="form-group">
        <label for="staff_head">Our Staff- Heading</label>
            <input type="text" name="staff_head" class="form-control" id="staff_head" placeholder="Our Staff- Heading" value="<?php echo @html_entity_decode($staff_head) ?>">
                                            </div>
                                        </div>   
                                        <div class="col-md-12">
                             <div class="form-group">
                             <label for="staff_content">Description</label>
                                 <div class="editor">
    <textarea class="ckeditor" name="staff_content" id="staff_content"><?php echo html_entity_decode(@$staff_content) ?></textarea>
                                                </div>
                                            </div>
                                        </div>                                                                           


                                            <div class="col-xs-12">
                        
                                
                                        
                                        <div class="col-md-12 text-center">
                                            <div class="ui_button">
                                                <button type="submit" name="about_submit" class="btn btn-default"><i class="fa fa-paper-plane-o"></i> Submit</button>
                                            </div>
                                        </div>
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
        <?php include 'includes/products_modal.php'; ?>
        <?php //include 'includes/products_modal2.php'; ?>

    </div>
    <!-- ./wrapper -->

    <?php include 'includes/scripts.php'; ?>
    <?php
    if (isset($_POST['about_submit'])) {

        $admin_id = $_SESSION['admin'];

            $head1 = $_POST['head1'];
            $head2 = $_POST['head2'];       
            $since = $_POST['since'];
            $content = $_POST['content'];
            $year = $_POST['year'];
            $project = $_POST['project'];
            $customer = $_POST['customer'];       
            $review = $_POST['review'];
            $why = $_POST['why'];
            $why_content = $_POST['why_content'];
           
            $accred_head = $_POST['accred_head'];
            $accred_head1 = $_POST['accred_head1'];       
            $accred_content = $_POST['accred_content'];
            $ontario_head = $_POST['ontario_head'];
            $ontario_content = $_POST['ontario_content'];
           
            $canadian_head = $_POST['canadian_head'];
           $canadian_content = $_POST['canadian_content'];      
            $staff_head = $_POST['staff_head'];
             $staff_content = $_POST['staff_content'];

        
     
       
        
 
       
        $name = $_FILES['image']['name'];
        $type = $_FILES['image']['type'];
        $size = $_FILES['image']['size'];
        $tmp = $_FILES['image']['tmp_name'];

        $name1 = $_FILES['image1']['name'];
        $type1 = $_FILES['image1']['type'];
        $size1 = $_FILES['image1']['size'];
        $tmp1 = $_FILES['image1']['tmp_name'];
        
  
        $name2 = $_FILES['image2']['name'];
        $type2 = $_FILES['image2']['type'];
        $size2 = $_FILES['image2']['size'];
        $tmp2 = $_FILES['image2']['tmp_name'];

        $name3 = $_FILES['image3']['name'];
        $type3 = $_FILES['image3']['type'];
        $size3 = $_FILES['image3']['size'];
        $tmp3 = $_FILES['image3']['tmp_name'];

        $ip = getClientIP();
        $folder_path = '../uploads/about';
        if (!file_exists($folder_path)) {
            mkdir($folder_path, 0777, true);
        }
        $conn = $pdo->open();
        $stmt = $conn->prepare("SELECT * FROM offer WHERE admin_id=$admin_id");
        $stmt->execute();
        $row = $stmt->fetch();
        if ($row == 0) {

    if (($type == "image/jpeg") || ($type == "image/png") || ($type == "image/gif") || ($name == "")) {
                if ($size <= 2000000) {
$insert = $conn->prepare("INSERT into offer(admin_id, about_profile_img,img1,img2,img3,head1,head2,since,content,year,project,customer,review,why,why_content,accred_head,accred_head1,accred_content,ontario_head,ontario_content,canadian_head,canadian_content,staff_head,staff_content,about_inst_date,about_ip) VALUES('" . $admin_id . "','" . $name . "','" . $name1 . "','" . $name2 . "','" . $name3 . "','" . $head1 . "','" . $head2 . "','" . $since . "','" . $content . "','" . $year . "','" . $project . "','" . $customer . "','" . $review . "','" . $why . "','" . $why_content . "','" . $accred_head . "','" . $accred_head1 . "','" . $accred_content . "','" . $ontario_head . "','" . $ontario_content . "','" . $canadian_head . "','" . $canadian_content . "','" . $staff_head . "','" . $staff_content . "',  now() ,'" . $ip . "')");
                    $insert->execute();
                } else {
        echo"<script>alert('size is more than 1000kb,choose another one')</script>";
                }
            } else {
                echo"<script>alert('$type is not a valid type of file')</script>";
            }


            if ($insert) {
                move_uploaded_file($tmp, "../uploads/about/$name");
                move_uploaded_file($tmp, "../uploads/about/$name1");
                move_uploaded_file($tmp, "../uploads/about/$name2");
                move_uploaded_file($tmp, "../uploads/about/$name3");

                echo "<script>alert('Inserted Successfully.');</script>";
                ?>
                <script>
                    window.location = '<?php echo $_SERVER["REQUEST_URI"] ?>';
                </script>
                <?php
            }
        }
        if ($row > 0) {
            // while ($loop = mysqli_fetch_assoc($row)) {
            $del_file = $row['about_profile_img'];
    if ($name == "") { $name = $row['about_profile_img'];}
     if ($name1 == "") { $name1 = $row['img1']; }
     if ($name2 == "") { $name2 = $row['img2']; }
     if ($name3 == "") { $name3 = $row['img3']; }
            if (($type == "image/jpeg") || ($type == "image/png") || ($type == "image/gif") || ($type == "")) {
                
                
$update = $conn->prepare("UPDATE offer SET about_profile_img='" . $name . "' ,img1='" . $name1 . "',img2='" . $name2 . "',img3='" . $name3 . "',head1='" . $head1 . "',head2='" . $head2 . "',since='" . $since . "',content='" . $content . "', year='" . $year . "',project='" . $project . "',customer='" . $customer . "',review='" . $review . "',why='" . $why . "',why_content='" . $why_content . "',accred_head='" . $accred_head . "',accred_head1='" . $accred_head1 . "',accred_content='" . $accred_content . "',ontario_head='" . $ontario_head . "',ontario_content='" . $ontario_content . "',canadian_head='" . $canadian_head . "',canadian_content='" . $canadian_content . "',staff_head='" . $staff_head . "',staff_content='" . $staff_content . "', about_update_date=now(), about_ip='" . $ip . "' WHERE about_id='" . $row['about_id'] . "' AND admin_id='" . $admin_id . "'");
                $update->execute();
            }
            //}
            if ($update == true) {
             move_uploaded_file($tmp1, "../uploads/about/$name1");
            move_uploaded_file($tmp, "../uploads/about/$name");
            move_uploaded_file($tmp2, "../uploads/about/$name2");
            move_uploaded_file($tmp3, "../uploads/about/$name3");
                $FileName = '../uploads/about/' . $del_file;
                @chown($FileName, 465); //Insert an Invalid UserId to set to Nobody Owner; for instance 465
                if ($name != $del_file) {
                    unlink($FileName);
                }
                echo "<script>alert('Updated Successfully.');</script>";
                ?>
                <script>
                    window.location = '<?php echo $_SERVER["REQUEST_URI"] ?>';
                </script>
                <?php
            } else {
                echo "<script>alert('Updatation Failed.');</script>";
            }
        }
    }
    $pdo->close();
    ?>
</body>
</html>
