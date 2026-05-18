<?php
// Start the session
session_start();

// Database configuration
$servername = "localhost";
$dbusername = "root";  // Your MySQL username
$dbpassword = "";      // Your MySQL password
$dbname = "fam";   // Your database name

// Create connection to the database
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}

// Get the logged-in user's username from the session
$username = $_SESSION['username'];

// Fetch user details from the database
$sql = "SELECT * FROM users WHERE username = ?";
if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
    } else {
        echo "<p class='error'>User not found!</p>";
        exit();
    }

    $stmt->close();
}

$conn->close();

// Logout functionality
if (isset($_GET['logout'])) {
    // Destroy the session and redirect to login page
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .dashboard-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        .welcome-message {
            margin-bottom: 20px;
            font-size: 18px;
        }

        .user-info {
            margin-bottom: 20px;
            font-size: 14px;
            text-align: left;
        }

        .logout-button {
            padding: 10px;
            background-color: #FF6347;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .logout-button:hover {
            background-color: #FF4500;
        }

        .error {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h2>Dashboard</h2>
        <p class="welcome-message">Welcome, <?php echo htmlspecialchars($user['username']); ?>!</p>
        
        <div class="user-info">
            <p><strong>Username:</strong> <?php echo htmlspecialchars($user['username']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
        </div>

        <a href="?logout=true" class="logout-button">Logout</a>
    </div>
</body>
</html>
