<?php
include 'includes/session.php';
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $conn = $pdo->open();
    try {
        $stmt = $conn->prepare("DELETE FROM blog WHERE id=?");
        $stmt->execute([$id]);
        $_SESSION['success'] = 'Post deleted successfully';
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }

    $pdo->close();
} else {
    $_SESSION['error'] = 'Select post to delete first';
}
header('location: blog.php');
?>