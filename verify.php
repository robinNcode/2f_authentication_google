<?php
// You should also save the secret key and the user identifier in your database
// for future verification.

// Verification example (when user submits the code)
$userCode = $_POST['user_code']; // Get the user's input code

// Verify the code
$isValid = $google2fa->verifyKey($secretKey, $userCode);

if ($isValid) {
    echo "Code is valid!";
} else {
    echo "Code is invalid!";
}
?>
