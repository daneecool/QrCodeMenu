<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Verification</title>
    <link rel="stylesheet" href="style_term.css">
</head>

<body>
    <div class="container">
        <h2>Age Verification</h2>
        <p>You must be <span class="highlight">20 years or older</span> to enter this site.</p>
        <p>Please read the terms and conditions and remember <span class="highlight">"Don't drink and drive"</span>.</p>
        <div class="terms">
            <input type="checkbox" id="terms" name="terms">
            <label for="terms">I have read and agree to the <a href="https://www.city.nagasaki.lg.jp/shimin/121100/150003/p039569.html" target="_blank">terms and conditions</a>.</label>
        </div>
        <button onclick="verifyAge()">Enter</button>
    </div>

    <script>
        function verifyAge() {
            const termsCheckbox = document.getElementById('terms');
            if (termsCheckbox.checked) {
                location.href = 'language.php';
            } else {
                alert('You must agree to the terms and conditions to enter.');
            }
        }
    </script>
</body>
</html>