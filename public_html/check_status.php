<?php
$site_url = "http://10.90.211.150/index.php";

// Check if index.php is online
$headers = @get_headers($site_url);
if ($headers && strpos($headers[0], '200')) {
    // If online, redirect to index.php
    header("Location: $site_url");
    exit;
} else {
    // If offline, show "Bar is Closed" page
    echo "<html>
            <head>
                <title>Bar Closed</title>
                <style>
                    body { font-family: Arial, sans-serif; text-align: center; background-color: #222; color: white; padding: 50px; }
                    h1 { font-size: 50px; color: red; }
                    p { font-size: 20px; }
                </style>
            </head>
            <body>
                <h1>🚫 The Bar is Closed 🚫</h1>
                <p>We are currently not serving drinks. Please visit us later!</p>
            </body>
          </html>";
}
?>