<?php
include 'includes/session.php';
include 'includes/slugify.php';

if (isset($_POST['add'])) {
	$name = $_POST['name'];
	$slug = slugify($name);
    $conn = $pdo->open();

        try {
            $stmt = $conn->prepare("INSERT INTO crew4 (name,slug) VALUES (:name,:slug)");
            $stmt->execute(['name' => $name,'slug' => $slug]);
            $_SESSION['success'] = 'Key added successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }

    $pdo->close();
} else {
    $_SESSION['error'] = 'Fill up Key form first';
}

header('location: crew4.php');
?>