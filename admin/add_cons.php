<?php
include 'includes/session.php';
include 'includes/slugify.php';
$conn = $pdo->open();
if (isset($_POST['add_post'])) {
    $title = $_POST['title'];
    $postdescription = $_POST['postdescription'];
    $availability = $_POST['availability'];
    $photo = $_FILES['photo']['name'];
    $category = $_POST['blog_cat'];
    $postdt = date('F d, Y');
    $slug = slugify($title);
    /********************************************/

    $stmt = $conn->prepare("SELECT * FROM blog WHERE title=?");
    $stmt->execute([$title]);
    $count = $stmt->rowCount();
    if ($count > 0) {
        $_SESSION['error'] = 'A Blog already exist by same Name';
    } else {
        if (!empty($photo)) {
            $ext = pathinfo($photo, PATHINFO_EXTENSION);
            if ($ext === 'JGP' || $ext === 'jpg' || $ext === 'png' || $ext === 'PNG') {
                $new_photo = 'cons_' . time() . '.' . $ext;
                move_uploaded_file($_FILES['photo']['tmp_name'], '../uploads/blog/' . $new_photo);
            } else {
                $_SESSION['error'] = 'Wrong format photo';
                $new_photo = '';
            }
        } else {
            $new_photo = '';
        }
        try {
			$stmt = $conn->prepare("INSERT INTO blog (category,photo,post,title,slug,post_dt,status,seo_title,seo_meta) VALUES (?,?,?,?,?,?,?,?,?)");
			$stmt->execute([$category,$new_photo,$postdescription,$title,$slug,$postdt,$availability,'','']);
            $_SESSION['success'] = 'Blog added successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }
} 
else {
    $_SESSION['error'] = 'Fill up the form first';
}
$pdo->close();
header('location: blog.php');
?>