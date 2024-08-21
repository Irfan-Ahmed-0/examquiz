<!-- english_questions.php --><h1></h1>
<fieldset>
    <legend>Question 1</legend>
    <p>Which sentence is correct?</p>
    <label><input type="radio" name="q1" value="She goes to the market everyday."> She goes to the market everyday.</label>
    <label><input type="radio" name="q1" value="She go to the market everyday."> She go to the market everyday.</label>
    <label><input type="radio" name="q1" value="She went to the market everyday."> She went to the market everyday.</label>
    <label><input type="radio" name="q1" value="She is going to the market everyday."> She is going to the market everyday.</label>
</fieldset>

<fieldset>
    <legend>Question 2</legend>
    <p>Identify the noun in the following sentence: "The cat sat on the mat."</p>
    <label><input type="radio" name="q2" value="cat"> cat</label>
    <label><input type="radio" name="q2" value="sat"> sat</label>
    <label><input type="radio" name="q2" value="on"> on</label>
    <label><input type="radio" name="q2" value="Mat"> Mat</label>
</fieldset>

<fieldset>
    <legend>Question 3</legend>
    <p>Choose the correct form of the verb to complete the sentence: "Yesterday, he ________ to the store."</p>
    <label><input type="radio" name="q3" value="goes"> goes</label>
    <label><input type="radio" name="q3" value="go">  go</label>
    <label><input type="radio" name="q3" value="went"> went</label>
    <label><input type="radio" name="q3" value="going"> going</label>
</fieldset>

<fieldset>
    <legend>Question 4</legend>
    <p>Which sentence is punctuated correctly?</p>
    <label><input type="radio" name="q4" value="I love cooking but I dont like cleaning."> I love cooking but I don't like cleaning.</label>
    <label><input type="radio" name="q4" value="I love cooking, but I dont like cleaning.">  I love cooking, but I don't like cleaning.</label>
    <label><input type="radio" name="q4" value="I love cooking. But I dont like cleaning."> I love cooking. But I don't like cleaning.</label>
    <label><input type="radio" name="q4" value="I love cooking but, I dont like cleaning."> I love cooking but, I don't like cleaning.</label>
</fieldset>

<fieldset>
    <legend>Question 5</legend>
    <p>Identify the adverb in the following sentence: "She sings beautifully."</p>
    <label><input type="radio" name="q5" value="She"> She</label>
    <label><input type="radio" name="q5" value="sings"> sings</label>
    <label><input type="radio" name="q5" value="beautifully"> beautifully</label>
    <label><input type="radio" name="q5" value="sings beautifully"> sings beautifully</label>
</fieldset>

<fieldset>
    <legend>Question 6</legend>
    <p>Choose the correct pronoun to complete the sentence: "Tom and ________ went to the park."</p>
    <label><input type="radio" name="q6" value="me"> me</label>
    <label><input type="radio" name="q6" value="I"> I</label>
    <label><input type="radio" name="q6" value="myself">  myself</label>
    <label><input type="radio" name="q6" value="Saturday"> mine</label>
</fieldset>

<fieldset>
    <legend>Question 7</legend>
    <p>Which sentence uses the correct form of the comparative adjective?</p>
    <label><input type="radio" name="q7" value="She is more taller than her sister."> She is more taller than her sister.</label>
    <label><input type="radio" name="q7" value="She is tall, but her sister is more tall."> She is tall, but her sister is more tall.</label>
    <label><input type="radio" name="q7" value="She is taller than her sister."> She is taller than her sister.</label>
    <label><input type="radio" name="q7" value="She is tallest than her sister.">  She is tallest than her sister.</label>
</fieldset>

<fieldset>
    <legend>Question 8</legend>
    <p>Identify the conjunction in the following sentence: "I will go to the party if you come with me."</p>
    <label><input type="radio" name="q8" value="I"> I</label>
    <label><input type="radio" name="q8" value="will"> will</label>
    <label><input type="radio" name="q8" value="if"> if</label>
    <label><input type="radio" name="q8" value="with"> with</label>
</fieldset>

<fieldset>
    <legend>Question 9</legend>
    <p>Choose the correct form of the verb to complete the sentence: "They ________ studying for their exams."</p>
    <label><input type="radio" name="q9" value="is"> is</label>
    <label><input type="radio" name="q9" value="are"> are</label>
    <label><input type="radio" name="q9" value="were"> were</label>
    <label><input type="radio" name="q9" value="be"> be</label>
</fieldset>

<fieldset>
    <legend>Question 10</legend>
    <p>Which sentence is grammatically correct?</p>
    <label><input type="radio" name="q10" value="The book is laying on the table."> The book is laying on the table.</label>
    <label><input type="radio" name="q10" value="The book is lying on the table.">  The book is lying on the table.</label>
    <label><input type="radio" name="q10" value="The book is laying on the table for hours."> The book is laying on the table for hours.</label>
    <label><input type="radio" name="q10" value="The book is lieing on the table."> The book is lieing on the table.</label>
</fieldset>

<!-- index.php -->

<body>
    <h1></h1>

    <!-- Timer -->
    <div id="timer"></div>

    <!-- Your existing quiz content here -->

    <script>
        // Timer code here
        var countdownTime = 150; // Set countdown time in seconds

        function updateTimer() {
            var minutes = Math.floor(countdownTime / 10);
            var seconds = countdownTime % 10;

            document.getElementById('timer').innerHTML = 'Time remaining: ' + minutes + 'm ' + seconds + 's';

            countdownTime--;

            if (countdownTime < 0) {
                clearInterval(timerInterval);
                document.getElementById('timer').innerHTML = 'Time\'s up!';
                // Add your logic for what happens when time is up
            }
        }

        var timerInterval = setInterval(updateTimer, 1000);
    </script>
</body>
</html>
