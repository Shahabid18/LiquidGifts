<?php
include "../db_conn.php"; 


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $surname = mysqli_real_escape_string($conn, $_POST['surname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
    $streetName = mysqli_real_escape_string($conn, $_POST['addressLine1']);
    $propertyNumber = mysqli_real_escape_string($conn, $_POST['PropertyNumber']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $postalCode = mysqli_real_escape_string($conn, $_POST['postalCode']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $nameOnCard = mysqli_real_escape_string($conn, $_POST['nameOnCard']);
    $cardNumber = mysqli_real_escape_string($conn, $_POST['CardNumber']);
    $cvv = mysqli_real_escape_string($conn, $_POST['CVV']);
    $expiryDate = mysqli_real_escape_string($conn, $_POST['expiryDate']);

    $sql = "INSERT INTO checkoutdetails (User_ID, Bank_ID, Address_ID, First_Name, Surname, Email, Phone_Number, StreetName, PropertyNumber, City, PostalCode, Country, NameOnCard, CardNumber, CVV, ExpiryDate)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiisssisssssisss", $user_ID, $bank_ID, $address_ID, $firstName, $surname, $email, $phoneNumber, $streetName, $propertyNumber, $city, $postalCode, $country, $nameOnCard, $cardNumber, $cvv, $expiryDate);

    
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    
    $stmt->close();
}


$conn->close();
?>
