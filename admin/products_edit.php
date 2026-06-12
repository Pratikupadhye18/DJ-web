<?php
include 'includes/session.php';
include 'includes/slugify.php';

if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $slug = slugify($name);
    $phr = 0;
    $pdr = 0;
    $atr = 0;
    $car_overviwe = $_POST['car_overviwe'];
    $service_offered = $_POST['service_offered'];
    $hide = $_POST['hide'];
    $category = $_POST['category'];
    $id = $_POST['id'];
    $conn = $pdo->open();
    try {
        $stmt = $conn->prepare("UPDATE products SET name=:name, phr=:phr, pdr=:pdr, atr=:atr, slug=:slug, car_overviwe=:car_overviwe , service_offered=:service_offered, hide=:hide, cat_id=:category  WHERE id=:id");
        $stmt->execute(['name' => $name, 'phr' => $phr, 'pdr' => $pdr, 'atr' => $atr, 'slug' => $slug, 'car_overviwe' => $car_overviwe,'service_offered' => $service_offered, 'hide' => $hide, 'id' => $id, 'category' => $category]);
        $_SESSION['success'] = 'Product updated successfully';
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }
    $pdo->close();
} else {
    $_SESSION['error'] = 'Fill up edit product form first';
}
header('location: products.php');
?>