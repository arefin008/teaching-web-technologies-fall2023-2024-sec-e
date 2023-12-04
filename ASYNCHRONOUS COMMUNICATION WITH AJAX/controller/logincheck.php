<?php
require_once '../Model/personmodel.php';

if (isset($_POST['submit'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $user = login($email, $password);

        if ($user) {
            if ($email == $user[0]['email'] && $password == $user[0]['pass']) {
                header('Location: ../view/Home.php');
            } else {
                echo "Invalid credentials. Please try again.";
            }
        } else {
            echo '<script>alert ("Not Found! REGISTER if youre NEW.");</script>';
            header('Location: ../view/register.php');
        }
    }
?>

