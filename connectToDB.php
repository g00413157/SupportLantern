<?php
    $servername = "SupportLatern";
    $username = "root";
    $password = "";
    $dbname = "SupportLantern";

// create & checking connection 
$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>