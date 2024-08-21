<?php
// Your specific English grammar result logic goes here
$q1_answer = isset($_POST['q1']) ? $_POST['q1'] : '';
$q2_answer = isset($_POST['q2']) ? $_POST['q2'] : '';
$q3_answer = isset($_POST['q3']) ? $_POST['q3'] : '';
$q4_answer = isset($_POST['q4']) ? $_POST['q4'] : '';
$q5_answer = isset($_POST['q5']) ? $_POST['q5'] : '';
$q6_answer = isset($_POST['q6']) ? $_POST['q6'] : '';
$q7_answer = isset($_POST['q7']) ? $_POST['q7'] : '';
$q8_answer = isset($_POST['q8']) ? $_POST['q8'] : '';
$q9_answer = isset($_POST['q9']) ? $_POST['q9'] : '';
$q10_answer = isset($_POST['q10']) ? $_POST['q10'] : '';

// Your scoring or result display logic for English grammar quiz
echo "<p>Your answer for Question 1: $q1_answer</p>";
echo "<p>Your answer for Question 2: $q2_answer</p>";
echo "<p>Your answer for Question 3: $q3_answer</p>";
echo "<p>Your answer for Question 4: $q4_answer</p>";
echo "<p>Your answer for Question 5: $q5_answer</p>";
echo "<p>Your answer for Question 6: $q6_answer</p>";
echo "<p>Your answer for Question 7: $q7_answer</p>";
echo "<p>Your answer for Question 8: $q8_answer</p>";
echo "<p>Your answer for Question 9: $q9_answer</p>";
echo "<p>Your answer for Question 10: $q10_answer</p>";

// Calculate and display the score
$score = 0;

if ($q1_answer === '12') {
    $score++;
}

if ($q2_answer === '6') {
    $score++;
}

if ($q3_answer === '16') {
    $score++;
}

if ($q4_answer === '45') {
    $score++;
}

if ($q5_answer === '16 and 18') {
    $score++;
}

if ($q6_answer === '13') {
    $score++;
}

if ($q7_answer === '4') {
    $score++;
}

if ($q8_answer === '7') {
    $score++;
}

if ($q9_answer === '144') {
    $score++;
}

if ($q10_answer === '15') {
    $score++;
}

echo "<p>Your total score for Math Quiz: $score / 10</p>";
?>
