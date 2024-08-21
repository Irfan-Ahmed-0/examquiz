<?php
// Include database connection
require_once "db_connection.php";

// Check if user ID is provided in the URL
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $user_id = $_GET['id'];

    // Fetch user details from the database based on the provided user ID
    $sql = "SELECT * FROM users WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if($result->num_rows > 0) {
        $user = $result->fetch_assoc();
    } else {
        echo "User not found.";
        exit();
    }

    // Process form submission to update user details
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate form inputs (e.g., username, email, etc.)

        // Update user details in the database
        // Implement your update query here

        // Redirect user back to manage_users.php after updating
        header("Location: manage_users.php");
        exit();
    }
} else {
    echo "Invalid user ID.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <!-- Add any necessary CSS stylesheets or scripts -->
</head>
<body>
    <h1>Edit User</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <!-- Display user details in input fields for editing -->
        <!-- Example: -->
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo isset($user['username']) ? $user['username'] : ""; ?>"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo isset($user['email']) ? $user['email'] : ""; ?>"><br><br>

        <!-- Add more input fields for other user details if needed -->

        <input type="submit" value="Update">
    </form>
</body>
</html>
