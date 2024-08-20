<?php
// Start or resume the session
session_start();

// Check if the form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $CardNumber = $_POST['CardNumber'];
    $ExpDate = $_POST['ExpiryDate'];
    $CVV = $_POST['CVV'];
    $BankingCorporation = $_POST['BankingCorporation'];
    $DonationAmount = $_POST['DonationAmount']; // Corrected variable name

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
    $insertUserIDQuery = "INSERT INTO bankdetails (UserID) SELECT UserID FROM userdetails";
    if ($conn->query($insertUserIDQuery) === TRUE) {
        echo "UserID inserted into bankdetails successfully<br>";
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
        $sql = "INSERT INTO bankdetails (UserID, CardNumber, CVV, ExpDate, BankingCorporation, DonationAmount) 
                VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }

        // Bind parameters and execute the statement
        $stmt->bind_param("issssd", $UserID, $CardNumber, $CVV, $ExpDate, $BankingCorporation, $DonationAmount);

        if ($stmt->execute()) {
            header("Location: ThankYou.php");
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

