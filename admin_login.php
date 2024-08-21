<?php
// Start session
session_start();

// Check if the user is already logged in, redirect to dashboard if true
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("Location: admin_dashboard.php");
    exit();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form inputs
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Your authentication logic (e.g., check username and password against database)
    if ($username === 'irfan' && $password === '1234') {
        // Authentication successful, set session variables
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $username;

        // Redirect to dashboard
        header("Location: admin_dashboard.php");
        exit();
    } else {
        // Authentication failed, display error message
        $error_message = "Invalid username or password. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>

    <!-- Add any necessary CSS stylesheets or scripts -->
<style>
        body {
        background: url('wp4676569.jpg') no-repeat center center fixed;
        background-size: cover;
        color: gray;
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
        color: black;
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
        background-color:black;
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
        background-color: black;
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
    <center>
        <h1>Admin Login</h1>
    </center>
    <?php if (isset($error_message)): ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php endif; ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
