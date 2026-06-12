<?php

include 'includes/session.php';
include 'includes/slugify.php';

if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $slug = slugify($name);
    $l_description = $_POST['l_description'];
    $hide = slugify($_POST['category']);
    $id = $_POST['id'];
    $conn = $pdo->open();

    try {
    $stmt = $conn->prepare("UPDATE crew SET name=:name, description=:l_description, slug=:slug, hide=:hide WHERE id=:id");
        $stmt->execute(['name' => $name, 'l_description' => $l_description, 'slug' => $slug, 'hide' => $hide, 'id' => $id]);
        $_SESSION['success'] = 'Crew updated successfully';
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }

    $pdo->close();
} else {
    $_SESSION['error'] = 'Fill up edit crew form first';
}

header('location: crew.php');
?>