<?php
include 'config.php';

$user_id = $_GET['id'];
$new_role_id = $_POST['role_id'];

// Update user role
$sql = "UPDATE users SET role_id = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $new_role_id, $user_id);

if ($stmt->execute()) {
    header("Location: dashboard.php");
}
?>
