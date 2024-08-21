<?php
session_start();

// Check if the user is not logged in, redirect to the login page
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
            border-radius: 5px;
            background-color: #4caf50;
        }
    </style>
</head>
<body>
    <h1> Computer Based Exam</h1>
     <h2> English</h2>
    <a href="quiz.php?category=reasoning">Reasoning</a>
    <a href="quiz.php?category=english">English</a>
    <a href="quiz.php?category=maths">Maths</a>
    <a href="quiz.php?category=general knowledge">General Knowledge</a>
    <h2>Tamil</h2>
    <a href="quiz.php?category=reasoning_tamil">Reasoning</a>
    <a href="quiz.php?category=english">English</a>
    <a href="quiz.php?category=tamil_maths">Maths</a>
    <a href="quiz.php?category=gk_tamil">General knowledge</a>
</body>
</html>