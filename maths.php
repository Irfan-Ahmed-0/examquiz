<fieldset>
    <legend>Math Question 1</legend>
    <p>What is the value of the square root of 144?</p>
    <label><input type="radio" name="q1" value="12"> 12</label>
    <label><input type="radio" name="q1" value="10"> 10</label>
    <label><input type="radio" name="q1" value="14"> 14</label>
    <label><input type="radio" name="q1" value="16"> 16</label>
</fieldset>

<fieldset>
    <legend>Math Question 2</legend>
    <p>If x + 4 = 10 , what is the value of x ?</p>
    <label><input type="radio" name="q2" value="14"> 14</label>
    <label><input type="radio" name="q2" value="6"> 6</label>
    <label><input type="radio" name="q2" value="7"> 7</label>
    <label><input type="radio" name="q2" value="10"> 10</label>
</fieldset>

<fieldset>
    <legend>Math Question 3</legend>
    <p>What is the perimeter of a rectangle with length 5 units and width 3 units?</p>
    <label><input type="radio" name="q3" value="11"> 11 units</label>
    <label><input type="radio" name="q3" value="12"> 12 units</label>
    <label><input type="radio" name="q3" value="15"> 15 units</label>
    <label><input type="radio" name="q3" value="16"> 16 units</label>
</fieldset>

<fieldset>
    <legend>Math Question 4</legend>
    <p>If 1/4 of a number is 15, what is the number?</p>
    <label><input type="radio" name="q4" value="45"> 45</label>
    <label><input type="radio" name="q4" value="30"> 30</label>
    <label><input type="radio" name="q4" value="50"> 50</label>
    <label><input type="radio" name="q4" value="60"> 60</label>
</fieldset>

<fieldset>
    <legend>Math Question 5</legend>
    <p>The sum of two consecutive even integers is 34. What are the integers?</p>
    <label><input type="radio" name="q5" value="16 and 18"> 16 and 18</label>
    <label><input type="radio" name="q5" value="14 and 16"> 14 and 16</label>
    <label><input type="radio" name="q5" value="15 and 17"> 15 and 17</label>
    <label><input type="radio" name="q5" value="17 and 19"> 17 and 19</label>
</fieldset>

<fieldset>
    <legend>Math Question 6</legend>
    <p>What is the square root of 169?</p>
    <label><input type="radio" name="q6" value="12"> 12</label>
    <label><input type="radio" name="q6" value="13"> 13</label>
    <label><input type="radio" name="q6" value="14"> 14</label>
    <label><input type="radio" name="q6" value="15"> 15</label>
</fieldset>

<fieldset>
    <legend>Math Question 7</legend>
    <p>If 2x + 3 = 11 , what is the value of x ?</p>
    <label><input type="radio" name="q7" value="4"> 4</label>
    <label><input type="radio" name="q7" value="3"> 3</label>
    <label><input type="radio" name="q7" value="2"> 2</label>
    <label><input type="radio" name="q7" value="5"> 5</label>
</fieldset>

<fieldset>
    <legend>Math Question 8</legend>
    <p>If the area of a square is 49 square units, what is the length of one side?</p>
    <label><input type="radio" name="q8" value="7"> 7 units</label>
    <label><input type="radio" name="q8" value="14"> 14 units</label>
    <label><input type="radio" name="q8" value="21"> 21 units</label>
    <label><input type="radio" name="q8" value="28"> 28 units</label>
</fieldset>

<fieldset>
    <legend>Math Question 9</legend>
    <p>What is the value of 2^4 * 3^2 ?</p>
    <label><input type="radio" name="q9" value="144"> 144</label>
    <label><input type="radio" name="q9" value="192"> 192</label>
    <label><input type="radio" name="q9" value="108"> 108</label>
    <label><input type="radio" name="q9" value="96"> 96</label>
</fieldset>

<fieldset>
    <legend>Math Question 10</legend>
    <p>The ratio of boys to girls in a class is 3:5. If there are 24 students in the class, how many girls are there?</p>
    <label><input type="radio" name="q10" value="9"> 9</label>
    <label><input type="radio" name="q10" value="12"> 12</label>
    <label><input type="radio" name="q10" value="15"> 15</label>
    <label><input type="radio" name="q10" value="18"> 18</label>
</fieldset>


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