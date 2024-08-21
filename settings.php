<?php
// Initialize variables to store settings
$oldPassword = "";
$newPassword = "";
$confirmPassword = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and assign form values to variables
    $oldPassword = htmlspecialchars($_POST["oldPassword"]);
    $newPassword = htmlspecialchars($_POST["newPassword"]);
    $confirmPassword = htmlspecialchars($_POST["confirmPassword"]);

    // You can implement password validation and update logic here
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Settings</title>
</head>
<body>
    <h1>Password Settings</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="oldPassword">Old Password:</label><br>
        <input type="password" id="oldPassword" name="oldPassword" value="<?php echo $oldPassword; ?>"><br><br>

        <label for="newPassword">New Password:</label><br>
        <input type="password" id="newPassword" name="newPassword" value="<?php echo $newPassword; ?>"><br><br>

        <label for="confirmPassword">Confirm Password:</label><br>
        <input type="password" id="confirmPassword" name="confirmPassword" value="<?php echo $confirmPassword; ?>"><br><br>

        <input type="submit" value="Change Password">
    </form>
</body>
</html>
