<?php
session_start();
include 'config.php';

// Only allow access if user is admin (role_id = 1)
if ($_SESSION['role_id'] != 1) {
    die("Unauthorized access");
}

// Fetch all users
$sql = "SELECT users.*, roles.role_name FROM users JOIN roles ON users.role_id = roles.id";
$result = $conn->query($sql);
?>

<h2>User Management Dashboard</h2>
<table>
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Role</th>
        <th>Actions</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['role_name']; ?></td>
            <td>
                <a href="edit_user.php?id=<?php echo $row['id']; ?>">Edit</a> | 
                <a href="delete_user.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>
