<?php
include 'includes/session.php';
include 'includes/slugify.php';

if (isset($_POST['add'])) {
	$name = $_POST['name'];
	$cate = $_POST['cate'];
	$slug = slugify($cate);
    $conn = $pdo->open();

        try {
            $stmt = $conn->prepare("INSERT INTO crew3 (cate,name,slug) VALUES (:cate,:name,:slug)");
            $stmt->execute(['cate' => $cate,'name' => $name,'slug' => $slug]);
            $_SESSION['success'] = 'Category added successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }

    $pdo->close();
} else {
    $_SESSION['error'] = 'Fill up Category form first';
}

header('location: crew3.php');
?>