<?php
require_once('../model/solutionmodel.php');

if (isset($_GET['userid'])) {   
    $solid = $_GET['userid'];
    deletesolution($solid);
} else {
    echo "Operation Failed!";
}
?>
