<?php
$servername = "localhost";
$username = "root"; // Default username in XAMPP
$password = ""; // Default password is empty in XAMPP
$database = "farmconnect"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle Login
if (isset($_POST['login'])) {
    $login_username = $_POST['username'];
    $login_password = $_POST['password'];

    // Check if username exists
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $login_username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verify password
        if (password_verify($login_password, $user['password'])) {
            echo "Login successful";
            // Redirect to homepage or dashboard
        } else {
            echo "Invalid password";
        }
    } else {
        echo "Username not found";
    }
}

// Handle Sign Up
if (isset($_POST['signup'])) {
    $signup_username = $_POST['username'];
    $signup_email = $_POST['email'];
    $signup_password = $_POST['password'];

    // Check if username already exists
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $signup_username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo "Username already taken";
    } else {
        // Insert new user
        $hashed_password = password_hash($signup_password, PASSWORD_DEFAULT); // Hash password
        $insert_sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $insert_stmt = $conn->prepare($insert_sql);
        $insert_stmt->bind_param("sss", $signup_username, $signup_email, $hashed_password);
        
        if ($insert_stmt->execute()) {
            echo "Sign up successful";
            // Redirect to login page
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

$conn->close();
?>
