<?php


    require_once('db.php');
    function login($username, $password){
        $con = getConnection();
        $sql = "select * from midlabexam where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if(count($user) > 0){
            return true;
        }else{
            return false;
        }
    }


    function signup($user){

    }


    function getAllUser(){
        $con = getConnection();
        $sql = "select * from midlabexam";
        $result = mysqli_query($con, $sql);
        $users = [];
        
        while($user = mysqli_fetch_assoc($result)){
            array_push($users, $user);
        }
        
        return $users;
    }

    function adduser(){

        function adduser($user) {
            $con = getConnection();
            $username = $user['username'];
            $password = $user['password'];
            $id = $user['id'];
            $usertype = $user['usertype'];
                        
            $sql = "INSERT INTO midlabexam (username, password) VALUES ('$username', '$password')";
   
   
            if (mysqli_query($con, $sql)) {
                return true;
            } else {
                return false;
            }
        }
        
    }


    function deleteUser(){
        function deleteUser($userId) {
            $con = getConnection();
            
            
            $sql = "DELETE FROM midlabexam WHERE id = $userId";
 
 
            if (mysqli_query($con, $sql)) {
                return true;
            } else {
                return false;
            }
        }
        

    }

    function updateUser(){

        function updateUser($userId, $newUserData) {
            $con = getConnection();
            $username = $newUserData['username'];
            $password = $newUserData['password'];
           
            $sql = "UPDATE midlabexam SET username = '$username', password = '$password' WHERE id = $userId";
            
            if (mysqli_query($con, $sql)) {
                return true;
            } else {
                return false;
            }
        }
               
    }


?>