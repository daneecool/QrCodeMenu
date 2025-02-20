<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Selection</title>
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
            gap: 20px;
            flex-wrap: nowrap; /* Prevent wrapping */
            margin: 20px 0; /* Add margin to the top and bottom */
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
            flex-shrink: 0; /* Prevent buttons from shrinking */
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <br><br>
    <p>OPEN</p>
    <br><br>
    <h2>Language Selection</h2>
    <br>
    <h2>言語を選択</h2>
    <br><br>
    <div class="container">
        <br>
        <button onclick="location.href='index_en.php'">English</button>
        <button onclick="location.href='index_jp.php'">日本語</button>
        <br>
    </div>
</body>
</html>