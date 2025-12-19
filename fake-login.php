<?php
// fake_login.php - Simulated login processing script

// Simulate a database connection
$server = "localhost";
$username = "admin";
$password = "asdf";
$database = "users_db";

// Fake connection
$conn = true; // Just a placeholder, not a real connection

// Check if POST data is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    // Simulate validation
    if ($user === "admin" && $pass === "password123") {
        echo "Login successful! Redirecting...";
        // Fake redirect
        header("Refresh:2; url=dashboard.php");
    } else {
        echo "Invalid credentials. Please try again.";
    }
} else {
    echo "Access denied.";
}
?>
