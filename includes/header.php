<?php
// includes/header.php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm Connect</title>
    <!-- Google Fonts for Modern Typography -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="assets/images/logo2.jpg" alt="Farm Connect Logo" onerror="this.src='https://via.placeholder.com/50x50?text=FC'">
            <h1>FARM CONNECT</h1>
        </div>
        
        <nav>
            <div class="menu-btn" onclick="toggleMenu()">☰</div>
            <div class="navbar" id="navMenu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="marketplace.php">Marketplace</a></li>
                    <li><a href="jobs.php">Farm Jobs</a></li>
                    <li><a href="smartfarming.php">Smart Farming</a></li>
                    <li><a href="govscheme.php">Gov-Schemes</a></li>
                </ul>
            </div>
            <div class="login">
                <?php if(isset($_SESSION['user_id'])): ?>
                    <a href="logout.php" class="btn btn-secondary">Logout</a>
                <?php else: ?>
                    <a href="login.php" class="btn btn-secondary">Login / Sign Up</a>
                <?php endif; ?>
            </div>
            <!-- Google Translate -->
            <div id="google_translate_element" style="margin-left:15px;"></div>
        </nav>
    </header>

    <script type="text/javascript">
        function toggleMenu() {
            var menu = document.getElementById('navMenu');
            if (menu.style.display === "block") {
                menu.style.display = "none";
            } else {
                menu.style.display = "block";
            }
        }
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
