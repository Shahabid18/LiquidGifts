<?php
// Start or resume the session
session_start();

// Check if the form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $StreetName = $_POST['StreetName'];
    $PropertyName = $_POST['PropertyName'];
    $PropertyNumber = $_POST['PropertyNumber'];
    $City = $_POST['City'];
    $PostCode = $_POST['PostCode'];
    $Country = $_POST['Country'];

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

    // Prepare and bind the SQL statement using a prepared statement to update addressdetails
    $sql = "UPDATE addressdetails SET StreetName=?, PropertyName=?, PropertyNumber=?, City=?, PostCode=?, Country=? WHERE UserID=?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    // Bind parameters and execute the statement
    $stmt->bind_param("ssisssi", $StreetName, $PropertyName, $PropertyNumber, $City, $PostCode, $Country, $UserID);

    if ($stmt->execute()) {
        header("Location: bankdetails.php");
        echo "Data updated successfully";
    } else {
        echo "Error updating data: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
