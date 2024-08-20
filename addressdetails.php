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

    // Insert UserID from userdetails into addressdetails
    $insertUserIDQuery = "INSERT INTO addressdetails (UserID) SELECT UserID FROM userdetails";
    if ($conn->query($insertUserIDQuery) === TRUE) {
        echo "UserID inserted into addressdetails successfully<br>";
    } else {
        echo "Error inserting UserID into addressdetails: " . $conn->error . "<br>";
    }

    // Retrieve UserID from userdetails (assuming you need a specific user)
    $userQuery = "SELECT UserID FROM userdetails"; // Modify this with your condition
    $userResult = $conn->query($userQuery);

    if ($userResult && $userResult->num_rows > 0) {
        $userRow = $userResult->fetch_assoc();
        $UserID = $userRow['UserID'];

        // Prepare and bind the SQL statement using a prepared statement
        $sql = "INSERT INTO addressdetails (UserID, StreetName, PropertyName, PropertyNumber, City, PostCode, Country) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }

        // Bind parameters and execute the statement
        $stmt->bind_param("issssss", $UserID, $StreetName, $PropertyName, $PropertyNumber, $City, $PostCode, $Country);

        if ($stmt->execute()) {

            header("Location: bankform.php");
            echo "Data inserted successfully";
        } else {
            echo "Error inserting data: " . $stmt->error;
        }

        // Close statement and connection
        $stmt->close();
    } else {
        echo "UserID not found or multiple users found";
    }

    $conn->close();
}
?>
