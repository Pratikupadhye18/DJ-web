<?php

include 'includes/session.php';
include 'includes/slugify.php';

if (isset($_POST['addcolor'])) {
    $name = $_POST['color_name'];

    $slug = slugify($name);
    $code = $_POST['color_code'];
    $pro_id = $_POST['prodid'];
    $availability = $_POST['color_availability'];
    $filename = $_FILES['color_photo']['name'];
    $conn = $pdo->open();

    $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM colors WHERE slug=:slug and pro_id=:proid GROUP BY id");
    $stmt->execute(['slug' => $slug, 'proid' => $pro_id]);
    $row = $stmt->fetch();

    if ($row['numrows'] > 0) {
        $_SESSION['error'] = 'color already exist by same name';
    } else {
        if (!empty($filename)) {
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            $new_filename = 'c_pro_' . time() . '.' . $ext;
            move_uploaded_file($_FILES['color_photo']['tmp_name'], '../images/' . $new_filename);
        } else {
            $new_filename = '';
        }
        try {
            $stmt = $conn->prepare("INSERT INTO colors (pro_id,name,slug,photo,code,availability) VALUES (:pro_id,:name,:slug,:photo,:code,:availability)");
            $stmt->execute(['pro_id' => $pro_id, 'name' => $name, 'slug' => $slug, 'code' => $code, 'photo' => $new_filename, 'availability' => $availability]);
            $_SESSION['success'] = 'color added successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }

    $pdo->close();
} else {
    $_SESSION['error'] = 'Fill up color form first';
}

header('location: products.php');
?>