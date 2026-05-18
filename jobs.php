<?php
require_once 'includes/dbconnect.php';
require_once 'includes/header.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'list';
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'post_job') {
    $title = htmlspecialchars($_POST['title']);
    $message = "Job '$title' has been posted successfully!";
}

$jobs = [
    ["title" => "Tractor Driver Needed", "farmer" => "John Doe", "location" => "Green Valley Farm", "pay" => "$15/hr", "type" => "Full-time"],
    ["title" => "Harvesting Helpers", "farmer" => "Sarah Smith", "location" => "Sunny Plains", "pay" => "$12/hr", "type" => "Seasonal"],
    ["title" => "Irrigation Specialist", "farmer" => "Mike Johnson", "location" => "River Side", "pay" => "$20/hr", "type" => "Part-time"]
];
?>

<main>
    <section class="hero" style="padding: 2rem 5%; min-height: auto;">
        <h2>Farm Jobs Portal</h2>
        <p>Connecting local farm workers with farm owners.</p>
    </section>

    <div class="container">
        <div style="margin-bottom: 2rem; text-align: center;">
            <a href="jobs.php?action=list" class="btn <?php echo $action == 'list' ? 'btn-primary' : 'btn-secondary'; ?>">Find Jobs</a>
            <a href="jobs.php?action=post" class="btn <?php echo $action == 'post' ? 'btn-primary' : 'btn-secondary'; ?>">Post a Job</a>
        </div>

        <?php if ($message): ?>
            <div style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: var(--border-radius); margin-bottom: 20px;">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <?php if ($action == 'list'): ?>
            <h3 style="color: var(--primary-dark); margin-bottom: 1.5rem;">Available Jobs</h3>
            <div class="grid">
                <?php foreach ($jobs as $job): ?>
                    <div class="card" style="text-align: left;">
                        <h4 style="color: var(--primary-color); font-size: 1.2rem; margin-bottom: 0.5rem;"><?php echo htmlspecialchars($job['title']); ?></h4>
                        <span style="display:inline-block; padding: 3px 8px; background: #e0e0e0; border-radius: 12px; font-size: 0.8rem; margin-bottom: 10px;"><?php echo htmlspecialchars($job['type']); ?></span>
                        <p><strong>Farm/Owner:</strong> <?php echo htmlspecialchars($job['farmer']); ?></p>
                        <p><strong>Location:</strong> <?php echo htmlspecialchars($job['location']); ?></p>
                        <p><strong>Pay:</strong> <?php echo htmlspecialchars($job['pay']); ?></p>
                        <br>
                        <button class="btn btn-secondary">Apply Now</button>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php elseif ($action == 'post'): ?>
            <div class="card" style="max-width: 600px; margin: 0 auto; text-align: left;">
                <h3 style="color: var(--primary-dark); margin-bottom: 1rem;">Post a New Job</h3>
                <form action="jobs.php?action=post" method="POST" style="display: grid; gap: 15px;">
                    <input type="hidden" name="action" value="post_job">
                    
                    <label for="title">Job Title</label>
                    <input type="text" name="title" id="title" required style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                    
                    <label for="location">Location / Farm Name</label>
                    <input type="text" name="location" id="location" required style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                    
                    <label for="pay">Pay Rate (e.g., $15/hr)</label>
                    <input type="text" name="pay" id="pay" required style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                    
                    <label for="type">Job Type</label>
                    <select name="type" id="type" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                        <option value="Full-time">Full-time</option>
                        <option value="Part-time">Part-time</option>
                        <option value="Seasonal">Seasonal</option>
                    </select>

                    <label for="desc">Description</label>
                    <textarea name="desc" id="desc" rows="4" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></textarea>
                    
                    <button type="submit" class="btn btn-primary" style="justify-self: start;">Submit Job Post</button>
                </form>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php
require_once 'includes/footer.php';
?>
