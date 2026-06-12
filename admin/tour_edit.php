<?php

include 'includes/session.php';
include 'includes/slugify.php';

if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $head = $_POST['head'];
    $slug = slugify($name);
    $hide = slugify($_POST['category']);
    $id = $_POST['id'];
    $conn = $pdo->open();

    try {
$stmt = $conn->prepare("UPDATE tour SET name=:name,head=:head,slug=:slug, hide=:hide WHERE id=:id");
  $stmt->execute(['name' => $name,'head' => $head, 'slug' => $slug, 'hide' => $hide, 'id' => $id]);
        $_SESSION['success'] = 'Portfolio updated successfully';
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }

    $pdo->close();
} else {
    $_SESSION['error'] = 'Fill up edit service form first';
}

header('location: tour.php');
?>