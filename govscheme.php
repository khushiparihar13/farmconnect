<?php
require_once 'includes/dbconnect.php';
require_once 'includes/header.php';

$schemes = [
    [
        "title" => "Pradhan Mantri Kisan Samman Nidhi (PM-KISAN)",
        "desc" => "Provides income support to all landholding farmers' families in the country to supplement their financial needs.",
        "link" => "https://pmkisan.gov.in/"
    ],
    [
        "title" => "Pradhan Mantri Fasal Bima Yojana (PMFBY)",
        "desc" => "A crop insurance scheme that integrates multiple stakeholders on a single platform to provide insurance cover against crop failure.",
        "link" => "https://pmfby.gov.in/"
    ],
    [
        "title" => "Paramparagat Krishi Vikas Yojana (PKVY)",
        "desc" => "Promotes organic farming through the adoption of organic village by cluster approach and PGS certification.",
        "link" => "https://pgsindia-ncof.gov.in/"
    ],
    [
        "title" => "Soil Health Card Scheme",
        "desc" => "Provides farmers with soil health cards that contain nutrient status of their soil and recommendations on appropriate dosage of nutrients.",
        "link" => "https://soilhealth.dac.gov.in/"
    ]
];
?>

<main>
    <section class="hero" style="padding: 2rem 5%; min-height: auto;">
        <h2>Government Schemes & Subsidies</h2>
        <p>Stay updated with the latest government initiatives designed to support and empower farmers.</p>
    </section>

    <div class="container">
        <div class="grid">
            <?php foreach ($schemes as $scheme): ?>
                <div class="card" style="text-align: left; border-top: 4px solid var(--secondary-color);">
                    <h3 style="color: var(--primary-dark); margin-bottom: 1rem;"><?php echo htmlspecialchars($scheme['title']); ?></h3>
                    <p style="color: #555; margin-bottom: 1.5rem; flex-grow: 1;"><?php echo htmlspecialchars($scheme['desc']); ?></p>
                    <a href="<?php echo htmlspecialchars($scheme['link']); ?>" target="_blank" class="btn btn-primary">Learn More & Apply</a>
                </div>
            <?php endforeach; ?>
        </div>
        
        <div class="card" style="margin-top: 3rem; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); color: white;">
            <h3 style="margin-bottom: 1rem;">Need Help Navigating Schemes?</h3>
            <p style="margin-bottom: 1.5rem;">Our Smart Farm Assistant can guide you on which schemes you are eligible for based on your land size and crop type.</p>
            <button onclick="toggleChatbot(); setTimeout(() => { document.getElementById('chatInput').value = 'What schemes am I eligible for?'; document.getElementById('chatInput').focus(); }, 500);" class="btn btn-secondary">Ask AI Assistant</button>
        </div>
    </div>
</main>

<?php
require_once 'includes/footer.php';
?>
