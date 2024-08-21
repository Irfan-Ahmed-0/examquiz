<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h2>Send Notification</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name"><br>
    User Email: <input type="text" name="user_email"><br>
    Send Message: <input type="text" name="sended_message"><br>
    <input type="submit" value="Submit">
</body>
</form>

<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "quiz_db";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtain input from the form or any other source
    $name = $_POST["name"];
    $user_email = $_POST["user_email"];
    $sended_message = $_POST["sended_message"];
    $role = "admin";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement
    $sql = "INSERT INTO notific (name, user_email, sended_message, role) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters and execute query
    $stmt->bind_param("ssss", $name, $user_email, $sended_message, $role);
    if ($stmt->execute()) {
        echo "sended successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
