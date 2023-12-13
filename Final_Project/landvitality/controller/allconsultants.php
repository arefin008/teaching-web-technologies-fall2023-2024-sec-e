<?php

require_once('../model/consultantmodel.php');

$allUserData = getAllUsers();
echo json_encode($allUserData);

//$userData = $allUserData['user'];
//$totalRows = $allUserData['total'];

//$userData contains the data for all users, and $totalRows contains the total number of rows
//var_dump($userData);
//var_dump($totalRows);
?>