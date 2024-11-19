<?php
// Database structure:
// Database Name: crud_db
// Table Name: records
// Columns: id (INT, PRIMARY, AUTO_INCREMENT), name (VARCHAR), email (VARCHAR)
$conn = new mysqli('localhost', 'root', '', 'crud_db');
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
