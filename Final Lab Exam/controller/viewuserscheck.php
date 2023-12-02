<?php
require_once('../model/usermodel.php');

$allUserData = getAllUsers();

$userData = $allUserData['user'];
$totalRows = $allUserData['total'];

?>

