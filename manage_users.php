<?php
// Include database connection
require_once "db_connection.php";

// Fetch list of users from the database
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

// Check if users exist
if ($result && mysqli_num_rows($result) > 0) {
    // Users found, display table
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.min.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manage Users</title>
        <!-- Add any necessary CSS stylesheets or scripts -->
    </head>
    <body>
        <h1>Manage Users</h1>
        <table border="1">
            <tr>
                <th>id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo isset($row['id']) ? $row['id'] : ""; ?></td>
                    <td><?php echo isset($row['username']) ? $row['username'] : ""; ?></td>
                    <td><?php echo isset($row['email']) ? $row['email'] : ""; ?></td>
                    <td> | 
                        <a href="delete_user.php?id=<?php echo isset($row['user_id']) ? $row['user_id'] : ""; ?>" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
        <br>
        <a href="admin_dashboard.php">Back to Dashboard</a>
    </body>
    </html>
    <?php
} else {
    // No users found
    echo "No users found.";
}

// Close database connection
mysqli_close($conn);
?>

