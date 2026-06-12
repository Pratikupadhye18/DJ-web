
<?php

include 'includes/session.php';
include 'includes/slugify.php';

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $slug = slugify($name);

    $conn = $pdo->open();

    $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM brand WHERE cat_name=:cat_name");
    $stmt->execute(['cat_name' => $name]);
    $row = $stmt->fetch();

    if ($row['numrows'] > 0) {
        $_SESSION['error'] = 'Blog Category already exist';
    } else {
        try {
            $stmt = $conn->prepare("INSERT INTO brand (cat_name,cat_slug) VALUES (:cat_name,:cat_slug)");
            $stmt->execute(['cat_name' => $name, 'cat_slug' => $slug]);
            $_SESSION['success'] = 'Blog Category added successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }

    $pdo->close();
} else {
    $_SESSION['error'] = 'Fill up category form first';
}

header('location: brand.php');
?>