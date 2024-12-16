<?php
     session_start();
     //  connect to database
     // add navigation
      require 'connectToDB.php';
      include "navigation.php";

// Establish connection to MySQL
$connection = new mysqli($host, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Check if POST data is set
if (isset($_POST['ticket_id']) && isset($_POST['new_status_id'])) {
    // Retrieve and sanitize inputs
    $ticket_id = (int) $_POST['ticket_id'];
    $new_status_id = (int) $_POST['new_status_id'];

    // Update query
    $sql = "UPDATE tickets SET status_id = ? WHERE ticket_id = ?";
    $stmt = $connection->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ii", $new_status_id, $ticket_id); // Bind parameters (integers)

        if ($stmt->execute()) {
            // Success response
            echo "Ticket status updated successfully.";
        } else {
            // Error in execution
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        // Error in query preparation
        echo "Error preparing the query.";
    }
} else {
    // If POST data is missing
    echo "Invalid input. Both 'ticket_id' and 'new_status_id' are required.";
}

// Close database connection
$connection->close();
?>
