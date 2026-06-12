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
                    Home Page
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Home Page</li>
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
           $stmt = $conn->prepare("SELECT * FROM home_details WHERE admin_id=$admin");
                $stmt->execute();

                foreach ($stmt as $show) {
                    
              

        $about_profile_img = $show['about_profile_img'];
       $about_profile_img1 = $show['img1'];
        $about_profile_img2 = $show['img2'];
            $about_profile_img3 = $show['img3'];
        $about_profile_img4 = $show['img4'];
               
                
             $head = $show['head'];
             $head1 = $show['head1'];
             $head2 = $show['head2'];
             $head3 = $show['head3'];
             $head4 = $show['head4'];
             $head5 = $show['head5'];
             $head6 = $show['head6'];
             $head7 = $show['head7'];
             $head8 = $show['head8'];
             $head9 = $show['head9'];
             $head10 = $show['head10'];
             $head11 = $show['head11'];
             $head12 = $show['head12'];
             $head13 = $show['head13'];
             $head14 = $show['head14'];
             $des  = $show['des'];
             $des1 = $show['des1'];
             $des2 = $show['des2'];
             $des3 = $show['des3'];
             $des4 = $show['des4'];
       
            }
          ?>
                <div class="row">
                    
                    
                    
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <form method="post" action="" enctype="multipart/form-data">
                                    <div class="row">
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                    <label for="head">We Offer A Variety Of Services -Heading</label>
                 <input type="text" name="head" class="form-control" id="head" placeholder="We Offer A Variety Of Services -Heading" value="<?php echo @html_entity_decode($head) ?>">
                                            </div>
                                        </div>
                                          <div class="col-md-12">
                             <div class="form-group">
                             <label for="des">Description -Services</label>
                                 <div class="editor">
      <textarea class="ckeditor" name="des" id="des"><?php echo html_entity_decode(@$des) ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        
                                        
                                        <div class="col-md-3">
                      <label for="tour_qoute">Why Choose Source Momentum HealthCare? - Image</label>
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
                                                <!-- <div class="col-md-3">
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
      <div class="col-md-3">
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
      <div class="col-md-3">
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
                                        </div> -->
                                        <div class="col-md-12">
                                            <div class="form-group">
             <label for="head1">Why Choose Source Momentum HealthCare? - Heading</label>
                 <input type="text" name="head1" class="form-control" id="head1" placeholder="Why Choose Source Momentum HealthCare? - Heading" value="<?php echo @html_entity_decode($head1) ?>">
                                            </div>
                                        </div>
                                <!--       
                                 <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <form method="post" action="" enctype="multipart/form-data"> -->
                                    <!-- <div class="row"> -->
   <div class="col-md-12">
                            <div class="form-group">    
          <label for="des1">Why Choose Source Momentum HealthCare? -Description</label>
                                  <div class="editor">        
                         <textarea class="ckeditor" name="des1" id="des1"><?php echo @html_entity_decode($des1) ?></textarea>        
                                                </div>        
                                            </div> 
                                        </div> 

          <div class="col-md-12">
                                            <div class="form-group">
             <label for="head2">OUR FOCUS - Heading</label>
                 <input type="text" name="head2" class="form-control" id="head2" placeholder="OUR FOCUS - Heading" value="<?php echo @html_entity_decode($head2) ?>">
                                            </div>
                                        </div>
                               
   <div class="col-md-12">
                            <div class="form-group">    
          <label for="des2">OUR FOCUS -Description</label>
                                  <div class="editor">        
                         <textarea class="ckeditor" name="des2" id="des2"><?php echo @html_entity_decode($des2) ?></textarea>        
                                                </div>        
                                            </div> 
                                        </div>        
     <div class="col-md-12">
                                            <div class="form-group">
             <label for="head3">OUR OBJECTIVE - Heading</label>
                 <input type="text" name="head3" class="form-control" id="head3" placeholder="OUR OBJECTIVE - Heading" value="<?php echo @html_entity_decode($head3) ?>">
                                            </div>
                                        </div>
                               
   <div class="col-md-12">
                            <div class="form-group">    
          <label for="des3">OUR OBJECTIVE -Description</label>
                                  <div class="editor">        
                         <textarea class="ckeditor" name="des3" id="des3"><?php echo @html_entity_decode($des3) ?></textarea>        
                                                </div>        
                                            </div> 
                                        </div> 
                                          <div class="col-md-12">
                                            <div class="form-group">
             <label for="head4">OUR VISION - Heading</label>
                 <input type="text" name="head4" class="form-control" id="head4" placeholder="OUR VISION - Heading" value="<?php echo @html_entity_decode($head4) ?>">
                                            </div>
                                        </div>
                               
   <div class="col-md-12">
                            <div class="form-group">    
          <label for="des4">OUR VISION -Description</label>
                                  <div class="editor">        
                         <textarea class="ckeditor" name="des4" id="des4"><?php echo @html_entity_decode($des4) ?></textarea>        
                                                </div>        
                                            </div> 
                                        </div>                                                                                                 

                    <div class="col-md-12">
                          <div class="form-group">
                <label for="head5">Professional Staff-Heading</label>
                <input type="text" name="head5" class="form-control" id="head5" placeholder="Professional Staff-Heading" value="<?php echo @html_entity_decode($head5) ?>">
                                            </div>
                                        </div>
                                       
                                   <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <form method="post" action="" enctype="multipart/form-data">
                                    <div class="row">
                                        
                                        
                           <div class="col-md-12">
                                            <div class="form-group">
                <label for="head6">What Says Our
