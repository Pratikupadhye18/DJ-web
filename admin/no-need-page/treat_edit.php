<?php

include 'includes/session.php';
include 'includes/slugify.php';

if (isset($_POST['edit'])) {
    $name = $_POST['name'];
   
    $slug = slugify($name);
    $hide = slugify($_POST['category']);
    $id = $_POST['id'];
    $conn = $pdo->open();

    try {
$stmt = $conn->prepare("UPDATE treat SET name=:name, slug=:slug, hide=:hide WHERE id=:id");
  $stmt->execute(['name' => $name, 'slug' => $slug, 'hide' => $hide, 'id' => $id]);
        $_SESSION['success'] = 'Service updated successfully';
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }

    $pdo->close();
} else {
    $_SESSION['error'] = 'Fill up edit service form first';
}

header('location: treat.php');
?>