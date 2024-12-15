<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="styles/unnamed-style.css">
    <link rel="stylesheet" href="styles/named-style.css">
    <?php require 'connectToDB.php';
    session_start(); ?>
    <?php
    // <!-- sql statement -->
    $ticket_id = $_GET['ticket_id'];
    $contact_id = $_GET['contact_id'];

    $sql_get_ticket = "SELECT
    ticket_id,
    title,
    description,
    contact_id,
    priority_id,
    date_created 
    FROM tickets 
    WHERE ticket_id = $ticket_id";

    $sql_get_contact = "SELECT
    name, 
    phone,
    email 
    FROM contacts 
    WHERE contact_id = $contact_id";



    $sql_get_ticket_result = $conn->query($sql_get_ticket);
    ?>
    <title>Ticket Details</title>
</head>

<body>
    <?php include "navigation.php"; ?>

    <!-- generates tickets view  -->
    <div class="ticket-container">
        <?php
        if ($sql_get_ticket_result->num_rows > 0) {
            while ($row = $sql_get_ticket_result->fetch_assoc()) {
                echo ' <div class="ticketDetails  priority' . $row["priority_id"] . '">';
                echo '<p><span class="small">Created: ' .
                    date_format(date_create($row["date_created"]), "d/m/y - H:i ") . '</span></p>';
                echo '<p>ticket: ' . $row["ticket_id"] . '<br> ' . $row["title"];
                echo '<br>Description: ';
                echo '</p><div class="blurb" disabled>' . $row["description"] . '</div>';
                echo '</div>';
            }
        } else {
            echo '<div class="ticket"> <p class="ticket_id">No tickets</p><p class="title">Ticket does not exist</p></div>';

        }
        ?>
    </div>
    <div class="spacer">
        <p></p>
    </div>
    <div class="buttons-container">
        <button type="button" class="start-action" onclick="backToMain()">Back</button>
        <button type="button" class="complete-action" onclick="completedTicket()">Complete Ticket</button>
    </div>
    <script>
        // ticket functions
        function backToMain() {
            // back to main
            window.location.href = `main.php?`;
        }
        function createNewTicket() {

        }
        function viewCompletedTickets() {

        }
    </script>

</body>

</html>