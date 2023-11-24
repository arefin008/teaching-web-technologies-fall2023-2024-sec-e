<?php 
    require_once '../Model/usermodel.php';
   
    if (isset($_POST['submit'])) {
                $userid      = $_POST['id'];
                $fstusername = $_POST['fusername'];
                $lstusername = $_POST['lusername'];
                $pass        = $_POST['password'];
                $phone       = $_POST['phone'];
                $mail        = $_POST['email'];
                $dob         = $_POST['date_of_birth'];
                $gend        = $_POST['gender'];
                $usertype    = $_POST['usertype'];
                
        if($userid == ""||$fstusername == "" ||$lstusername == "" || $pass == "" || $phone == "" ||$mail== "" ||$dob== "" ||$gend== "" ||$usertype== ""){
            echo "Informations cannot be null.";
        }
    
    else    
        { 
            insertUserData($userid,$fstusername,$lstusername,$pass,$phone,$mail,$dob,$gend,$usertype);
        }
        header('location: ../view/login.php');    
    } 
?>