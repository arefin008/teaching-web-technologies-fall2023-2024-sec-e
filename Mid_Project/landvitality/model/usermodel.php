<?php
require_once 'dbcon.php';

//insertion database
function insertUserData($userid,$fstusername,$lstusername,$pass,$phone,$mail,$dob,$gend,$usertype) {
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $query  = "INSERT INTO users (userid,fname,lname,pass,phone,email,dob,gender,usertyp)
    VALUES ('$userid', '$fstusername', '$lstusername', '$pass', '$phone', '$mail', '$dob', '$gend', '$usertype')";

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
function login($userid, $pass)
{
    $conn = getConnection();
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM users WHERE userid='$userid' AND pass='$pass'";
    
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
    $data  = mysqli_query($conn, $query); // all returned rows are stored in data variable here
    $tot   = mysqli_num_rows($data); // it will return the number of rows present in data

    if (!$data) {
        echo "Error: " . mysqli_error($conn);
        mysqli_close($conn);
        return false;
    }

    $user = array(); // Initializing an empty array to store all rows
    while ($row = mysqli_fetch_assoc($data)) // Fetching all rows and storing them in the result array
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

    $query = "SELECT * FROM users WHERE userid = '$User_Id'";
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
function updateUserInfo($userid, $fstusername, $lstusername, $phone, $mail, $dob, $gend) {
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $query = "UPDATE users SET fname='$fstusername', lname='$lstusername', phone='$phone', email='$mail', dob='$dob', gender='$gend' WHERE userid='$userid'";

    $data = mysqli_query($conn, $query);

    if ($data) {
        //echo "<h3><i>Data updated successfully!</i></h3>";
        header('Location: ../view/allusers.php');
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

    $query = "DELETE FROM users WHERE userid = '$User_Id'";
    $data = mysqli_query($conn, $query);

    if (!$data) {
        echo "Error: " . mysqli_error($conn);
        mysqli_close($conn);
        return false;
    }

    mysqli_close($conn);
    header('Location: ../view/allusers.php');
    return true;

    
}


//profile picture update (user)
function updateuserProfilePicture($userid, $folder) {
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $query = "UPDATE users SET pp='$folder' WHERE userid='$userid'";

    $data = mysqli_query($conn, $query);

    if ($data) {
        //echo "<h3><i>Profile picture updated successfully!</i></h3>";
        header('Location: ../view/userProfile.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);


}
//profile picture update (admin)
function updatadminProfilePicture($userid, $folder) {
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $query = "UPDATE users SET pp='$folder' WHERE userid='$userid'";

    $data = mysqli_query($conn, $query);

    if ($data) {
        //echo "<h3><i>Profile picture updated successfully!</i></h3>";
        header('location: ../view/adminProfile.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}




?>
