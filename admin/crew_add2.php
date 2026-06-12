<?php
include 'includes/session.php';
include 'includes/slugify.php';

if (isset($_POST['add'])) {
	$name = $_POST['name'];
	$descr = $_POST['descr'];
	$cate = $_POST['cate'];
	$slug = slugify($cate);
    $conn = $pdo->open();

        try {
            $stmt = $conn->prepare("INSERT INTO crew2 (cate,name,descr,slug) VALUES (:cate,:name,:descr,:slug)");
            $stmt->execute(['cate' => $cate,'name' => $name,'descr' => $descr,'slug' => $slug]);
            $_SESSION['success'] = 'Meta added successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }

    $pdo->close();
} else {
    $_SESSION['error'] = 'Fill up form first';
}

header('location: crew2.php');
?>