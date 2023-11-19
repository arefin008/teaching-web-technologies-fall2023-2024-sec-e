<?php 
require_once '../Model/usermodel.php';
   
if (isset($_POST['submit'])) {
    $userid      = $_POST['id'];
    $fstusername = $_POST['fusername'];
    $lstusername = $_POST['lusername'];
    $phone       = $_POST['phone'];
    $mail        = $_POST['email'];
    $dob         = $_POST['date_of_birth'];
    $gend        = $_POST['gender'];
                
    if ($userid == "" || $fstusername == "" || $lstusername == "" || $phone == "" || $mail == "" || $dob == "" || $gend == "") {
        echo "Informations cannot be null.";
    } else { 
        updateUserInfo($userid, $fstusername, $lstusername, $phone, $mail, $dob, $gend);
    }
    header('Location: ../view/userProfile.php');    
} 
?>