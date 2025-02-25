<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Verification</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: black; /* Set font color to black */
            font-size: 28px; /* Increase font size */
        }
        p {
            color: black; /* Set font color to black */
            font-size: 18px; /* Increase font size */
        }
        button {
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #007BFF;
            color: white;
            transition: 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        .terms {
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Age Verification</h2>
        <p>You must be 20 years or older to enter this site.</p>
        <p>Please read the terms and conditions and remember: Don't drink and drive.</p>
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