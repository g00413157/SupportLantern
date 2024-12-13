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
    $sql_ticket = "select distinct ticket_id, title, priority_id, contact_id from tickets where status_id = 2";
    $sql_ticket_result = $conn->query($sql_ticket);
    ?>
    <title>Home</title>
</head>

<body>
    <!-- contains heading, hamburger menu  -->
    <header class="title-container">
        <h1>In Progress</h1>
        <div class="welcome-heading">
            <!-- hamburger menu -->
            <div class="hamburger" id="hamburger">
                <button class="burger-menu" id="burger-menu">
                    ☰
                </button>
                <nav class="ham-dropdown" id="ham-dropdown">
                    <ul>
                        <li><a href="main.php">Home</a></li>
                        <li><a href="#about">wht</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                    </ul>
                </nav>
            </div>
            <script>
                // JavaScript for menu
                const burgerMenu = document.getElementById('burger-menu');
                const dropdown = document.getElementById('ham-dropdown');
                const hamburger = document.getElementById('hamburger');
            </script>
            <?php
            // heading for log in info
            if (isset($_SESSION['username'])) {
                echo "<h2 id='subheading'>Logged in as " . $_SESSION["username"] . "</h2>";
            }
            ?>

            <script>
                // dynamically adds classes to elements
                burgerMenu.addEventListener('click', () => {
                    dropdown.classList.toggle('open');
                    hamburger.classList.toggle('expand');

                });
            </script>

        </div>
    </header>
    <!-- generates tickets view  -->
    <div class="ticket-container">
                <?php
                
                if ($sql_ticket_result->num_rows > 0) {
                    while ($row = $sql_ticket_result->fetch_assoc()) {
                        echo ' <div class="ticket  priority'.$row["priority_id"].'" 
                            onclick="viewOpenTicket('.$row["ticket_id"].','.$row["contact_id"].')">';
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
        <button type="button" class="start-action" onclick="createNewTicket()">New Ticket</button>
        <button type="button" class="complete-action" onclick="viewCompletedTickets()">Completed</button>
    </div>
    <script>
        // ticket functions
        function viewOpenTicket(ticket, contact){
             window.location.href = `ticket.php?${"ticket_id="+ticket +"&contact_id="+contact}`;
        }
        function createNewTicket(){
            
        }
        function viewCompletedTickets(){
            
        }
        </script>
    
    
</body>

</html>