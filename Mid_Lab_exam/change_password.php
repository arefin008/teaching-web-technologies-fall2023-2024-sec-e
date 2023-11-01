<?php
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $new_password = $_POST['new_password'];
        
    }
}
else {
    header("Location: login.html"); 
    exit;
}
?>
