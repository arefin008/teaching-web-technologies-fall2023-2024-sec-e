<?php
  $con = getConnection();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $role = $_POST["role"];
    
    $user_data = $username . "|" . $password . "|" . $role . "\n";
    
    file_put_contents("users.txt", $user_data, FILE_APPEND);
    
    header("Location: login.html");
}
?>