<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="styles/unnamed-style.css">
    <link rel="stylesheet" href="styles/named-style.css">
    <title> Create New Ticket</title>
</head>

<body>
    <main>

        <?php
        session_start();
        //  connect to database
        // add navigation
        require 'connectToDB.php';
        include "navigation.php";

        // <!-- sql statement -->
        $sql_ticket = "select distinct ticket_id, title, priority_id, contact_id from tickets where status_id = 2";
        $sql_ticket_result = $conn->query($sql_ticket);

        ?>
        <!-- form -->
        <form id="newTicket" method="POST">
            <div class="loginOrSignup">
                <h2>Create A New Ticket</h2>
                <a href="main.php">
                    <p>click back to home</p>
                </a>


            </div>
            <div class="contacts-container">
                <label for="fnameInput">First Name:</label>
                <input type="text" name="fnameInput" id="fnameInput" required><br>

                <label for="lnameInput">Last Name:</label>
                <input type="text" name="lnameInput" id="lnameInput" required>

                <label for="emailInput">Email:</label>
                <input type="email" name="emailInput" id="emailInput" required>

<<<<<<< HEAD
                <label for="phoneInput">phone:</label>
                <input type="tel" name="phoneInput" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" id="phoneInput" required>
=======
                <label for="phoneInput">Phone:</label>
                <input type="tel" name="phoneInput"  pattern="[0-9]{3}[0-9]{3}[0-9]{4}" id="phoneInput" required>
>>>>>>> f810a7f683b92058e7a757363a95ec9b02876d17
            </div>

            <div class="ticketinfo-container">
                <label for="titleInput">Ticket Name:</label>
                <input type="text" name="titleInput" id="titleInput" required>
                <label for="descriptionInput">Description:</label>
                <textarea name="descriptionInput" id="descriptionInput" required></textarea>
                <label>priority:</label>
                <br>
                <div class="radioLabel">
                    <label for="priorityInput1">low:</label>
                    <input type="radio" name="priorityInput" id="priorityInput1" value="1" />

                    <label for="priorityInput2">medium:</label>
                    <input type="radio" name="priorityInput" id="priorityInput2" value="2" />

                    <label for="priorityInput3">high:</label>
                    <input type="radio" name="priorityInput" id="priorityInput3" value="3" />
                </div>
                <label for="submit"></label>
                <input type="submit" name="submit" id="submit" value="Generate">
            </div>
            <div id="newTicketResponse"></div>
        </form>

    </main>
    <script>
        function reload() {

             document.location.assign('main.php');
        }
        // updates page without full reload
        $(document).ready(function() {
           
            $('#newTicket').on('submit', function(event) {
                // prevents form from loading page traditionally
                event.preventDefault();
              
                $.ajax({
                    type: 'POST',
                    url: 'newTicketResponse.php',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#newTicketResponse').html(response); // Update the response div with the result
                    },
                    error: function(xhr, status, error) {
                        console.log("xhr", xhr.newTicketResponse);
                        console.log("Status ", status);
                        console.log("Error: ", error);
                        // $('#newTicketResponse').html('Response Error :' + error); // Display error message
                    }
                });
            });
        });
        </script>