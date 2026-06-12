<?php

include 'includes/session.php';

$output = '';

$conn = $pdo->open();

$stmt = $conn->prepare("SELECT * FROM brand");
$stmt->execute();

foreach ($stmt as $row) {
    $output .= "<option value='" . $row['id'] . "' class='append_items'>" . $row['name'] . "</option>";
}
$output .= "<option value='0' class='append_items'>Other</option>";
$pdo->close();
echo json_encode($output);
?>