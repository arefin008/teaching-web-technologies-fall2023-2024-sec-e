<?php 
    session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $id = $_REQUEST['id'];
    $usertype = $_REQUEST['usertype'];

    if($username == "" || $password == "" || $id == "" || $usertype == "" ){
        echo "null username or password or email!";
    }else{
        $user = ['username'=> $username, 'password'=> $password, 'id'=>$id,'usertype'=>$usertype];
        $_SESSION['user'] = $user;
        header('location: ../view/login.html');
    }
?>