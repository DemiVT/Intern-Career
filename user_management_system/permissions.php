<?php
include 'config.php';

// Fetch all roles and permissions
$roles = $conn->query("SELECT * FROM roles");
$permissions = $conn->query("SELECT * FROM permissions");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $role_id = $_POST['role_id'];
    $permission_id = $_POST['permission_id'];

    // Assign permission to role
    $sql = "INSERT INTO role_permission (role_id, permission_id) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $role_id, $permission_id);
    $stmt->execute();
}
?>

<form action="" method="POST">
    Role: 
    <select name="role_id">
        <?php while ($role = $roles->fetch_assoc()) { ?>
            <option value="<?php echo $role['id']; ?>"><?php echo $role['role_name']; ?></option>
        <?php } ?>
    </select>
    Permission: 
    <select name="permission_id">
        <?php while ($permission = $permissions->fetch_assoc()) { ?>
            <option value="<?php echo $permission['id']; ?>"><?php echo $permission['permission_name']; ?></option>
        <?php } ?>
    </select>
    <input type="submit" value="Assign Permission">
</form>
