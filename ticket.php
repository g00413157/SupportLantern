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
    $sql_ticket = "select distinct title, priority_id, contact_id from tickets where status_id = 2";
    $sql_ticket_result = $conn->query($sql_ticket);
    ?>
    <title>Home</title>
</head>

<body>
    <!-- contains heading, hamburger menu  -->
    <header class="title-container">
        <h1>In Progress: </h1>
        <div class="welcome-heading">
            <!-- hamburger menu -->
            <div class="hamburger" id="hamburger">
                <button class="burger-menu" id="burger-menu">
                    ☰
                </button>
                <nav class="ham-dropdown" id="ham-dropdown">
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">wht</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#contact">Contact</a></li>
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
              
    </div>
    <div class="spacer"><p></p> </div>
    <div class="buttons-container">
        <button type="button" class="start-action" onclick="backToMain()">Back</button>
        <button type="button" class="complete-action" onclick="completedTicket()">Complete Ticket</button>
    </div>
    <script>
        // ticket functions
        function backToMain(){
            // back to main
            window.location.href = `main.php?`;
        }
        function createNewTicket(){
            
        }
        function viewCompletedTickets(){
            
        }
    </script>
    
</body>

</html>