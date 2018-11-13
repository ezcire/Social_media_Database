<?php

$database = "Social_media_project";


$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
echo "<br>";

$list = "INSERT into Member (Email, Fname, Lname, Mobile_number, Gender, DOB) VALUES ('ezcire@yahoo.com', 'Eric', 'Zelaya', '2142126169', 'M', '1989-10-20')" ;

if ($conn->query($list) === TRUE) {
    echo "New record created successfully";
    echo "<br>";
} else {
    echo "Error: " . $list . "<br>" . $conn->error;
}

$conn->close();


?>