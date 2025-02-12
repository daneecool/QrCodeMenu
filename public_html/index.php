<h1>Greetings Infedels</h1>
<h4>Attempting MySQL connection from php...</h4>
<?php
$host = 'mysql';
$user = 'root';
$pass = 'rootpassword';
$dbname = 'images'; // Your database name

// Add error reporting for better debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    $conn = new mysqli($host, $user, $pass, $dbname);
    
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    } else {
        echo "<h1 style='font-size: 36px;'>Connected to MySQL successfully!</h1>";
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
        echo "No image found!";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
    echo "<br>Host: " . $host;
    echo "<br>User: " . $user;
    echo "<br>Make sure MySQL service is running and accessible.";
}
?>
