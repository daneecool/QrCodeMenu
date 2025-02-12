<?php
require 'vendor/autoload.php';

use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

// Your test website URL
$menuURL = "http://10.90.211.150/index.php";

// Directory to save the QR code image (inside the Docker container)
$saveDir = '/var/www/html/qr_codes/';  // Assuming your PHP app is located in /var/www/html

// Ensure the directory exists and is writable
if (!is_dir($saveDir)) {
    mkdir($saveDir, 0755, true);  // Create the directory if it doesn't exist
}

$options = new QROptions([
    'outputType' => QRCode::OUTPUT_IMAGE_PNG,
    'eccLevel'   => QRCode::ECC_H, // High error correction
    'scale'      => 10, // Size of QR code
]);

// Generate QR code
$qrCode = (new QRCode($options))->render($menuURL);

// Save the QR code image
$filePath = $saveDir . 'qrcode.png';
file_put_contents($filePath, $qrCode);

// Optionally, display a message
echo "QR Code has been saved as 'qrcode.png' at $filePath.";
?>
