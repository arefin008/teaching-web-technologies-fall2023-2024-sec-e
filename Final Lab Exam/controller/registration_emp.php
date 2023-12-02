<?php 
    require_once '../Model/usermodel.php';
   
    if (isset($_POST['submit'])) {
                $name      = $_POST['name'];
                $username = $_POST['username'];
                $contact = $_POST['contact'];
                $pass        = $_POST['password'];
                
            insertUserData($name,$username,$contact,$pass);
            header('location: ../view/login.php');
        }
?>