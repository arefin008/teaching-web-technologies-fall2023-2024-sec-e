<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $user_data = file("users.txt", FILE_IGNORE_NEW_LINES);
    
    foreach ($user_data as $line) {
        list($stored_username, $hashed_password, $role) = explode("|", $line);
        
        if ($username === $stored_username && password_verify($password, $hashed_password)) {
            $_SESSION["username"] = $username;
            $_SESSION["role"] = $role;
            
            if ($role === "admin") {
                header("Location: admin_home.php");
            } elseif ($role === "user") {
                header("Location: user_home.php");
            }
        }
    }
    
    echo "Invalid username or password";
}
?>
