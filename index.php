<?php
require_once 'vendor/autoload.php'; // Include the library

use PragmaRX\Google2FA\Google2FA;

// Create a new instance of Google2FA
$google2fa = new Google2FA();

// Generate a secret key for the user
$secretKey = $google2fa->generateSecretKey();

// Display the secret key to the user (they should save this securely)
echo "Secret Key: $secretKey<br>";

// Generate a QR code URL
$qrCodeUrl = $google2fa->getQRCodeUrl(
    'YourApp',     // Your app's name
    'user@example.com', // User's email (or any identifier)
    $secretKey
);

// Display the QR code image (you'll need to display it in your HTML)
echo "<img src='$qrCodeUrl'><br>";