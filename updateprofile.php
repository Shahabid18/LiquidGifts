<?php
// Start or resume the session
session_start();

// Database connection details
$hostname = "127.0.0.1";
$username = "root";
$Upass = "";
$db_name = "s22135853";

// Create connection
$conn = new mysqli($hostname, $username, $Upass, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve UserID from the session or any other means you're storing it
$UserID = $_SESSION['UserID']; // Replace this with your session variable name

// Retrieve user's current information from the database
$sql = "SELECT * FROM userdetails WHERE UserID = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("i", $UserID);
$stmt->execute();

$result = $stmt->get_result();
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Assign fetched data to variables
    $firstName = $row['firstname'];
    $surname = $row['surname'];
    $email = $row['email'];
    $phone = $row['phonenumber'];
    // ... (retrieve other fields as needed)
}
$stmt->close();
$conn->close();
?>