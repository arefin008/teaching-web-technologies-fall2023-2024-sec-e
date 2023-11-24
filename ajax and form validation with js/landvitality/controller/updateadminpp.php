<?php
session_start();
require_once('../model/usermodel.php');

if (isset($_SESSION['userid'])) {
    $userid = $_SESSION['userid'];

        if (isset($_FILES["pp"])) {
            $filename = $_FILES["pp"]["name"];
            $tempname = $_FILES["pp"]["tmp_name"];
            $folder = "C:/xampp/htdocs/landvitality/images/admin/". $filename;

            move_uploaded_file($tempname, $folder);

            updatadminProfilePicture($userid, $folder);
        } else {
            echo "No file uploaded!";
        }    
    }
    else {
        echo "User not authenticated!";
    }
?>
