<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $name_in = $_POST['fnameInput'] . " " . $_POST['lnameInput'];
    $email_in = $_POST['emailInput'];
    $phone_in = $_POST['phoneInput'];
    $priority_in = $_POST['priorityInput'];
    $title_in = $_POST['titleInput'];
    $description_in = $_POST['descriptionInput'];

    // Database connection
    require "connectToDB.php";
    
    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO contacts (name, phone, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name_in, $phone_in, $email_in);
    
    $stmt2 = $conn->prepare("select contact_id from contacts where phone ?)");
    $stmt2->bind_param("s", $phone_in);
    $stmt2->execute();
    $stmt2->bind_result($contact_id);
    
    $stmt3 = $conn->prepare("INSERT INTO tickets (title, description, contact_id, priority_id , status_id) VALUES (?, ?, ?, ?, ?)");
    $stmt3->bind_param("ssiii", $title_in, $description_in, $contact_id, $priority_in, 2);

    
    // Execute the statement
    if ($stmt3->execute()) {
      echo "success";
        // echo header("location: main.php");
    }

    // Close connections
    $stmt->close();
    $conn->close();
}
