<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="styles/unnamed-style.css">
    <link rel="stylesheet" href="styles/named-style.css">
    <title>Login | Sign up</title>
</head>
<body>


<main>
        <form id="userLogin">
            <div class="loginOrSignup">
                <h2>Login Page</h2>
                <a href="index.php">
                    <p>click back to home</p>
                </a>
                <br>
                <a href="signUp.html">
                    <p>New? Sign up as a member here</p>
                </a>
            </div>
            <!-- form -->

            <label for="usernameInput">Username:</label>
            <input type="text" name="usernameInput" id="usernameInput" required>

            <label for="passwordInput">Password:</label>
            <input type="text" name="passwordInput" id="passwordInput" required>

            <label for="submit"></label>
            <input type="submit" name="submit" id="submit" value="Log in">
            <div id="loginResponse"></div>  
        </form>
        
    </main>
    <script>
        // updates page without full reload

        $(document).ready(function () {
            $('#userLogin').on('submit', function (event) {
                // prevents form from loading page traditionally
                event.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: 'login.php',
                    data: $(this).serialize(),
                    success: function (response) {
                        $('#loginResponse').html(response); // Update the response div with the result
                    },
                    error: function (xhr, status, error) {
                        $('#loginResponse').html('Error: ' + error); // Display error message
                    }
                });
            });
        });
    </script>
</body>
</html>