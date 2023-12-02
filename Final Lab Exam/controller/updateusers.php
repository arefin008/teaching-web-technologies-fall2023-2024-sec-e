<?php 
require_once '../Model/usermodel.php';
   
if (isset($_POST['submit'])) {
    $name      = $_POST['name'];
    $username = $_POST['username'];
    $contatc = $_POST['contatc'];
                
    if ($name == "" || $username == "" || $contatc == "") {
        echo "Informations cannot be null.";
    } else { 
        updateUserInfo($name, $username, $contatc);
    }
    header('Location: ../view/viewusers.php');    
} 
?>