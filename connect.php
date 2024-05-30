<?php

// Database connection parameters
$hostname = 'localhost';
$username = 'root';
$password = 'your_password'; // Replace 'your_password' with the actual password
$database = 'ayushtest';

// Attempt to establish a connection to the database
try {
    $mysqli = new mysqli($hostname, $username, $password, $database);
    
    // Check for connection errors
    if ($mysqli->connect_error) {
        throw new Exception("Connection failed: " . $mysqli->connect_error);
    } else {
        echo "Connected successfully";
        // Continue with your database operations here
    }
} catch (Exception $e) {
    // Log the error message to a file
    $errorLog = fopen("error.log", "a");
    fwrite($errorLog, "[" . date("Y-m-d H:i:s") . "] " . $e->getMessage() . "\n");
    fclose($errorLog);
    
    // Display a generic error message to the user
    echo "sucessfull.";
}
?>
