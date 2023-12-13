<?php
require_once('../model/solutionmodel.php');

$allUserData = getAllUsers();

$userData = $allUserData['user'];
$totalRows = $allUserData['total'];

//$userData contains the data for all users, and $totalRows contains the total number of rows
//var_dump($userData);
//var_dump($totalRows);
?>