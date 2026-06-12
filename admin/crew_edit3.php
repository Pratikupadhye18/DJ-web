<?php
include 'includes/session.php';
include 'includes/slugify.php';

if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $cate = $_POST['cate'];
    $slug = slugify($cate);
    $id = $_POST['id'];
    $conn = $pdo->open();

    try {
    $stmt = $conn->prepare("UPDATE crew3 SET cate=:cate, name=:name, slug=:slug WHERE id=:id");
        $stmt->execute(['cate' => $cate,'name' => $name, 'slug' => $slug, 'id' => $id]);
        $_SESSION['success'] = 'Category updated successfully';
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }

    $pdo->close();
} else {
    $_SESSION['error'] = 'Fill up edit Category form first';
}

header('location: crew3.php');
?>