<?php
require_once('../model/personmodel.php');

$allUserData = getAllUsers();

echo json_encode($allUserData);

?>

