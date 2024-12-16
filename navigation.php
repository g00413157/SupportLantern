<!-- contains heading, hamburger menu  -->
<header class="title-container">
<div class="logo-container">
            <img class="logo" src="imgs/logo.png" alt="supportLantern - Beacon of IT support">
        </div>
        <div class="welcome-heading">
            <!-- hamburger menu -->
            <div class="hamburger" id="hamburger">
                <button class="burger-menu" id="burger-menu">
                    ☰
                </button>
                <nav class="ham-dropdown" id="ham-dropdown">
                    <ul>
                        <li><a href="main.php">Home</a></li>
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
                echo "<p id='subheading'>Logged in as " . $_SESSION["username"] . "</p>";
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