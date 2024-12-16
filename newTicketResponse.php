<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $username_in = $_POST['usernameInput'];
    $email_in = $_POST['emailInput'];
    $password_in = $_POST['passwordInput'];

    // variables check if exists already
    $emailExists = false; 
    $usernameExists = false; 

    // Database connection
    require "connectToDB.php";
    

   
    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO Users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username_in, $email_in, $password_in);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<p>User registered successfully! page will reload shortly...</p>";
        echo "<p>Username : {$username_in}</p>";
        echo "<p>Email : {$email_in}</p>";
        echo "<script>window.setTimeout(reload,3000);</script>";
    } else {
        echo "Statement execute Error: " . $stmt->error;
    }
  
   
    
     // Close connections
     $stmt->close();
    $conn->close();
}
?>
