<?php
include 'includes/session.php';
include 'includes/slugify.php';

if (isset($_POST['add'])) {
	$name = $_POST['name'];
	$slug = slugify($name);
    $conn = $pdo->open();

        try {
            $stmt = $conn->prepare("INSERT INTO crew8 (name,slug) VALUES (:name,:slug)");
            $stmt->execute(['name' => $name,'slug' => $slug]);
            $_SESSION['success'] = 'Makers added successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }

    $pdo->close();
} else {
    $_SESSION['error'] = 'Fill up Makers form first';
}

header('location: crew8.php');
?>