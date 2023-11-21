<?php 
    require_once '../model/empmodel.php';
   
    if (isset($_POST['submit'])) {
                $username = $_POST['name'];
                $comp     = $_POST['cname'];
                $password = $_POST['pass'];
                $contact  = $_POST['cont'];

                
        if($username == ""||$comp == "" ||$password == "" ||$contact == "" ){
            echo "Informations cannot be null.";
        }
    
    else    
        { 
            addeployer($username,$comp,$password,$contact);
            //header('location: ../view/login.php');
        }
            
    } 
?>