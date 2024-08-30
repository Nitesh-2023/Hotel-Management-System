<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Check if the username and password match a database record
    // You should replace this with a secure database connection and query
    
    // Example using a simple hardcoded user/password (not recommended for production)
    $valid_username = "admin";
    $valid_password = "password123";
    $valid_username1 = "bihar";
    $valid_password1 = "123";
    
    if ($username === $valid_username && $password === $valid_password) {
        // Redirect to a dashboard or another page on successful login
        header("Location: main.html");
        exit;
    }if ($username === $valid_username1 && $password === $valid_password1) {
        // Redirect to a dashboard or another page on successful login
        header("Location: home.html");
        exit;
    } else {
        // Display an error message if login fails
        echo "Invalid username or password. Please try again.";
    }
}
?>