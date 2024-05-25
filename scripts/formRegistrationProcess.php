<?php
// formRegistrationProcess.php

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (isset($_POST['salutation']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['gender']) && isset($_POST['email']) && isset($_POST['street']) && isset($_POST['city']) && isset($_POST['region']) && isset($_POST['postalCode']) && isset($_POST['loginName']) && isset($_POST['password1']) && isset($_POST['password2'])) {
        
        // Check if passwords match
        if ($_POST['password1'] !== $_POST['password2']) {
            // Redirect back to registration page with error message
            header("Location: formRegistration.php?error=password_mismatch");
            exit();
        }
        
        // Your validation and processing code goes here
        
        // Assuming 'loginName' is the username field, retrieve it from $_POST
        $username = $_POST['loginName'];
        
        // Redirect to response page with success message and username
        header("Location: formRegistrationResponse.php?success=true&username=$username");
        exit();
    } else {
        // Redirect back to registration page with error message
        header("Location: formRegistration.php?error=required_fields");
        exit();
    }
} else {
    // Redirect back to registration page
    header("Location: formRegistration.php");
    exit();
}
?>




