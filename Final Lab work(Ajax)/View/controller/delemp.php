<?php
require_once('../model/empmodel.php');

if (isset($_GET['empid'])) {   
    $id = $_GET['empid'];
    delemp($id);
    } else {
        echo "Operation Failed!";
    }
?>