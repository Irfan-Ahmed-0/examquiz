<h1></h1>
<fieldset>
    <legend>Question 1</legend>
    <p>What comes next in the sequence: 2, 4, 8, 16, ?</p>
    <label><input type="radio" name="q1" value="32"> 32</label>
    <label><input type="radio" name="q1" value="24"> 24</label>
    <label><input type="radio" name="q1" value="64"> 64</label>
    <label><input type="radio" name="q1" value="2"> 2</label>
</fieldset>

<fieldset>
    <legend>Question 2</legend>
    <p>Which of the following is the odd one out?</p>
    <label><input type="radio" name="q2" value="Carrot"> Carrot</label>
    <label><input type="radio" name="q2" value="Apple"> Apple</label>
    <label><input type="radio" name="q2" value="Banana"> Banana</label>
    <label><input type="radio" name="q2" value="Mango"> Mango</label>
</fieldset>

<fieldset>
    <legend>Question 3</legend>
    <p>If all cats are mammals and some mammals are black, which of the following statements must be true?</p>
    <label><input type="radio" name="q3" value="All black animals are cats."> All black animals are cats.</label>
    <label><input type="radio" name="q3" value="Some cats are black.">  Some cats are black.</label>
    <label><input type="radio" name="q3" value="All black animals are mammals."> All black animals are mammals.</label>
    <label><input type="radio" name="q3" value="Some mammals are cats."> Some mammals are cats.</label>
</fieldset>

<fieldset>
    <legend>Question 4</legend>
    <p>If BLUE is coded as 9253 and RED is coded as 687, then how would you encode GREEN?</p>
    <label><input type="radio" name="q4" value="961555"> 961555</label>
    <label><input type="radio" name="q4" value="962555"> 962555</label>
    <label><input type="radio" name="q4" value="963555"> 963555</label>
    <label><input type="radio" name="q4" value="962455"> 962455</label>
</fieldset>

<fieldset>
    <legend>Question 5</legend>
    <p>If A = 1, B = 2, C = 3, ..., Z = 26, what is the sum of the numerical values of the letters in the word "COMPUTER"?</p>
    <label><input type="radio" name="q5" value="97"> 97</label>
    <label><input type="radio" name="q5" value="100"> 100</label>
    <label><input type="radio" name="q5" value="105"> 105</label>
    <label><input type="radio" name="q5" value="107"> 107</label>
</fieldset>

<fieldset>
    <legend>Question 6</legend>
    <p>If today is Monday, what day will it be after 80 days?</p>
    <label><input type="radio" name="q6" value="Wednesday"> Wednesday</label>
    <label><input type="radio" name="q6" value="Thursday"> Thursday</label>
    <label><input type="radio" name="q6" value="Friday">  Friday</label>
    <label><input type="radio" name="q6" value="Saturday"> Saturday</label>
</fieldset>

<fieldset>
    <legend>Question 7</legend>
    <p>Complete the series: 2, 5, 10, 17, 26, ?</p>
    <label><input type="radio" name="q7" value="37"> 37</label>
    <label><input type="radio" name="q7" value="38"> 38</label>
    <label><input type="radio" name="q7" value="39"> 39</label>
    <label><input type="radio" name="q7" value="40"> 40</label>
</fieldset>

<fieldset>
    <legend>Question 8</legend>
    <p>If John is taller than Tom, and Tom is taller than Sam, who is the shortest?</p>
    <label><input type="radio" name="q8" value="John"> John</label>
    <label><input type="radio" name="q8" value="Tom">  Tom</label>
    <label><input type="radio" name="q8" value="Sam"> Sam</label>
    <label><input type="radio" name="q8" value="Cannot be determined">  Cannot be determined</label>
</fieldset>

<fieldset>
    <legend>Question 9</legend>
    <p>In a certain code language, "PENCIL" is written as "ODBMHK". How is "PAPER" written in that code?</p>
    <label><input type="radio" name="q9" value="OZODQ"> OZODQ</label>
    <label><input type="radio" name="q9" value="QBQDO"> QBQDO</label>
    <label><input type="radio" name="q9" value="QAQCR"> QAQCR</label>
    <label><input type="radio" name="q9" value="OCQER">  OCQER</label>
</fieldset>

<fieldset>
    <legend>Question 10</legend>
    <p>Which number should come next in the series: 1, 1, 2, 3, 5, 8, 13, ?</p>
    <label><input type="radio" name="q10" value="18"> 18</label>
    <label><input type="radio" name="q10" value="21">  21</label>
    <label><input type="radio" name="q10" value="19"> 19</label>
    <label><input type="radio" name="q10" value="24">  24</label>
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
