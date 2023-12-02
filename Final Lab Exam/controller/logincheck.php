<?php
require_once '../Model/usermodel.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $pass = $_POST['password'];

    $user = login($username, $pass);

        if ($user) {
            if ($username == $user[0]['username'] && $pass == $user[0]['pass']) {
                header('Location: ../view/viewusers.php');
            } else {
                echo "Invalid credentials. Please try again.";
            }
        } else {
            echo "Not Found.Sign up if youre new.";
        }
    }
?>

