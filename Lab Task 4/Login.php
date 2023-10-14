<?php
   
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];

        $usernamePattern = "/^[A-Za-z0-9._-]{2,}$/";
        $passwordPattern = "/^(?=.*[@#$%]).{8,}$/";

        if (!preg_match($usernamePattern, $username)) {
            echo "<p>Username must contain at least two alphanumeric characters, period, dash, or underscore.</p>";
        }

        if (!preg_match($passwordPattern, $password)) {
            echo "<p>Password must not be less than eight characters and contain at least one of the special characters (@, #, $, %).</p>";
        }

        

        
        
    
?>