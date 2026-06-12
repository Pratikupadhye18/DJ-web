<?php

include 'includes/session.php';
include 'includes/slugify.php';
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $slug = slugify($name);
    $conn = $pdo->open();

    $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM car_features WHERE name=:name GROUP BY id");
    $stmt->execute(['name' => $name]);
    $row = $stmt->fetch();

    if ($row['numrows'] > 0) {
        $_SESSION['error'] = 'Feature already exist';
    } else {
        try {
            $stmt = $conn->prepare("INSERT INTO car_features (name) VALUES (:name)");
            $stmt->execute(['name' => $name]);
            $_SESSION['success'] = 'Feature added successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }
    $pdo->close();
} else {
    $_SESSION['error'] = 'Fill up feature form first';
}

header('location: features.php');
?>