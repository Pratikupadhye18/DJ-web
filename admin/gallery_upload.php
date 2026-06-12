<?php

include 'includes/session.php';
include 'includes/format.php';
?>
<?php

session_start();
$conn = $pdo->open();
if (!empty($_FILES)) {

    $admin_id = 1;

    $folder_path = '../uploads/gallery';

    if (!file_exists($folder_path)) {
        mkdir($folder_path, 0777, true);
    }

    //include_once('include/db.php');

    $targetDir = '../uploads/gallery/';

    $fileName1 = preg_replace('/\s+/', '', $_FILES['file']['name']);

    //$ext = pathinfo($fileName1, PATHINFO_EXTENSION);
    $fileName = 'img_' . time() .'_'.$fileName1;

    $targetFile = $targetDir . $fileName;

    $fetch = $conn->prepare("SELECT * FROM gallery");
    $fetch->execute();
    $count = $fetch->rowCount();
    //$count = mysqli_num_rows($fetch);
    //$menu_order = $count + 1;

    if ($_FILES["file"]["error"] > 0) {
        $error = $_FILES["file"]["error"];
    } else if (($_FILES["file"]["type"] == "image/gif") ||
            ($_FILES["file"]["type"] == "image/jpeg") ||
            ($_FILES["file"]["type"] == "image/png") ||
            ($_FILES["file"]["type"] == "image/jpg")) {
        $name = '';
        $type = '';
        $size = '';
        $error = '';

        function compress_image($source_url, $destination_url, $quality) {

            $info = getimagesize($source_url);

            if ($info['mime'] == 'image/jpeg')
                $image = imagecreatefromjpeg($source_url);

            elseif ($info['mime'] == 'image/gif')
                $image = imagecreatefromgif($source_url);

            elseif ($info['mime'] == 'image/png')
                $image = imagecreatefrompng($source_url);

            imagejpeg($image, $destination_url, $quality);
            return $destination_url;
        }

        $targetFile = $targetDir . $fileName;
        $filenames = compress_image($_FILES["file"]["tmp_name"], $targetFile, 80);

        $compress_size = filesize($targetFile);
        $s_id = '1';
        $date = date('Y-m-d');
        $ins_q="INSERT INTO gallery (admin_id,file_name,file_size,uploaded_img_date,updated_image_date) VALUES('" . $admin_id . "','" . $fileName . "','" . $compress_size . "','".$date."','".$date."')";
        $insert = $conn->prepare($ins_q);
        $insert->execute();
    }
}
$pdo->close();
?>