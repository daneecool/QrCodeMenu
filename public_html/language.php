<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Selection</title>
    <link rel="stylesheet" href="style_lang.css">

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DZLB19RSM6"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-DZLB19RSM6');
    </script>
</head>

<body>
<?php
    // Path to the log file
    $logFile = 'data/access_log.txt';

    // Ensure the data directory exists
    if (!is_dir('data')) {
        mkdir('data', 0777, true);
    }

    // Get today's date and time in yyyy/mm/dd HH:MM:SS format
    $today = date('Y/m/d H:i:s');
    $dateOnly = date('Y/m/d');
    $currentTime = date('H:i:s');
    
    // Check if the log file exists, if not create it
    if (!file_exists($logFile)) {
        file_put_contents($logFile, "$today 0\n");
    }

    // Read the log file contents
    $logContents = file($logFile, FILE_IGNORE_NEW_LINES);

    // Initialize variables
    $found = false;
    $newLogContents = [];

    // Iterate through each line in the log file
    foreach ($logContents as $line) {
        list($date, $time, $count) = explode(' ', $line);
        if ($date == $dateOnly) {
            $logMinutes = substr($time, 0, 5); // Extract the HH:MM part of the log time
            $currentMinutes = substr($currentTime, 0, 5); // Extract the HH:MM part of the current time
            if ($logMinutes == $currentMinutes) {
                $count++;
                $time = $currentTime; // Update the time to the current time
                $found = true;
            } 
            // else {
            //     $newLogContents[] = "$date $time $count"; // Keep the previous record
            //     $count = 1; // Reset the count if the minutes have changed
            //     $time = $currentTime; // Update the time to the current time
            //     $found = true;
            // }
        }
        $newLogContents[] = "$date $time $count";
    }

    // If today's date was not found in the log file, add it
    if (!$found) {
        $newLogContents[] = "$today 1";
    }

    // Write the updated log contents back to the log file
    file_put_contents($logFile, implode("\n", $newLogContents));

    // Optionally, you can display the count for today on the page
    // echo "<p>Number of users who accessed this page today: " . ($found ? $count : 1) . "</p>";
    
    ?>
    <br><br>
    <p><img src="background-pic/iwibar.webp" alt="Open" /></p>
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