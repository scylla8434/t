<?php
// Includes database connection
include('includes/db.php');

// SQL to create admin if it doesn't exist
$sql = "INSERT INTO users (username, password, role)
        SELECT 'admin', 'admin123', 'admin'
        WHERE NOT EXISTS (SELECT 1 FROM users WHERE username = 'admin')";

// Execute the SQL query
if ($conn->query($sql) === TRUE) {
    echo "Admin account created or already exists.";
} else {
    echo "Error creating admin account: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
