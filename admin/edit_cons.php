<?php
include 'includes/session.php';
include 'includes/slugify.php';
$conn = $pdo->open();
if (isset($_POST['edit_post'])) {
    $title = $_POST['title'];
    $availability = $_POST['availability'];
    $postdescription = $_POST['postdescription'];
    $category = $_POST['blog_cat'];
    $photo = $_FILES['photo']['name'];
    $postdt = date('F d, Y');
    $id = $_POST['id'];
    $old_photo = $_POST['old_image'];
    $slug = slugify($title);
    /********************************************/

    $stmt = $conn->prepare("SELECT * FROM blog WHERE title=? AND id !=?");
    $stmt->execute([$title, $id]);
    $count = $stmt->rowCount();
    if ($count > 0) {
        $_SESSION['error'] = 'A post already exist by same name';
    } else {
        if (!empty($photo)) {
            $ext = pathinfo($photo, PATHINFO_EXTENSION);
            if ($ext === 'JGP' || $ext === 'jpg' || $ext === 'png' || $ext === 'PNG') {
                $new_photo = 'cons_' . time() . '.' . $ext;
                move_uploaded_file($_FILES['photo']['tmp_name'], '../uploads/blog/' . $new_photo);
            } else {
                $_SESSION['error'] = 'Wrong format photo';
                $new_photo = $old_photo;
            }
        } else {
            $new_photo = $old_photo;
        }
        
        try {
			$stmt = $conn->prepare("UPDATE blog SET category=?,photo=?,post=?,title=?,slug=?,post_dt=?,status=? WHERE id=?");
			$stmt->execute([$category,$new_photo, $postdescription, $title, $slug ,$postdt,$availability,$id]);
            $_SESSION['success'] = 'Blog edited successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }
} 
else {
    $_SESSION['error'] = 'Fill up form first';
}
$pdo->close();
header('location: blog.php');
?>