<?php
// Start session
session_start();

// Check if the user is logged in as admin
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    // Redirect to login page
    header("Location: admin_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Add any necessary CSS stylesheets or scripts -->
    <style>
    body {
        background: url('wp4676569.jpg') no-repeat center center fixed;
        background-size: cover;
        color: #fff;
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 20px;
        overflow: hidden; /* Prevents horizontal scroll */
    }

    form {
        background: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 10px;
        width: 300px;
        margin: 0 auto;
        animation: fadeIn 0.5s ease-in-out;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(-20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    input {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        box-sizing: border-box;
        border: 2px solid transparent;
        transition: border-color 0.3s ease-in-out;
    }

    input:focus {
        border-color: #4caf50;
    }

    button {
        background-color: #4caf50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out, transform 0.2s ease-in-out;
    }

    button:hover {
        background-color: #45a049;
        transform: scale(1.05); /* Scale button on hover */
    }

    button:active {
        transform: scale(0.95); /* Shrink button on click */
    }

    a {
        color: #fff;
        text-decoration: none;
        transition: color 0.3s ease-in-out;
    }

    a:hover {
        color: #eee;
    }

    /* Custom Checkbox */
    .custom-checkbox {
        display: inline-block;
        position: relative;
        padding-left: 25px;
        margin-bottom: 20px;
        cursor: pointer;
        font-size: 16px;
    }

    .custom-checkbox input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 20px;
        width: 20px;
        background-color: #eee;
        border-radius: 3px;
    }

    .custom-checkbox input:checked ~ .checkmark:after {
        display: block;
    }

    .custom-checkbox .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    .custom-checkbox input:checked ~ .checkmark {
        background-color: #4caf50;
    }

    .custom-checkbox .checkmark:after {
        left: 7px;
        top: 3px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    /* Pulse Animation */
    @keyframes pulse {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
        100% {
            transform: scale(1);
        }
    }

    .pulse-button {
        animation: pulse 2s infinite;
    }
</style>
<style>
    @keyframes slideIn {
        0% {
            transform: translateY(-100%);
            opacity: 0;
        }
        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .animated-element {
        animation: slideIn 1s ease-in-out;
    }
</style>
</head>
<body>
    <h1>Welcome to the Admin Dashboard</h1>
    <p>Hello, <?php echo $_SESSION['admin_username']; ?>! You are logged in as an administrator.</p>

    <!-- Add navigation links to different sections of the admin panel -->
    <ul>
        <li><a href="manage_users.php">Manage Users</a></li>
        <li><a href="admin_notifications.php">Send Notification</a></li>
        <li><a href="settings.php">Settings</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>

    <!-- Add additional content and features as needed -->

</body>
</html>
