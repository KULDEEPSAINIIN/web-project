<?php
$servername = "localhost";
$username = "root"; // MySQL username
$password = ""; // MySQL password
$dbname = "mindcare1"; // data base name
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    // Validate input fields
    if (empty($name) || empty($email) || empty($password) ||
    empty($confirm_password)) {
    echo "<script>alert('All fields are required.');
    window.location.href='index.php';</script>";
    exit();
    }

    if (!preg_match("/^[a-zA-Z ]*$/", $name)){
        echo "<script>alert('Only letters and spaces are allowed in Name.');
    window.location.href= 'index.php';</script>";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('Invalid email format.');
    window.location.href='index.php';</script>";
    exit();
    }
    if ($password !== $confirm_password) {
    echo "<script>alert('Passwords do not match.');
    window.location.href='index.php';</script>";
    exit();
    }
    // Check if email already exists
    $check_email = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $check_email->bind_param("s", $email);
    $check_email->execute();
    $check_email->store_result();
    if ($check_email->num_rows > 0) {
    echo "<script>alert('This email is already registered. Try logging in.');
    window.location.href='index.php';</script>";
    exit();
    }
    $check_email->close();
    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    // Insert data into database
    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?,
    ?)");
    $stmt->bind_param("sss", $name, $email, $hashed_password);
    if ($stmt->execute()) {
    echo "<script>alert('Registration successful!'); 
    window.location.href='index.php';</script>";
} else {
echo "<script>alert('Error: Unable to register.');
window.location.href='index.php';</script>";
}
$stmt->close();
}
$conn->close();
?>
