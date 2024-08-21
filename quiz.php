<!-- quiz.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background: url('wp4676569.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
            text-align: left;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
        }

        form {
    background: rgba(255, 255, 255, 0);
    padding: 20px;
    border-radius: 10px;
    animation: fadeIn 0.5s ease-in-out forwards;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}


        fieldset {
            border: 4px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            padding: 10px;
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
</head>
<body>
    <center>
    <h1>CBT Model Exam</h1>
    </center>
    <form action="result.php" method="post">
        <?php
        // Check if category is set in the URL
        if (isset($_GET['category'])) {
            $category = $_GET['category'];
            
            // Include category-specific questions
            if ($category === 'reasoning') {
                include 'reasoning_questions.php';
            } elseif ($category === 'english') {
                include 'english_questions.php';
            } elseif ($category === 'maths') {
                include 'maths.php';
            } elseif ($category === 'general knowledge') {
                include 'general_knowledge.php';
            } elseif ($category === 'reasoning_tamil') {
                include 'reasoning_tamil.php';
            } elseif ($category === 'tamil_maths') {
                include 'tamil_maths.php';
            } elseif ($category === 'gk_tamil') {
                include 'gk_tamil.php';
            }
        } else {
            echo "<p>Invalid category</p>";
        }
        ?>
        <center>
        <button type="submit">Submit</button>
        <input type="hidden" name="category" value="<?php echo $category ?? ''; ?>">
        </center>
    </form>
</body>
</html>
