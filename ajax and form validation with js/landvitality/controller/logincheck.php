<?php
session_start();
require_once '../Model/usermodel.php';

if (isset($_POST['submit'])) {
    $userid = $_POST['id'];
    $pass = $_POST['password'];
    $usertype = $_POST['usertype'];

    if ($userid == "" || $pass == "" || $usertype == "") {
        echo "Informations cannot be null.";
    } else {
        $user = login($userid, $pass);

        if ($user) {
            if ($userid == $user[0]['userid'] && $pass == $user[0]['pass']) {
                
                $_SESSION['userid'] = $userid; // pushing the userid in the session to use it for further operation.

                if ($usertype == 'admin') {
                    $_SESSION['flag'] = 'true';
                    header('location: ../view/adminMenu.php');
                } elseif ($usertype == 'user') {
                    $_SESSION['flag'] = 'true';
                    header('location: ../view/userMenu.php');
                } else {
                    echo "Invalid user type.";
                }
            } else {
                echo "Invalid credentials. Please try again.";
            }
        } else {
            echo "Error in login function.";
        }
    }
}
?>

