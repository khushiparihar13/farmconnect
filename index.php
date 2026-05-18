<?php
require_once 'includes/dbconnect.php';
require_once 'includes/header.php';
?>

<main>
    <!-- Hero Section -->
    <section class="hero">
        <h2>FarmConnect 🌱</h2>
        <h3 style="color: var(--primary-dark); margin-bottom: 1rem;">Connecting Farms, Workers & Markets Digitally.</h3>
        <p>Bridging Agriculture Through Technology & Community. A smart digital platform designed to connect farmers, consumers, and agricultural workers in one ecosystem.</p>
        <br>
        <a href="marketplace.php" class="btn btn-primary">Explore Marketplace</a>
        <a href="jobs.php" class="btn btn-secondary">Find Farm Jobs</a>
    </section>

    <div class="container">
        <!-- Info Section -->
        <div style="text-align:center; margin-bottom: 3rem;">
            <h3 style="color: var(--primary-dark); font-size: 2rem; margin-bottom: 1rem;">Our Objective</h3>
            <p style="font-size: 1.1rem; max-width: 800px; margin: 0 auto;">
                FarmConnect aims to digitally empower agriculture by increasing farmers’ profits, reducing middlemen dependency, creating rural employment opportunities, providing access to resources & schemes, and encouraging smart farming practices.
            </p>
        </div>

        <!-- Features Grid - Core Pillars -->
        <h3 style="text-align:center; color: var(--primary-dark); font-size: 2rem; margin-bottom: 2rem;">Core Features</h3>
        <div class="grid">
            <div class="card">
                <div style="font-size: 3rem; margin-bottom: 1rem;">🛒</div>
                <h3 style="color: var(--primary-color);">Marketplace</h3>
                <p>A digital marketplace where farmers can directly sell crops and agricultural products to consumers at fair prices without unnecessary middlemen.</p>
                <br>
                <a href="marketplace.php" class="btn btn-primary">Visit Marketplace</a>
            </div>

            <div class="card">
                <div style="font-size: 3rem; margin-bottom: 1rem;">👨‍🌾</div>
                <h3 style="color: var(--primary-color);">Farm Jobs</h3>
                <p>A dedicated agricultural employment section connecting workers with farmers. Find jobs or hire local talent easily.</p>
                <br>
                <a href="jobs.php" class="btn btn-secondary">Explore Jobs</a>
            </div>

            <div class="card">
                <div style="font-size: 3rem; margin-bottom: 1rem;">🌦️</div>
                <h3 style="color: var(--primary-color);">Smart Farming</h3>
                <p>Modern AI-powered tools to improve farming decisions, including crop recommendations, weather alerts, and pest detection.</p>
                <br>
                <a href="smartfarming.php" class="btn btn-primary">Try Smart Tools</a>
            </div>
            
            <div class="card">
                <div style="font-size: 3rem; margin-bottom: 1rem;">🏛️</div>
                <h3 style="color: var(--primary-color);">Gov Schemes</h3>
                <p>A simplified section providing awareness about government programs, subsidies, and loan options for farmers.</p>
                <br>
                <a href="govscheme.php" class="btn btn-secondary">View Schemes</a>
            </div>
        </div>
        
        <!-- Future Scope -->
        <div style="margin-top: 4rem; padding: 2rem; background-color: var(--card-bg); border-radius: var(--border-radius); box-shadow: var(--shadow);">
            <h3 style="color: var(--primary-dark); font-size: 1.8rem; margin-bottom: 1rem;">Future Scope</h3>
            <ul style="list-style-position: inside; color: #555; line-height: 1.8;">
                <li>🚀 AI Plant Disease Detection using Computer Vision</li>
                <li>💬 Live Chat with Agricultural Experts</li>
                <li>📈 Advanced Crop Price Prediction Models</li>
                <li>🚚 Logistics & Delivery Integration for Marketplace</li>
                <li>🌐 Community Farming Network and Forums</li>
            </ul>
        </div>
    </div>
</main>

<?php
require_once 'includes/footer.php';
?>
