<?php
session_start();
if (!isset($_SESSION["user_id"])) {
echo "<script>alert('Please login first!');
window.location.href='index.php';</script>";
}
?>
<?php
session_start();
session_destroy();
echo "<script>alert('You have been logged out.');
window.location.href='index.php';</script>";
?>
