<?php include 'includes/session.php'; ?>
<?php

if (!empty($_FILES)) {

    $s_id = $_POST['s_id'];
    $folder_path = '../images/';
    $targetDir = '../images/';
    $fName = $_FILES['file']['name'];
    $tName = $_FILES["file"]["tmp_name"];
    $fileName1 = preg_replace('/\s+/', '', $fName);
    $tmpName = preg_replace('/\s+/', '', $tName);

    $fileName = preg_replace_callback('/\.\w+$/', function($m) {
        $img_name = @$m[1] . "_" . time() . strtolower($m[0]);
        return $img_name;
    }, $fileName1);
    $fileSize = $_FILES['file']['size'];
    if ($_FILES["file"]["error"] > 0) {
        $error = $_FILES["file"]["error"];
    } else if (($_FILES["file"]["type"] == "image/gif") ||
            ($_FILES["file"]["type"] == "image/jpeg") ||
            ($_FILES["file"]["type"] == "image/png") ||
            ($_FILES["file"]["type"] == "image/pjpeg")) {
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
        $filenames = compress_image($tmpName, $targetFile, 80);

        $compress_size = filesize($targetFile);


        $conn = $pdo->open();
        try {
        $stmt = $conn->prepare("INSERT INTO spro_images (file_name,uploaded_img_date,updated_image_date) VALUES('" . $fileName . "',now(),now() )");
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        $pdo->close();
    }
}
?>