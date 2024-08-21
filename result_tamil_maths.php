<?php
// உங்கள் கருத்துத்தைப் பற்றிய விஶேஷ தமிழ் வினாக்கள் மதிப்பெண் தரும் அல்லது முடிக்கும் முறை இங்கே உள்ளது
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

// உங்கள் மதிப்பெண் அல்லது முடிவு கருத்துத்துக்கள் தமிழ் மொழியில் காண்பிக்க அல்லது வெளியிடும் பொருத்தம்
echo "<p>வினா 1 க்கு உங்கள் பதில்: $q1_answer</p>";
echo "<p>வினா 2 க்கு உங்கள் பதில்: $q2_answer</p>";
echo "<p>வினா 3 க்கு உங்கள் பதில்: $q3_answer</p>";
echo "<p>வினா 4 க்கு உங்கள் பதில்: $q4_answer</p>";
echo "<p>வினா 5 க்கு உங்கள் பதில்: $q5_answer</p>";
echo "<p>வினா 6 க்கு உங்கள் பதில்: $q6_answer</p>";
echo "<p>வினா 7 க்கு உங்கள் பதில்: $q7_answer</p>";
echo "<p>வினா 8 க்கு உங்கள் பதில்: $q8_answer</p>";
echo "<p>வினா 9 க்கு உங்கள் பதில்: $q9_answer</p>";
echo "<p>வினா 10 க்கு உங்கள் பதில்: $q10_answer</p>";

// மதிப்பெண் கணினியை கணக்கிட்டு காட்டும் அல்லது விளைவு காட்டும் தமிழ் மொழியில் விதிகள்
$score = 0;

if ($q1_answer === '12') {
    $score++; // மதிப்பை கூட்டு
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

if ($q10_answer === '12') {
    $score++;
}

echo "<p>உங்கள் கணக்கு மொத்தம்: $score / 10</p>";
?>
