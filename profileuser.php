<?php
// Establish a MySQL connection (Replace with your credentials)
$hostname = "127.0.0.1";
$username = "root";
$Upass = ""; 
$db_name = "s22135853";

$conn = new mysqli($hostname, $username, $Upass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect login form data
$email = $_POST['email'];
$password = $_POST['password'];

// Verify user login credentials
$sql = "SELECT userdetails.*, addressdetails.* 
        FROM userdetails 
        INNER JOIN userlogin ON userdetails.userID = userlogin.userID
        INNER JOIN addressdetails ON userdetails.addressID = addressdetails.addressID
        WHERE userlogin.email = '$email'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch user details
    $row = $result->fetch_assoc();
    $firstName = $row['FirstName'];
    $surname = $row['Surname'];
    $phoneNumber = $row['PhoneNumber'];
    $email = $row['Email'];

    // Address details
    $addressLine1 = $row['AddressLine1'];
    $addressLine2 = $row['AddressLine2'];
    $city = $row['City'];
    $postcode = $row['Postcode'];

    // Display user details
    echo "<h2>User Details</h2>";
    echo "Name: $firstName $surname<br>";
    echo "Phone Number: $phoneNumber<br>";
    echo "Email: $email<br>";

    echo "<h2>Address Details</h2>";
    echo "Address Line 1: $addressLine1<br>";
    echo "Address Line 2: $addressLine2<br>";
    echo "City: $city<br>";
    echo "Postcode: $postcode<br>";
} else {
    // No matching user found
    echo "User not found";
}

$conn->close();
?>
