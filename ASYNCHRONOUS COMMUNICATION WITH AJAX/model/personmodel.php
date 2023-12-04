<?php
require_once 'dbcon.php';

//insertion database
function insertPersons($name,$phone,$email,$password) {
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $query  = "INSERT INTO persons (name,phone,email,pass)
    VALUES ('$name', '$phone', '$email', '$password')";

    $data = mysqli_query($conn, $query);

    if ($data) {
        //echo "<h3><i>Data inserted successfully!</i></h3>";
        header('../view/login.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}

//login function
function login($email, $password)
{
    $conn = getConnection();
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM persons WHERE email='$email' AND pass='$password'";
    
    $result = mysqli_query($conn, $query);

    if ($result) {
        $user = array();
        
        while ($row = mysqli_fetch_assoc($result)) {
            $user[] = $row;
        }

        return $user;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);

    return false;
}


//all user function
function getAllUsers() 
{
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM persons"; 
    $data  = mysqli_query($conn, $query); 
    $tot   = mysqli_num_rows($data);

    if (!$data) {
        echo "Error: " . mysqli_error($conn);
        mysqli_close($conn);
        return false;
    }

    $user = array(); 
    while ($row = mysqli_fetch_assoc($data)) 
    {
        $user[] = $row;
    }
    mysqli_close($conn);

    return array('user' => $user, 'total' => $tot);
}
?>
