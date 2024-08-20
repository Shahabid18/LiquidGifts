<?php 
$hostname = "127.0.0.1";
$username = "root";
$Upass = ""; 
$db_name = "s22135853";


// Create connection
$conn = new mysqli($hostname, $username, $Upass, $db_name) or die ("Unable to connect");

echo"successful";
?>



