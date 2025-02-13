<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MySQL Connection</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to external CSS -->
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            text-align: center;
        }
        img {
            max-width: 100%;
            height: auto;
            margin: 20px 0;
        }
    </style>
</head>
<body>

    <?php
    echo "<h1 class='animated-title'>Greetings Infidels</h1>"; // Moved inside PHP but doesn't affect the rest of the page
    ?>

    <h4 style='font-size: 36px; color: black;'>Attempting MySQL connection from PHP...</h4> <!-- This stays in place -->

    <?php
    $host = 'mysql';
    $user = 'root';
    $pass = 'skipper';
    $dbname = 'images'; // Your database name

    // Enable error reporting for debugging
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    try {
        $conn = new mysqli($host, $user, $pass, $dbname);
        
        if ($conn->connect_error) {
            throw new Exception("<h4 style='font-size:36px; color: red;'>Connection failed: </h4>" . $conn->connect_error);
        } else {
            echo "<h4 style='font-size: 36px; color: green;'>Connected to MySQL successfully!</h4>";
        }

        // Query to fetch the image
        $sql = "SELECT image_name, image_data FROM images WHERE id = 1"; // Change the ID if necessary
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            
            // Fetch the image data and output it as an image
            $imageData = $row['image_data'];
            $imageName = $row['image_name'];
            
            // Output the image as a base64-encoded string
            echo "<h4>Previewing image: $imageName</h4>";
            echo "<img src='data:image/jpeg;base64," . base64_encode($imageData) . "' alt='$imageName' />";
        } else {
            echo "<h4 style='color: red;'>No image found!</h4>";
        }

        // Close the connection
        $conn->close();
    } catch (Exception $e) {
        echo "<h4 style='color: red;'>Error: " . $e->getMessage() . "</h4>";
        echo "<br><strong>Host:</strong> " . $host;
        echo "<br><strong>User:</strong> " . $user;
        echo "<br>Make sure MySQL service is running and accessible.";
    }
    ?>

</body>
</html>