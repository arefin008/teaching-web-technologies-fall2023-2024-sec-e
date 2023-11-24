<?php 
    session_start();
    unset($_SESSION['flag']);
    unset($_SESSION['userid']);
    setcookie('flag', 'true', time()-10, '/');
    header('location: ../view/login.php');
?>