<?php

include 'includes/session.php';
if (isset($_POST['update'])) {
    $id = $_POST['pro_id'];
    $feature = $_POST['feature'];
    $feature_all = implode(',', $_POST['feature']);
    $conn = $pdo->open();
    $stmt = $conn->prepare("DELETE FROM car_details WHERE product_id=:id");
    $stmt->execute(['id' => $id]);

    foreach ($feature as $chk1) {
        $chk = $chk1;
        try {
            $stmt = $conn->prepare("INSERT INTO car_details (product_id, feature_id) VALUES (:product_id, :feature_id)");
            $stmt->execute(['product_id' => $id, 'feature_id' => $chk]);
            $_SESSION['success'] = 'Car details updated';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }


    $pdo->close();

    header('location:products.php');
}
?>