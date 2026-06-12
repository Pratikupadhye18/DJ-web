<?php
include 'includes/session.php';
include 'includes/slugify.php';

if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $slug = slugify($name);
    $id = $_POST['id'];
    $conn = $pdo->open();

    try {
    $stmt = $conn->prepare("UPDATE crew8 SET name=:name, slug=:slug WHERE id=:id");
        $stmt->execute(['name' => $name, 'slug' => $slug, 'id' => $id]);
        $_SESSION['success'] = 'Makers updated successfully';
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }

    $pdo->close();
} else {
    $_SESSION['error'] = 'Fill up edit Makers form first';
}

header('location: crew8.php');
?>