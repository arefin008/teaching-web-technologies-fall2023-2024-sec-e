<?php
require_once('../model/usermodel.php');

$allUserData = getAllUsers();
echo json_encode($allUserData);

?>