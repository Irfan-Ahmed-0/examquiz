<?php
// Include database connection
require_once "db_connection.php";

// Check if user ID is provided in the URL
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $user_id = $_GET['id'];

    // Delete user from the database based on the provided user ID
    $sql = "DELETE FROM users WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();

    // Redirect user back to manage_users.php after deletion
    header("Location: manage_users.php");
    exit();
} else {
    echo "Invalid user ID.";
    exit();
}
?>
