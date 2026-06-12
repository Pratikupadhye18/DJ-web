<?php
include 'includes/session.php';
include 'includes/format.php';
$admin_id = 1;
$url = $_SERVER['HTTP_REFERER'];
?>
<?php
if (isset($_POST['dele_gallery'])) {
    $d = $_POST['dele_gallery'];
    $folder_path = '../uploads/project/';
    $sql = "SELECT file_name FROM project WHERE image_id='" . $d . "'";
    $fet = $conn->prepare($sql);
    $fet->execute();
    $row = $fet->fetch(PDO::FETCH_ASSOC);
    $sql_d = "DELETE FROM project WHERE image_id='" . $d . "'";

    $del1 = $conn->prepare($sql_d);
    $del1->execute();
    if ($del1) {
        $FileName = $folder_path . $row['file_name'];
        @chown($FileName, 465); //Insert an Invalid UserId to set to Nobody Owner; for instance 465
        @unlink($FileName);
        print "Deleted successfully.";
    }
}
?>