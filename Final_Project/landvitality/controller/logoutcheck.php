<?php 
session_start();
unset($_SESSION['flag']);
unset($_SESSION['userid']);

echo '<script>alert("You are being logged out.");</script>';
echo '<script>window.location.href = "../view/login.php";</script>';
?>
