<?php
require_once 'includes/dbconnect.php';
require_once 'includes/header.php';

// Handle form submission for new yield
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'sell_yield') {
    $crop_name = htmlspecialchars($_POST['crop_name']);
    $quantity = htmlspecialchars($_POST['quantity']);
    $price = htmlspecialchars($_POST['price']);
    // Simulating insert for now
    $message = "Your yield for $crop_name has been successfully listed on the marketplace!";
}

// Dummy data for existing yields (simulating database fetch)
$yields = [
    ["farmer" => "John Doe", "crop" => "Organic Tomatoes", "qty" => "50 kg", "price" => "$2.50/kg", "location" => "Green Valley"],
    ["farmer" => "Sarah Smith", "crop" => "Wheat", "qty" => "500 kg", "price" => "$0.80/kg", "location" => "Sunny Plains"],
    ["farmer" => "Mike Johnson", "crop" => "Potatoes", "qty" => "200 kg", "price" => "$1.20/kg", "location" => "River Side"]
];
?>

<main>
    <section class="hero" style="padding: 2rem 5%; min-height: auto;">
        <h2>Farmer's Marketplace</h2>
        <p>Sell your yield directly at the best rates or buy fresh produce directly from farmers.</p>
    </section>

    <div class="container">
        <?php if ($message): ?>
            <div style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: var(--border-radius); margin-bottom: 20px;">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <!-- Sell Yield Form -->
        <div class="card" style="margin-bottom: 3rem; text-align: left;">
            <h3 style="color: var(--primary-dark); margin-bottom: 1rem;">List Your Yield</h3>
            <form action="marketplace.php" method="POST" style="display: grid; gap: 15px; max-width: 600px;">
                <input type="hidden" name="action" value="sell_yield">
                
                <label for="crop_name">Crop Name</label>
                <input type="text" name="crop_name" id="crop_name" required style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                
                <label for="quantity">Quantity (e.g., 100 kg)</label>
                <input type="text" name="quantity" id="quantity" required style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                
                <label for="price">Price per Unit (e.g., $1.50/kg)</label>
                <input type="text" name="price" id="price" required style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                
                <button type="submit" class="btn btn-primary" style="justify-self: start;">List Yield</button>
            </form>
        </div>

        <!-- Available Yields -->
        <h3 style="color: var(--primary-dark); margin-bottom: 1.5rem;">Current Yields in Market</h3>
        <div class="grid">
            <?php foreach ($yields as $yield): ?>
                <div class="card" style="text-align: left;">
                    <h4 style="color: var(--primary-color); font-size: 1.2rem; margin-bottom: 0.5rem;"><?php echo htmlspecialchars($yield['crop']); ?></h4>
                    <p><strong>Farmer:</strong> <?php echo htmlspecialchars($yield['farmer']); ?></p>
                    <p><strong>Quantity:</strong> <?php echo htmlspecialchars($yield['qty']); ?></p>
                    <p><strong>Price:</strong> <?php echo htmlspecialchars($yield['price']); ?></p>
                    <p><strong>Location:</strong> <?php echo htmlspecialchars($yield['location']); ?></p>
                    <br>
                    <button class="btn btn-secondary">Contact Farmer</button>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- AI Yield Predictor Section -->
        <div class="card" style="margin-top: 4rem; background-color: #e8f5e9; border: 1px solid var(--primary-color);">
            <h3 style="color: var(--primary-dark);"><span style="font-size: 1.5rem;">🤖</span> AI Yield Rate Predictor</h3>
            <p>Unsure when to sell? Let our AI analyze current market trends to suggest the best selling window.</p>
            <br>
            <div style="display: flex; gap: 10px; justify-content: center; flex-wrap: wrap;">
                <input type="text" id="predictCrop" placeholder="Enter crop (e.g., Wheat)" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                <button onclick="predictRate()" class="btn btn-primary">Predict Best Rate</button>
            </div>
            <p id="predictionResult" style="margin-top: 15px; font-weight: bold; color: var(--primary-dark);"></p>
        </div>
    </div>
</main>

<script>
function predictRate() {
    const crop = document.getElementById('predictCrop').value;
    const result = document.getElementById('predictionResult');
    if (!crop) {
        result.innerText = "Please enter a crop name first.";
        return;
    }
    result.innerText = "Analyzing market trends for " + crop + "...";
    
    // Simulate AI delay
    setTimeout(() => {
        const trend = Math.random() > 0.5 ? "upward" : "downward";
        const percent = Math.floor(Math.random() * 15) + 1;
        if (trend === "upward") {
            result.innerText = "Prediction: The price of " + crop + " is trending UP by " + percent + "%. Consider holding for 2-3 days for maximum profit!";
            result.style.color = "green";
        } else {
            result.innerText = "Prediction: The price of " + crop + " is trending DOWN by " + percent + "%. It is highly recommended to sell immediately.";
            result.style.color = "red";
        }
    }, 1500);
}
</script>

<?php
require_once 'includes/footer.php';
?>
