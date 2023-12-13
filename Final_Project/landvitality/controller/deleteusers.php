<?php
require_once('../model/usermodel.php');

if (isset($_GET['userid'])) {   
    $userid = $_GET['userid'];
    deleteUser($userid);
    } else {
        echo "Operation Failed!";
    }
?>