<?php 
require_once '../Model/consultantmodel.php';
   
if (isset($_POST['submit'])) {
    $userid      = $_POST['id'];
    $name        = $_POST['name'];
    $phone       = $_POST['phone'];
    $mail        = $_POST['email'];
    $speciality  =$_POST['speciality'];
    $exp         =$_POST['exp'];
    $gend        = $_POST['gender'];
                
    if($userid == ""||$name == "" ||$phone == "" ||$mail== "" ||$speciality== "" ||$exp== "" ||$gend== ""){
        echo "Informations cannot be null.";
    }

    else    
    { 
        updateconsultantInfo($userid,$name,$phone,$mail,$speciality,$exp,$gend);
    }
    header('location: ../view/adminviewconsultants.php');    
}  
?>