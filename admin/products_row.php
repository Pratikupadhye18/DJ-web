<?php

include 'includes/session.php';

if (isset($_POST['id'])) {
    try {
        $id = $_POST['id'];
        $conn = $pdo->open();
        $stmt = $conn->prepare("SELECT *, products.id AS prodid, products.name AS prodname, category.name AS catname, category.id AS cat_id  FROM products LEFT JOIN category ON category.id=products.cat_id WHERE products.id=:id");
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch();
        $pdo->close();
        echo json_encode($row);
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }
}
?>