<?php
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    
    
    if ($_SESSION['role'] === 'admin') {
    } else {
        echo "You don't have permission to view users.";
    }
} else {
    header("Location: login.html"); 
    exit;
}
?>
