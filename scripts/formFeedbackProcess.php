<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate the form data (you can add more validation as needed)
    if (empty($name) || empty($email) || empty($message)) {
        // Handle empty fields
        echo "All fields are required.";
    } else {
        // If all fields are filled, proceed with processing the form data
        // Connect to MySQL database
        $servername = "localhost";
        $username = "your_username";
        $password = "your_password";
        $dbname = "your_database";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        // Prepare SQL statement to insert data into feedback table
        $sql = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";
        
        // Execute SQL statement
        if ($conn->query($sql) === TRUE) {
            echo "Feedback submitted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        // Close connection
        $conn->close();
    }
} else {
    // If the form is not submitted, redirect the user to the feedback form page
    header("Location: ../pages/formFeedback.php");
    exit();
}
?>
