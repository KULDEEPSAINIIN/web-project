<?php
session_start(); // Session start for login management
$servername = "localhost";
$username = "root"; // MySQL username
$password = ""; // MySQL password 
$dbname = "mindcare1"; // data base name
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$email = trim($_POST["email"]);
$password = $_POST["password"];
// Validate fields
if (empty($email) || empty($password)) {
    echo "<script>alert('All fields are required.');
    window.location.href='index.php';</script>";
    exit();
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('Invalid email format.');
    window.location.href='index.php';</script>";
    exit();
    }
    // Check if email exists
    $stmt = $conn->prepare("SELECT id, name, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
    $stmt->bind_result($id, $name, $hashed_password);
    $stmt->fetch();
    // Verify password
    if (password_verify($password, $hashed_password)) {
    $_SESSION["user_id"] = $id;
    $_SESSION["user_name"] = $name;
    echo "<script>alert('Login successful!');
    window.location.href='services.php';</script>";
    } else {
    echo "<script>alert('Incorrect password.');
    window.location.href='index.php';</script>";
    }
    } else {
    echo "<script>alert('No account found with this email.');
    window.location.href='index.php';</script>";
    }
    $stmt->close();
    }
    $conn->close();
    ?>
    