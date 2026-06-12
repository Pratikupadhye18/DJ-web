<?php

include 'includes/session.php';
include 'includes/slugify.php';

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $slug = slugify($name);
    $phr = 0;
    $pdr = 0;
    $atr = 0;
    $car_overviwe = $_POST['car_overviwe'];
    $service_offered = $_POST['service_offered'];
    $hide = $_POST['hide'];
    $filename = $_FILES['photo']['name'];
    $conn = $pdo->open();

    $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM products WHERE slug=:slug GROUP BY id");
    $stmt->execute(['slug' => $slug]);
    $row = $stmt->fetch();

    if ($row['numrows'] > 0) {
        $_SESSION['error'] = 'Car already exist by same name';
    } else {
        if (!empty($filename)) {
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            $new_filename_p = 'pro_' . time() . '.' . $ext;
            move_uploaded_file($_FILES['photo']['tmp_name'], '../images/' . $new_filename_p);
        } else {
            $new_filename_p = '';
        }
        try {
            $stmt = $conn->prepare("INSERT INTO products (phr, name, pdr, atr, car_overviwe, service_offered, slug, hide, photo, cat_id) VALUES (:phr, :name, :pdr, :atr, :car_overviwe, :service_offered, :slug, :hide, :photo, :category)");
            $stmt->execute(['phr' => $phr, 'name' => $name, 'pdr' => $pdr, 'atr' => $atr, 'car_overviwe' => $car_overviwe, 'service_offered' => $service_offered, 'slug' => $slug, 'hide' => $hide, 'photo' => $new_filename_p, 'category' => $category]);
            $_SESSION['success'] = 'Car added successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }

    $pdo->close();
} else {
    $_SESSION['error'] = 'Fill up car form first';
}

header('location: products.php');
?>