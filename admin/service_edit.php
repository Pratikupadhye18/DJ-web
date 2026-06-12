<?php

include 'includes/session.php';
include 'includes/slugify.php';

if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $slug = slugify($name);
    $l_description = $_POST['l_description'];
    $head = $_POST['head'];
    $link = $_POST['link'];
    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];
    $p3 = $_POST['p3'];
    $hide = slugify($_POST['category']);
    $id = $_POST['id'];
    $conn = $pdo->open();

    try {
$stmt = $conn->prepare("UPDATE services SET name=:name,price=:price, description=:l_description,head=:head,link=:link,p1=:p1,p2=:p2,p3=:p3, slug=:slug, hide=:hide WHERE id=:id");
        $stmt->execute(['name' => $name,'price' => $price, 'l_description' => $l_description,'head' => $head,'link' => $link,'p1' => $p1,'p2' => $p2,'p3' => $p3, 'slug' => $slug, 'hide' => $hide, 'id' => $id]);
        $_SESSION['success'] = 'Service updated successfully';
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }

    $pdo->close();
} else {
    $_SESSION['error'] = 'Fill up edit service form first';
}

header('location: service.php');
?>