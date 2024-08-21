<!-- result.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        body {
            background: linear-gradient(to right, #3498db, #2c3e50);
            color: #fff;
            text-align: center;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
        }

        p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Result</h1>

    <?php
    // Your existing PHP logic to process quiz results goes here

    // Check if the category is set
    if (isset($_POST['category'])) {
        $category = $_POST['category'];

        // Process and display quiz results based on the category
        if ($category === 'reasoning') {
            include 'result_reasoning.php';  // Create this file for reasoning results
        } elseif ($category === 'english') {
            include 'result_english.php';  // Create this file for English results
        }
          elseif ($category === 'maths') {
            include 'result_maths.php';  // Create this file for English results
        }
          elseif ($category === 'general knowledge') {
            include 'result_gk.php';  // Create this file for English results
        }
          elseif ($category === 'reasoning_tamil') {
            include 'r_result_tamil.php';  // Create this file for English results
        } elseif ($category === 'tamil_maths') {
            include 'result_tamil_maths.php';  // Create this file for English results
        } elseif ($category === 'gk_tamil') {
            include 'gk_tamil_result.php';  // Create this file for English results
        }
    } else {
        echo "<p>Invalid category or category not set.</p>";
    }
    ?>

</body>
</html>
