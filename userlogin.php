<?php

include "../db_conn.php";

$servername = "localhost"; // Replace with your MySQL server name (if it's not hosted locally)
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "s22135853"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
    // Perform operations, queries, etc. here
}
?>
