<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $name_in = $_POST['fnameInput'] . " " . $_POST['lnameInput'];
    $email_in = $_POST['emailInput'];
    $phone_in = $_POST['phoneInput'];
    $priority_in = $_POST['priorityInput'];
    $title_in = $_POST['titleInput'];
    $description_in = $_POST['descriptionInput'];
    $status_id = 2; // always 2

    // Database connection
    require "connectToDB.php";


    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO contacts (name, phone, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name_in, $phone_in, $email_in);
    $stmt->execute();
    $stmt->close();
    
    $stmt2 = $conn->prepare("select contact_id from contacts where phone = ?");
    $stmt2->bind_param("s", $phone_in);
    $stmt2->execute();
    $stmt2->bind_result($contact_id);
    $stmt2->fetch();
    $stmt2->close();
    
    if (!empty($contact_id)) {
    $stmt3 = $conn->prepare("INSERT INTO tickets (title, description, contact_id, priority_id , status_id) VALUES (?, ?, ?, ?, ?)");
    $stmt3->bind_param("ssiii", $title_in, $description_in, $contact_id, $priority_in, $status_id);
    $stmt3->execute();
    $stmt3->close();
     
    echo "<p>new Ticket registered successfully! page will reload shortly...</p>";
    echo "<script>window.setTimeout(reload,3000);</script>";
    }else {
        echo "Statement execute Error: " . $stmt->error;
    }
    // Close connections
   
    $conn->close();
  
   
}
