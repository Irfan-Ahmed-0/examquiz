<fieldset>
    <legend>கணித கேள்வி 1</legend>
    <p>144 இன் சதவீதம் என்ன?</p>
    <label><input type="radio" name="q1" value="12"> 12</label>
    <label><input type="radio" name="q1" value="10"> 10</label>
    <label><input type="radio" name="q1" value="14"> 14</label>
    <label><input type="radio" name="q1" value="16"> 16</label>
</fieldset>

<fieldset>
    <legend>கணித கேள்வி 2</legend>
    <p>உட்கொள் x + 4 = 10 , உட்கொள் x மதிப்பு என்ன?</p>
    <label><input type="radio" name="q2" value="14"> 14</label>
    <label><input type="radio" name="q2" value="6"> 6</label>
    <label><input type="radio" name="q2" value="7"> 7</label>
    <label><input type="radio" name="q2" value="10"> 10</label>
</fieldset>

<fieldset>
    <legend>கணித கேள்வி 3</legend>
    <p>நீளம் 5 அல்லது அகலம் 3 அல்லது அதனைச் சுற்றுக்கண்கள் கொண்ட ஒரு சதுர சுற்று அளவு என்ன?</p>
    <label><input type="radio" name="q3" value="11"> 11 அலகுகள்</label>
    <label><input type="radio" name="q3" value="12"> 12 அலகுகள்</label>
    <label><input type="radio" name="q3" value="15"> 15 அலகுகள்</label>
    <label><input type="radio" name="q3" value="16"> 16 அலகுகள்</label>
</fieldset>

<fieldset>
    <legend>கணித கேள்வி 4</legend>
    <p>1/3 ஒரு எண்ணின் மதிப்பு 15 என்றால், அது என்ன?</p>
    <label><input type="radio" name="q4" value="45"> 45</label>
    <label><input type="radio" name="q4" value="30"> 30</label>
    <label><input type="radio" name="q4" value="50"> 50</label>
    <label><input type="radio" name="q4" value="60"> 60</label>
</fieldset>

<fieldset>
    <legend>கணித கேள்வி 5</legend>
    <p>இரண்டு தொடர்ச்சி இலக்கின் கூட்டுத் தொகுப்பு 34. அவற்றின் மதிப்புக்கள் என்ன?</p>
    <label><input type="radio" name="q5" value="16 and 18"> 16 மற்றும் 18</label>
    <label><input type="radio" name="q5" value="14 and 16"> 14 மற்றும் 16</label>
    <label><input type="radio" name="q5" value="15 and 17"> 15 மற்றும் 17</label>
    <label><input type="radio" name="q5" value="17 and 19"> 17 மற்றும் 19</label>
</fieldset>

<fieldset>
    <legend>கணித கேள்வி 6</legend>
    <p>169 இன் சதவீதம் என்ன?</p>
    <label><input type="radio" name="q6" value="12"> 12</label>
    <label><input type="radio" name="q6" value="13"> 13</label>
    <label><input type="radio" name="q6" value="14"> 14</label>
    <label><input type="radio" name="q6" value="15"> 15</label>
</fieldset>

<fieldset>
    <legend>கணித கேள்வி 7</legend>
    <p>2x + 3 = 11 ஆனால், x மதிப்பு என்ன?</p>
    <label><input type="radio" name="q7" value="4"> 4</label>
    <label><input type="radio" name="q7" value="3"> 3</label>
    <label><input type="radio" name="q7" value="2"> 2</label>
    <label><input type="radio" name="q7" value="5"> 5</label>
</fieldset>

<fieldset>
    <legend>கணித கேள்வி 8</legend>
    <p>ஒரு சதுரத்தின் பரிமாணம் 49 சதவீதம் ஆனால், அதன் ஒரு பக்கம் எத்தனை அலகுகள்?</p>
    <label><input type="radio" name="q8" value="7"> 7 அலகுகள்</label>
    <label><input type="radio" name="q8" value="14"> 14 அலகுகள்</label>
    <label><input type="radio" name="q8" value="21"> 21 அலகுகள்</label>
    <label><input type="radio" name="q8" value="28"> 28 அலகுகள்</label>
</fieldset>

<fieldset>
    <legend>கணித கேள்வி 9</legend>
    <p>2^4 * 3^2 மதிப்பு என்ன?</p>
    <label><input type="radio" name="q9" value="144"> 144</label>
    <label><input type="radio" name="q9" value="192"> 192</label>
    <label><input type="radio" name="q9" value="108"> 108</label>
    <label><input type="radio" name="q9" value="96"> 96</label>
</fieldset>

<fieldset>
    <legend>கணித கேள்வி 10</legend>
    <p>ஒரு வகுப்பில் மக்களின் பல அதாவது 3:5 ஆகும். அதில் 24 மாணவர்கள் உள்ளன. அதில் எத்தனை மகளிர் உள்ளன?</p>
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