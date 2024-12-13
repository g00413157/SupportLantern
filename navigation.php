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