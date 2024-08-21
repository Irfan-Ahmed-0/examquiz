<fieldset>
    <legend>History Question 1</legend>
    <p>Who was the first President of the United States?</p>
    <label><input type="radio" name="q1" value="Thomas Jefferson"> Thomas Jefferson</label>
    <label><input type="radio" name="q1" value="George Washington"> George Washington</label>
    <label><input type="radio" name="q1" value="Abraham Lincoln"> Abraham Lincoln</label>
    <label><input type="radio" name="q1" value="John Adams"> John Adams</label>
</fieldset>

<fieldset>
    <legend>History Question 2</legend>
    <p>In which year did Christopher Columbus reach the Americas?</p>
    <label><input type="radio" name="q2" value="1492"> 1492</label>
    <label><input type="radio" name="q2" value="1453"> 1453</label>
    <label><input type="radio" name="q2" value="1521"> 1521</label>
    <label><input type="radio" name="q2" value="1607"> 1607</label>
</fieldset>

<fieldset>
    <legend>History Question 3</legend>
    <p>The Magna Carta, signed in 1215, is considered a cornerstone of which principle?</p>
    <label><input type="radio" name="q3" value="Democracy"> Democracy</label>
    <label><input type="radio" name="q3" value="Monarchy"> Monarchy</label>
    <label><input type="radio" name="q3" value="Feudalism"> Feudalism</label>
    <label><input type="radio" name="q3" value="Imperialism"> Imperialism</label>
</fieldset>

<fieldset>
    <legend>History Question 4</legend>
    <p>Who was the last ruler of the Roman Empire?</p>
    <label><input type="radio" name="q4" value="Julius Caesar"> Julius Caesar</label>
    <label><input type="radio" name="q4" value="Augustus"> Augustus</label>
    <label><input type="radio" name="q4" value="Nero"> Nero</label>
    <label><input type="radio" name="q4" value="Romulus Augustulus"> Romulus Augustulus</label>
</fieldset>

<fieldset>
    <legend>History Question 5</legend>
    <p>Which ancient civilization built the Great Pyramids of Giza?</p>
    <label><input type="radio" name="q5" value="Mesopotamians"> Mesopotamians</label>
    <label><input type="radio" name="q5" value="Egyptians"> Egyptians</label>
    <label><input type="radio" name="q5" value="Greeks"> Greeks</label>
    <label><input type="radio" name="q5" value="Mayans"> Mayans</label>
</fieldset>

<fieldset>
    <legend>History Question 6</legend>
    <p>The Industrial Revolution began in which country?</p>
    <label><input type="radio" name="q6" value="France"> France</label>
    <label><input type="radio" name="q6" value="United States"> United States</label>
    <label><input type="radio" name="q6" value="Germany"> Germany</label>
    <label><input type="radio" name="q6" value="United Kingdom"> United Kingdom</label>
</fieldset>

<fieldset>
    <legend>History Question 7</legend>
    <p>The Renaissance period originated in which city?</p>
    <label><input type="radio" name="q7" value="Paris"> Paris</label>
    <label><input type="radio" name="q7" value="Rome"> Rome</label>
    <label><input type="radio" name="q7" value="Florence"> Florence</label>
    <label><input type="radio" name="q7" value="Athens"> Athens</label>
</fieldset>

<fieldset>
    <legend>History Question 8</legend>
    <p>Who wrote "The Communist Manifesto" along with Karl Marx?</p>
    <label><input type="radio" name="q8" value="Friedrich Engels"> Friedrich Engels</label>
    <label><input type="radio" name="q8" value="Vladimir Lenin"> Vladimir Lenin</label>
    <label><input type="radio" name="q8" value="Leon Trotsky"> Leon Trotsky</label>
    <label><input type="radio" name="q8" value="Mao Zedong"> Mao Zedong</label>
</fieldset>

<fieldset>
    <legend>History Question 9</legend>
    <p>The Battle of Waterloo, in 1815, marked the final defeat of which military leader?</p>
    <label><input type="radio" name="q9" value="Napoleon Bonaparte"> Napoleon Bonaparte</label>
    <label><input type="radio" name="q9" value="Alexander the Great"> Alexander the Great</label>
    <label><input type="radio" name="q9" value="Julius Caesar"> Julius Caesar</label>
    <label><input type="radio" name="q9" value="Genghis Khan"> Genghis Khan</label>
</fieldset>

<fieldset>
    <legend>History Question 10</legend>
    <p>Which treaty formally ended World War I?</p>
    <label><input type="radio" name="q10" value="Treaty of Versailles"> Treaty of Versailles</label>
    <label><input type="radio" name="q10" value="Treaty of Paris"> Treaty of Paris</label>
    <label><input type="radio" name="q10" value="Treaty of Trianon"> Treaty of Trianon</label>
    <label><input type="radio" name="q10" value="Treaty of Brest-Litovsk"> Treaty of Brest-Litovsk</label>
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