<?php

include 'includes/session.php';

if (isset($_POST['id'])) {
    try {
        $id = $_POST['id'];
        $conn = $pdo->open();
        $stmt = $conn->prepare("SELECT *, booking.id AS prodid, booking.FirstName AS fname, products.name AS carname FROM booking LEFT JOIN products ON products.id=booking.CarId WHERE booking.id=:id");
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch();
        $pdo->close();
        echo json_encode($row);
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }
}
?>