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
       <form id="userSignUp">
           <div class="loginOrSignup">
               <h2>Create A New Ticket</h2>
               <a href="main.php"><p>click back to home</p></a>
               
             
           </div>

           <label for="usernameInput">Ticket Name:</label>
           <input type="text" name="ticketTitleInput" id="ticketTitleInput" required>
           
           <label for="emailInput">Email:</label>
           <input type="email" name="emailInput" id="emailInput" required>
           
           <label for="passwordInput">Password:</label>
           <input type="text" name="passwordInput" id="passwordInput" required>
           
           <label for="submit"></label>
           <input type="submit" name="submit" id="submit" value="Sign up">
           <div id="signUpResponse"></div>
       </form>
       
   </main>
<script>
    function reload(){
       document.location.assign('newTicketSuccess.php');
   }
   // updates page without full reload
    $(document).ready(function () {
       
       $('#newTicket').on('submit', function (event) {
           // prevents form from loading page traditionally
           event.preventDefault(); 

           $.ajax({
               type: 'POST',
               url: 'newTicket.php',
               data: $(this).serialize(),
               success: function (response) {
                   $('#newTicketResponse').html(response); // Update the response div with the result
               },
               error: function (xhr, status, error) {
                   $('#newTicketResponse').html('Response Error :' + error); // Display error message
               }
           });
       });
   });
