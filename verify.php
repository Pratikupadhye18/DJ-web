<?php
include 'includes/session.php';
$conn = $pdo->open();

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password_t = $_POST['password'];
    $password = md5($password_t);
    try {
        $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email = :email GROUP BY id LIMIT 1");
        $stmt->execute(['email' => $email]);
        $row = $stmt->fetch();
        if ($row['numrows'] > 0) {
            if ($row['status']) {
                if ($password === $row['password']) {
                    if ($row['type']) {
                        $_SESSION['admin'] = $row['id'];
                        //header('location: admin/home.php');
                    } else {
                        $_SESSION['user'] = $row['id'];
                    }
                } else {
                    $_SESSION['error'] = 'Incorrect Password';
                }
            } else {
                $_SESSION['error'] = 'Account not activated.';
            }
        } else {
            $_SESSION['error'] = 'Email not found';
        }
    } catch (PDOException $e) {
        echo "There is some problem in connection: " . $e->getMessage();
    }
} else {
    $_SESSION['error'] = 'Input login credentails first';
}

$pdo->close();

header('location: login.php');
?>