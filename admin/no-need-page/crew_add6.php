<?php
include 'includes/session.php';
include 'includes/slugify.php';

if (isset($_POST['add'])) {
	$name = $_POST['name'];
	$slug = slugify($name);
    $conn = $pdo->open();

        try {
            $stmt = $conn->prepare("INSERT INTO crew6 (name,slug) VALUES (:name,:slug)");
            $stmt->execute(['name' => $name,'slug' => $slug]);
            $_SESSION['success'] = 'Voices added successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }

    $pdo->close();
} else {
    $_SESSION['error'] = 'Fill up Voices form first';
}

header('location: crew6.php');
?>