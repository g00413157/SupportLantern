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
    $sql_ticket = "select distinct ticket_id, title, priority_id, contact_id from tickets where status_id = 3";
    $sql_ticket_result = $conn->query($sql_ticket);
    ?>
    <title>Home</title>
</head>

<body>
    <?php include "navigation.php"; ?>
    <!-- generates tickets view  -->
    <div class="ticket-container">
                <?php
                
                if ($sql_ticket_result->num_rows > 0) {
                    while ($row = $sql_ticket_result->fetch_assoc()) {
                        echo ' <div class="ticket  priority'.$row["priority_id"].'" 
                            onclick="viewCompletedTickets('.$row["ticket_id"].','.$row["contact_id"].')">';
                        echo '<p class="ticket_id">'.$row["ticket_id"] .'</p>';
                        echo '<p class="ticket_id">'.$row["title"] .'</p>';
                        echo '</div>';
                    }
                }else{
                    echo '<div class="ticket"> <p class="ticket_id">No tickets</p><p class="title">new ticket will be displayed here</p></div>';   
                }
                ?>
                <div class="spacer"><p>Open tickets will show up here</p> </div>
    </div>
   
    <div class="buttons-container">
        <button type="button" class="start-action" onclick="backToMain()">Back</button>
        <button type="button" class="complete-action" onclick="createNewTicket()" >Create New Ticket</button>
    </div>
    <script>
        // ticket functions
        function viewOpenTicket(ticket, contact){
             window.location.href = `ticket.php?${"ticket_id="+ticket +"&contact_id="+contact}`;
        }
        function createNewTicket(){
            window.location.href = `newTicket.php`;
            
        }
        function viewCompletedTickets(){
            window.location.href = `ticket.php?${"ticket_id="+ticket +"&contact_id="+contact}`;
        }
        function backToMain() {
            // back to main
            window.location.href = `main.php?`;
        }
           //service worker 
           if ('serviceWorker' in navigator) {
            navigator.serviceWorker
                .register('/service-worker.js')
                .then(registration => {
                    console.log('Service Worker registered with scope:', registration.scope);
                })
                .catch(error => {
                    console.error('Service Worker registration failed:', error);
                });
        }

        </script>
    
    
</body>

</html>