<?php
require_once('../model/empmodel.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])) {
    $employeeName = $_POST['name'];
    $userData = getempinfo($employeeName);

    header('Content-Type: application/json');
    echo json_encode($userData);
    header('Location: ../view/searchemp.php');
}
?>
