<!-- forgot_password_process.php -->
<t>Check Your Email We Sent A</t>
    <style>
        body {
            background: linear-gradient(to right, #3498db, #2c3e50);
            color: #fff;
            text-align: center;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
        }

        form {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            margin: 0 auto;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    try {
        // Connect to the database (replace with your database credentials)
        $pdo = new PDO('mysql:host=localhost;dbname=quiz_db', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Check if the username exists
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            // User exists, generate a random token
            $reset_token = bin2hex(random_bytes(5));

            // Store the reset token in the database
            $stmt = $pdo->prepare("UPDATE users SET reset_token = :reset_token WHERE email = :email");
            $stmt->bindParam(':reset_token', $reset_token);
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            // For simplicity, let's just display the reset token (you wouldn't do this in a real application)
            echo "Reset Token: " . $reset_token;
            exit();
        } else {
            echo "User not found";
            exit();
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    header("Location: account.php");
    exit();
}
?>
