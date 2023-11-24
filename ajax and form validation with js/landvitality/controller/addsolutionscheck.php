<?php 
    require_once '../Model/solutionmodel.php';
   
    if (isset($_POST['submit'])) {
                $solid    = $_POST['solutionid'];
                $solname  = $_POST['pname'];
                $sol      = $_POST['solution'];
                $cost     = $_POST['cost'];
                
        if($solid == ""||$solname == "" ||$sol == "" ||$cost== ""){
            echo "Informations cannot be null.";
        }
    
    else    
        { 
            insertsolData($solid,$solname,$sol,$cost);
        }
        header('location: ../view/adminviewsolutions.php');    
    } 
?>