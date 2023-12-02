<?php
require_once 'dbcon.php';

//insertion database
function insertUserData($name,$username,$contact,$pass) {
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $query  = "INSERT INTO users (uname,username,cntc,pass)
    VALUES ('$name', '$username', '$contact', '$pass')";

    $data = mysqli_query($conn, $query);

    if ($data) {
        header('../view/login.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}

//login function
function login($username, $pass)
{
    $conn = getConnection();
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM users WHERE username='$username' AND pass='$pass'";
    
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

    $query = "SELECT * FROM users"; 
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


//geting all user info with userid as primary key
function getAllUsersinfo($userid) 
{
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $User_Id = mysqli_real_escape_string($conn, $userid);

    $query = "SELECT * FROM users WHERE id = '$User_Id'";
    $data = mysqli_query($conn, $query);

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

    return $user;
}


//updateing user values 
function updateUserInfo($name, $username, $contatc) {
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $query = "UPDATE users SET uname='$name', username='$username', cntc='$contatc'";

    $data = mysqli_query($conn, $query);

    if ($data) {
        //echo "<h3><i>Data updated successfully!</i></h3>";
        header('Location: ../view/viewusers.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}



//deletion of users
function deleteUser($userid) {
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    $User_Id = mysqli_real_escape_string($conn, $userid);

    $query = "DELETE FROM users WHERE id = '$User_Id'";
    $data = mysqli_query($conn, $query);

    if (!$data) {
        echo "Error: " . mysqli_error($conn);
        mysqli_close($conn);
        return false;
    }

    mysqli_close($conn);
    header('Location: ../view/viewusers.php');
    return true;

    
}
?>
