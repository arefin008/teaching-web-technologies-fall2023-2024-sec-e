<?php
session_start();
require_once('../model/usermodel.php');

if (isset($_SESSION['userid'])) {
    $userid = $_SESSION['userid'];

    if (isset($_FILES["pp"])) {
        $filename = $_FILES["pp"]["name"];
        $tempname = $_FILES["pp"]["tmp_name"];
        $folder = "../images/user/" . $filename;

        move_uploaded_file($tempname, $folder);

        updateuserProfilePicture($userid, $folder);
    } else {
        echo "No file uploaded!";
    }
} else {
    echo "User not authenticated!";
}
?>
