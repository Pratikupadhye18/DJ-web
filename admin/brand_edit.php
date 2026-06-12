<?php
include 'includes/session.php';
include 'includes/slugify.php';

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $slug = slugify($name);

    try {
        $stmt = $conn->prepare("UPDATE brand SET cat_name=:cat_name, cat_slug=:cat_slug WHERE id=:id");
        $stmt->execute(['cat_name' => $name, 'cat_slug' => $slug,'id' => $id]);
        $_SESSION['success'] = 'Blog Category updated successfully';
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }

    $pdo->close();
} else {
    $_SESSION['error'] = 'Fill up edit Category form first';
}

header('location: brand.php');
?>