CUSTOMER Response - Heading</label>
                <input type="text" name="head6" class="form-control" id="head6" placeholder="What Says Our CUSTOMER Response - Heading" value="<?php echo @html_entity_decode($head6) ?>">
                                            </div>
                                        </div>

           <div class="col-md-3">
              <label for="tour_qoute">Contact Us - Image</label>
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
                <label for="head7">Lorem Ipsum Dolor - Heading</label>
                <input type="text" name="head7" class="form-control" id="head7" placeholder="Lorem Ipsum Dolor - Heading" value="<?php echo @html_entity_decode($head7) ?>">
                                            </div>
                                        </div>    
                                        
        <div class="col-md-12">
                                            <div class="form-group">
                <label for="head8">QUALITY CARE - Heading</label>
                <input type="text" name="head8" class="form-control" id="head8" placeholder="QUALITY CARE - Heading" value="<?php echo @html_entity_decode($head8) ?>">
                                            </div>
                                        </div> 
                                        <div class="col-md-12">
                                            <div class="form-group">
                <label for="head9">Contact us to get the quality service - Heading</label>
                <input type="text" name="head9" class="form-control" id="head9" placeholder="Contact us to get the quality service - Heading" value="<?php echo @html_entity_decode($head9) ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
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
                <label for="head10">RELIABLE SERVICES - Heading</label>
                <input type="text" name="head10" class="form-control" id="head10" placeholder="RELIABLE SERVICES - Heading" value="<?php echo @html_entity_decode($head10) ?>">
                                            </div>
                                        </div> 
                                        <div class="col-md-12">
                                            <div class="form-group">
                <label for="head11">Have a look at our services, provided 24/7 - Heading</label>
                <input type="text" name="head11" class="form-control" id="head11" placeholder="Have a look at our services, provided 24/7 - Heading" value="<?php echo @html_entity_decode($head11) ?>">
                                            </div>
                                        </div>                           <div class="col-md-3">
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
                <label for="head12">PROFESSIONAL STAFF- Heading</label>
                <input type="text" name="head12" class="form-control" id="head12" placeholder="PROFESSIONAL STAFF- Heading" value="<?php echo @html_entity_decode($head12) ?>">
                                            </div>
                                        </div> 
                                        <div class="col-md-12">
                                            <div class="form-group">
                <label for="head13">Team which makes us proud - Heading</label>
                <input type="text" name="head13" class="form-control" id="head13" placeholder="Team which makes us proud - Heading" value="<?php echo @html_entity_decode($head13) ?>">
                                            </div>
                                        </div>


                                 <div class="col-md-3">
                        <div class="image_holder">
                     <?php if (@$about_profile_img4 == "") { ?>
                    <img style="width: 100%;" class="thumbnail"  src="../images/noimage.jpg">
                        <?php } else { ?>
             <img style="width: 100%;" class="thumbnail" src="../uploads/about/<?php echo @$about_profile_img4 ?>" title="<?php echo @html_entity_decode($about_heading) ?>" alt="<?php echo @html_entity_decode($about_heading) ?>" >
                         <?php } ?>
                     <div class="form-group">
                       <input type="file" name="image4" id="about_profile_img4">
                         </div>
                                            </div>
                                        </div>       
                                        
 <div class="col-md-12">
                                            <div class="form-group">
                <label for="head14">Contact- Heading</label>
                <input type="text" name="head14" class="form-control" id="head14" placeholder="Contact- Heading" value="<?php echo @html_entity_decode($head14) ?>">
                                            </div>
                                        </div>                        
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

                
                
             $head = $_POST['head'];
             $head1 = $_POST['head1'];
             $head2 = $_POST['head2'];
             $head3 = $_POST['head3'];
             $head4 = $_POST['head4'];
             $head5 = $_POST['head5'];
             $head6 = $_POST['head6'];
             $head7 = $_POST['head7'];
             $head8 = $_POST['head8'];
             $head9 = $_POST['head9'];
             $head10 = $_POST['head10'];
             $head11 = $_POST['head11'];
             $head12 = $_POST['head12'];
             $head13 = $_POST['head13'];
             $head14 = $_POST['head14'];
             $des = $_POST['des'];
              $des1 = $_POST['des1'];
               $des2 = $_POST['des2'];
                $des3 = $_POST['des3'];
                 $des4 = $_POST['des4'];
       
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

        $name4 = $_FILES['image4']['name'];
        $type4 = $_FILES['image4']['type'];
        $size4 = $_FILES['image4']['size'];
        $tmp4 = $_FILES['image4']['tmp_name'];

   

        $ip = getClientIP();
        $folder_path = '../uploads/about';
        if (!file_exists($folder_path)) {
            mkdir($folder_path, 0777, true);
        }
        $conn = $pdo->open();
        $stmt = $conn->prepare("SELECT * FROM home_details WHERE admin_id=$admin_id");
        $stmt->execute();
        $row = $stmt->fetch();
        if ($row == 0) {

            if (($type == "image/jpeg") || ($type == "image/png") || ($type == "image/gif") || ($name == "")) {
                if ($size <= 2000000) {
$insert = $conn->prepare("INSERT into home_details(admin_id, about_profile_img,img1,img2,img3,img4,head,des,head1,des1,head2,des2,head3,des3,head4,des4,head5,head6,head7,head8,head9,head10,head11,head12,head13,head14,about_inst_date,about_ip) VALUES('" . $admin_id . "','" . $name . "','" . $name1 . "','" . $name2 . "','" . $name3 . "','" . $name4 . "','" . $head . "','" . $des . "','" . $head1 . "','" . $des1 . "','" . $head2 . "','" . $des2 . "','" . $head3 . "','" . $des3 . "','" . $head4 . "','" . $des4 . "','" . $head5 . "','" . $head6 . "','" . $head7 . "','" . $head8 . "','" . $head9 . "','" . $head10 . "', '" . $head11 . "', '" . $head12 . "','" . $head13 . "','" . $head14 . "',  now() ,'" . $ip . "')");
                    $insert->execute();
                } else {
                    echo"<script>alert('size is more than 1000kb,choose another one')</script>";
                }
            } else {
                echo"<script>alert('$type is not a valid type of file')</script>";
            }


            if ($insert) {
             move_uploaded_file($tmp, "../uploads/about/$name");
             move_uploaded_file($tmp1, "../uploads/about/$name1");
             move_uploaded_file($tmp2, "../uploads/about/$name2");
             move_uploaded_file($tmp3, "../uploads/about/$name3");
             move_uploaded_file($tmp4, "../uploads/about/$name4");

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
     if ($name4 == "") { $name4 = $row['img4']; }
   
            if (($type == "image/jpeg") || ($type == "image/png") || ($type == "image/gif") || ($type == "")) {
                
                
$update = $conn->prepare("UPDATE home_details SET about_profile_img='" . $name . "' ,img1='" . $name1 . "',img2='" . $name2 . "',img3='" . $name3 . "',img4='" . $name4 . "',head='" . $head . "',des='" . $des . "',head1='" . $head1 . "',des1='" . $des1 . "',head2='" . $head2 . "',des2='" . $des2 . "',head3='" . $head3 . "',des3='" . $des3 . "',head4='" . $head4 . "' ,des4='" . $des4 . "',head5='" . $head5 . "',head6='" . $head6 . "',head7='" . $head7 . "',head8='" . $head8. "',head9='" . $head9 . "',head10='" . $head10 . "', head11='" . $head11 . "', head12='" . $head12 . "',head13='" . $head13 . "',head14='" . $head14 . "', about_update_date=now(), about_ip='" . $ip . "' WHERE about_id='" . $row['about_id'] . "' AND admin_id='" . $admin_id . "'");
                $update->execute();
            }
            //}
            if ($update == true) {
            move_uploaded_file($tmp1, "../uploads/about/$name1");
            move_uploaded_file($tmp, "../uploads/about/$name");
            move_uploaded_file($tmp2, "../uploads/about/$name2");
            move_uploaded_file($tmp3, "../uploads/about/$name3");
            move_uploaded_file($tmp4, "../uploads/about/$name4");
          
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
