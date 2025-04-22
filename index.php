<?php
session_start();
if (isset($_SESSION["user_id"])){
    header("location: services.php");
}
?>
<?php include 'header.html'?>
<?php include 'index.html'?>