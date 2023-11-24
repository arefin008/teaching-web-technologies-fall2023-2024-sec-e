<?php
require_once('../model/usermodel.php');

if (!isset($_SESSION['userid'])) {
    die("User ID not set in the session.");
}
$userid = $_SESSION['userid'];

$users = getAllUsersinfo($userid);

// Now $users contains the data for the logged-in user
//var_dump($users);
?>
