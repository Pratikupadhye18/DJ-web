<?php

include 'includes/session.php';
include 'includes/format.php';
$url = $_SERVER['HTTP_REFERER'];
?>
<?php

if (isset($_POST['dele_gallery'])) {
    $conn = $pdo->open();
    $d = $_POST['dele_gallery'];
    if($_POST['f_id']){
    $s_id = $_POST['f_id'];
    $folder_path = '../uploads/pro_s/' . $s_id . '/';
    $sql = "SELECT file_name FROM spro_images WHERE image_id='" . $d . "'";
    $fet = $conn->prepare($sql);
    $fet->execute();
    $row = $fet->fetch(PDO::FETCH_ASSOC);
    $sql_d = "DELETE FROM spro_images WHERE image_id='" . $d . "'";
    $del1 = $conn->prepare($sql_d);
    $del1->execute();
    if ($del1) {
        $FileName = $folder_path . $row['file_name'];
        @chown($FileName, 465); //Insert an Invalid UserId to set to Nobody Owner; for instance 465
        @unlink($FileName);
        print "Deleted successfully.";
    }
    } else {
    $folder_path = '../uploads/gallery/';
    $sql_d = "DELETE FROM gallery WHERE image_id='" . $d . "'";
    $del1 = $conn->prepare($sql_d);
    $del1->execute();
    if ($del1) {
        $FileName = $folder_path . $row['file_name'];
        @chown($FileName, 465); //Insert an Invalid UserId to set to Nobody Owner; for instance 465
        @unlink($FileName);
        print "Deleted successfully.";
    }
    }
    $pdo->close();
}
?>