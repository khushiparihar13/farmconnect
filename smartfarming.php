<?php
require_once 'includes/dbconnect.php';
require_once 'includes/header.php';
?>

<main>
    <section class="hero" style="padding: 2rem 5%; min-height: auto;">
        <h2>Smart Farming Features 🌦️</h2>
        <p>Modern AI-powered tools to improve farming decisions and productivity.</p>
    </section>

    <div class="container">
        <div class="grid">
            <div class="card" style="text-align: left; border-top: 4px solid var(--primary-color);">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">🌱</div>
                <h3 style="color: var(--primary-dark); margin-bottom: 1rem;">AI Crop Recommendation</h3>
                <p style="color: #555; margin-bottom: 1.5rem;">Get personalized crop suggestions based on your soil type, region, and climate to maximize yield and profit.</p>
                <button onclick="toggleChatbot(); setTimeout(() => { document.getElementById('chatInput').value = 'What crop should I plant?'; document.getElementById('chatInput').focus(); }, 500);" class="btn btn-primary">Ask AI Assistant</button>
            </div>

            <div class="card" style="text-align: left; border-top: 4px solid var(--secondary-color);">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">🌤️</div>
                <h3 style="color: var(--primary-dark); margin-bottom: 1rem;">Weather Forecast & Alerts</h3>
                <p style="color: #555; margin-bottom: 1.5rem;">Receive real-time weather updates and alerts for upcoming rains, storms, or droughts to protect your harvest.</p>
                <button class="btn btn-secondary">View Local Weather</button>
            </div>

            <div class="card" style="text-align: left; border-top: 4px solid var(--primary-color);">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">🐛</div>
                <h3 style="color: var(--primary-dark); margin-bottom: 1rem;">Pest/Disease Detection</h3>
                <p style="color: #555; margin-bottom: 1.5rem;">Upload a photo of your affected crops and let our AI instantly identify the pest or disease and suggest a remedy.</p>
                <button onclick="toggleChatbot(); setTimeout(() => { document.getElementById('chatInput').value = 'How to treat crop disease?'; document.getElementById('chatInput').focus(); }, 500);" class="btn btn-primary">Diagnose Now</button>
            </div>

            <div class="card" style="text-align: left; border-top: 4px solid var(--secondary-color);">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">💧</div>
                <h3 style="color: var(--primary-dark); margin-bottom: 1rem;">Irrigation Guidance</h3>
                <p style="color: #555; margin-bottom: 1.5rem;">Smart schedules and guidance on when and how much to water your crops to conserve water and boost growth.</p>
                <button class="btn btn-secondary">Get Irrigation Plan</button>
            </div>
            
            <div class="card" style="text-align: left; border-top: 4px solid var(--primary-color); grid-column: 1 / -1;">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">📅</div>
                <h3 style="color: var(--primary-dark); margin-bottom: 1rem;">Seasonal Farming Tips</h3>
                <p style="color: #555; margin-bottom: 1.5rem;">Expert advice and tips tailored for each season to ensure you are always prepared for what's coming next.</p>
                <button onclick="toggleChatbot(); setTimeout(() => { document.getElementById('chatInput').value = 'Give me some seasonal tips.'; document.getElementById('chatInput').focus(); }, 500);" class="btn btn-primary">Get Seasonal Tips</button>
            </div>
        </div>
    </div>
</main>

<?php
require_once 'includes/footer.php';
?>
