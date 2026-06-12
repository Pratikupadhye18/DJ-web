<?php session_start();
include 'includes/conn.php';
if (isset($_SESSION['admin'])) {
    //header('location: admin/home.php');
}
if (isset($_SESSION['user']) || isset($_SESSION['admin'])) {
    if (isset($_SESSION['user'])) {
        $id_add = $_SESSION['user'];
        $s_name = 'user';
    } else {
        $id_add = $_SESSION['admin'];
        $s_name = 'admin';
    }
    $conn = $pdo->open();

    try {
        $stmt = $conn->prepare("SELECT * FROM users WHERE id=:id");
        $stmt->execute(['id' => $_SESSION[$s_name]]);
        $user = $stmt->fetch();
    } catch (PDOException $e) {
        echo "There is some problem in connection: " . $e->getMessage();
    }

    $pdo->close();
}
?>