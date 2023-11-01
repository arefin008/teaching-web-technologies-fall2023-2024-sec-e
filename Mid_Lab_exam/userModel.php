<?php

require_once('db.php');

function signup($user) {
    $con = getConnection();
    
    $username = mysqli_real_escape_string($con, $user['username']);
    $password = mysqli_real_escape_string($con, $user['password']);
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";
    
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function adduser($user) {
    $con = getConnection();
    
    $hashedPassword = password_hash($user['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (username, password) VALUES ('{$user['username']}', '$hashedPassword')";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function deleteUser($userId) {
    $con = getConnection();

    $sql = "DELETE FROM users WHERE id = $userId";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function updateUser($userId, $newData) {
    $con = getConnection();
    
    $hashedPassword = password_hash($newData['password'], PASSWORD_BCRYPT);

    $sql = "UPDATE users SET username = '{$newData['username']}', password = '$hashedPassword' WHERE id = $userId";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

?>
