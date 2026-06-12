<?php
include 'includes/session.php';
include 'includes/slugify.php';

if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $descr = $_POST['descr'];
    $cate = $_POST['cate'];
    $slug = slugify($cate);
    $id = $_POST['id'];
    $conn = $pdo->open();

    try {
    $stmt = $conn->prepare("UPDATE crew2 SET cate=:cate, name=:name, descr=:descr, slug=:slug WHERE id=:id");
        $stmt->execute(['cate' => $cate, 'name' => $name, 'descr' => $descr, 'slug' => $slug, 'id' => $id]);
        $_SESSION['success'] = 'Meta updated successfully';
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }

    $pdo->close();
} else {
    $_SESSION['error'] = 'Fill up edit form first';
}

header('location: crew2.php');
?>