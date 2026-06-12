<?php

include 'includes/session.php';
include 'includes/slugify.php';

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $head = $_POST['head'];
    $slug = slugify($name);
    $hide = slugify($_POST['category']);
    $conn = $pdo->open();

    if ($row['numrows'] > 0) {
        $_SESSION['error'] = 'Portfolio already exist by same name';
    } else {
        try {
$stmt = $conn->prepare("INSERT INTO tour(name,head,slug,hide)VALUES (:name,:head,:slug,:hide)");
    $stmt->execute(['name' => $name,'head'=>$head, 'slug' => $slug, 'hide' => $hide]);
            $_SESSION['success'] = 'Portfolio added successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }

    $pdo->close();
} else {
    $_SESSION['error'] = 'Fill up service form first';
}

header('location: tour.php');
?>