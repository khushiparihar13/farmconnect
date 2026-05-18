<?php
session_start(); // Start the session

// Check if user is logged in
$isLoggedIn = isset($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm Connect</title>
    <link rel="stylesheet" href="..\home.css">
    <link rel="stylesheet" href="menu.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="logo2.jpg" alt="">
            <h1>FARM CONNECT</h1>
            <img src="" alt="">
            <header>
                <div id="google_translate_element"></div>
            </header>
        </div>

        <nav>
            <div>
                <div class="menu-btn" onclick="toggleMenu()">☰ Menu</div>
                <div class="menu-content" id="menuContent">
                    <a href="login_sign.html">Login</a>
                    <a href="blog.html">Blog</a>
                    <a href="about.html">About</a>
                    <a href="FAQ'S.html">FAQs</a>
                </div>
            </div>

            <div class="search-bar">
                <input type="text" placeholder=" 🔍 search here (job title, location...)">
            </div>

            <div class="navbar">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="career.html">Career</a></li>
                    <li><a href="community.html">Communtiy</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="govscheme.html">Gov-Scheme</a></li>
                </ul>
            </div>

            <div class="login">
                <?php if ($isLoggedIn): ?>
                    <span>Welcome, <?php echo $_SESSION['username']; ?>!</span>
                    <a href="logout.php">Logout</a>
                <?php else: ?>
                    <a href="login_sign.html">Login</a>
                <?php endif; ?>
            </div>
        </nav>
    </header>

    <main>
        <div class="info">
            <h2><b><i>FARM CONNECT</i></b></h2>
            <p>
                <b>Welcome to FarmConnect</b> <br>
                - your bridge between farmers and job seekers. Our platform connects skilled job seekers with
                farmers in need of talent, making agricultural jobs more efficient and accessible.
            </p>
        </div>

        <section class="intro">
            <h2>Your Gateway to Farming Jobs</h2>
        </section>

        <section class="jobs">
            <div class="job-type">
                <h2>As a Farm Worker</h2>
                <img src="worker.png" alt="Farm Worker">
                <p>Want to grab a job according to your skills, locality, and interest?</p>
                <a href="joblisting.html" class="find-jobs">Find Jobs</a>
            </div>

            <div class="job-type">
                <h2>As a Farm Owner</h2>
                <img src="farmerog.png" alt="Farm Owner">
                <p>Want workers to make your farming more easy, seamless, and productive?</p>
                <a href="post.html" class="post-jobs">Post Jobs</a>
            </div>
        </section>

    </main>

    <!-- Footer Section -->
    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <h2>Farm Connect</h2>
                <p>Connecting farmers and workers for a better future.</p>
            </div>

            <div class="footer-middle">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="footer-right">
                <h3>Contact Us</h3>
                <p>Email: info@farmconnect.com</p>
                <p>Phone: +123 456 7890</p>
                <div class="social-icons">
                    <a href="#"><img src="Facebook-Logosu.png" alt="Facebook"></a>
                    <a href="#"><img src="Insta-Logo.png" alt="Instagram"></a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 Farm Connect. All rights reserved.</p>
        </div>
    </footer>

    <script>
        function toggleMenu() {
            document.getElementById('menuContent').classList.toggle('show');
        }
    </script>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>

</html>
