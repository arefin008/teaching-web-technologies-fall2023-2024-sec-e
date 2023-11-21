<?php 
    require_once '../model/empmodel.php';
   
    if (isset($_POST['submit'])) {
                $id       = $_POST['empid'];
                $username = $_POST['name'];
                $comp     = $_POST['cname'];
                $contact  = $_POST['cont'];

                
        if($username == ""||$comp == "" ||$contact == "" ){
            echo "Informations cannot be null.";
        }
    
    else    
        { 
            updateployer($id,$username,$comp,$contact);
        }
            
    } 
?>