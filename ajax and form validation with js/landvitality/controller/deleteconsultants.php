<?php
require_once('../model/consultantmodel.php');

if (isset($_GET['userid'])) {   
    $userid = $_GET['userid'];
    deleteconsultant($userid);
    } else {
        echo "Operation Failed!";
    }
?>