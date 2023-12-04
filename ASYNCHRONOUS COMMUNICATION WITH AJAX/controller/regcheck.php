<?php 
    require_once '../Model/personmodel.php';
   
    if (isset($_POST['submit'])) {
                $name       = $_POST['name'];
                $phone      = $_POST['phone'];
                $email      = $_POST['email'];
                $password   = $_POST['password'];
                
            insertPersons($name,$phone,$email,$password);
            header('location: ../view/login.php');
        }
?>