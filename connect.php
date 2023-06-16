<?php
$servername = 'localhost';
$username = 'your_username';
$password = 'your_password';
$dbname = 'your_database_name';

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Create customers table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    line_user_id VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    product_code VARCHAR(255) NOT NULL
)";

$conn->query($sql);

?>