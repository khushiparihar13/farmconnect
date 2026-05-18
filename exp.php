<?php
session_start();

// Check if user is logged in
$isLoggedIn = isset($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm Connect</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="menu.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="logo2.jpg" alt="">
            <h1>FARM CONNECT</h1>
            <div id="google_translate_element"></div>
        </div>

        <nav>
            <div class="menu-btn" onclick="toggleMenu()">☰ Menu</div>
            <div class="menu-content" id="menuContent">
                <a href="blog.html">Blog</a>
                <a href="about.html">About</a>
                <a href="FAQ'S.html">FAQs</a>
            </div>

            <div class="search-bar">
                <input type="text" placeholder=" 🔍 search here (job title, location...)">
            </div>

            <div class="navbar">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="career.html">Career</a></li>
                    <li><a href="community.html">Community</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="govscheme.html">Gov-Scheme</a></li>
                </ul>
            </div>

            <div class="login">
                <?php if ($isLoggedIn): ?>
                    <span>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</span>
                    <a href="logout.php">Logout</a>
                <?php else: ?>
                    <a href="login.php">Login</a>
                <?php endif; ?>
            </div>
        </nav>
    </header>

    <main>
        <div class="info">
            <h2><b><i>FARM CONNECT</i></b></h2>
            <p>
                <b>Welcome to FarmConnect</b> - your bridge between farmers and job seekers. Our platform connects skilled job seekers with
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
                <p>Want workers to make your farming easier, seamless, and productive?</p>
                <a href="post.html" class="post-jobs">Post Jobs</a>
            </div>
        </section>
    </main>

    <!-- Include Footer -->
    <?php include 'footer.php'; ?>

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