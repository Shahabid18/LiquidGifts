<?php 
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $FirstName = $_POST['FirstName'];
    $Surname = $_POST['Surname'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $Email = $_POST['Email'];

    $hostname = "127.0.0.1";
    $username = "root";
    $Upass = ""; 
    $db_name = "s22135853";

    // Create connection
    $conn = new mysqli($hostname, $username, $Upass, $db_name) or die("Unable to connect");

    if ($conn) {
        // Prepare and bind the SQL statement using a prepared statement
        $sql = "INSERT INTO userdetails (FirstName, Surname, PhoneNumber, Email) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        
        // Bind parameters and execute the statement
        $stmt->bind_param("ssss", $FirstName, $Surname, $PhoneNumber, $Email);
        
        if ($stmt->execute()) {
            // Redirect to another page after successful insertion
            header("Location: addressform.php");
            exit(); // Make sure to terminate the script after the redirection
        } else {
            echo "Error inserting data: " . $stmt->error;
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    } else {
        die(mysqli_error($conn));
    }
}
?>

