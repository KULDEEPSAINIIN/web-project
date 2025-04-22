<?php
$host = "localhost";
$user = "root"; // MySQL username
$password = ""; // MySQL password
$dbname = "mindcare1"; // data base name

$conn = new mysqli($host, $user, $password, $dbname);
// check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$name= trim($_POST['name']);
$email= trim($_POST['email']);
$message= trim($_POST['message']);

if (!preg_match("/^[a-zA-Z ]*$/", $name)){
    echo "<script>alert('Only letters and spaces are allowed in Name.');
window.location.href= 'home.php';</script>";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format.");
}

//insert into dataabase
$sql= "INSERT INTO contant_messages (name, email, message) VALUES (?, ?, ?)" ;
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $message);

//Execute and alert

if ($stmt->execute()) {
    echo "<script>alert('Message sent successfully!');
    window.location.href= 'home.php';</script>";
}else {
    echo "<script>alert('Error: " . $stml->error . "');
    window.location.href= 'home.php';</script>";
}

$stmt->close();
$conn->close();
?>