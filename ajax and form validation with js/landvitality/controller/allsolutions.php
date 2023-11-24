<?php
require_once('../model/solutionmodel.php');

$allUserData = getAllUsers();

// Access the user data and total
$userData = $allUserData['user'];
$totalRows = $allUserData['total'];

// Now $userData contains the data for all users, and $totalRows contains the total number of rows
//var_dump($userData);
//var_dump($totalRows);
?>