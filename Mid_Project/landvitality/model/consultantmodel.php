<?php
require_once 'dbcon.php';

//add consultants
function insertConsulData($userid, $name, $phone, $mail, $speciality, $exp, $gend) {
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $query  = "INSERT INTO consultants (userid,cname, phone, email, specia, exper, gender)
               VALUES ('$userid', '$name', '$phone', '$mail', '$speciality', '$exp', '$gend')";

    $data = mysqli_query($conn, $query);

    if ($data) {
        //echo "<h3><i>Data inserted successfully!</i></h3>";
        header('Location: ../view/adminviewconsultants.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}


//getting all consultants
function getAllUsers() 
{
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM consultants"; 
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

//getting all consultants by id
function getAllconsultantinfo($userid) 
{
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $User_Id = mysqli_real_escape_string($conn, $userid);

    $query = "SELECT * FROM consultants WHERE userid = '$User_Id'";
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

//updating consultant infos
function updateconsultantInfo($userid, $name, $phone, $mail, $speciality, $exp, $gend) {
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $query = "UPDATE consultants 
              SET cname='$name', phone='$phone', email='$mail', specia='$speciality', exper='$exp', gender='$gend' 
              WHERE userid='$userid'";

    $data = mysqli_query($conn, $query);

    if ($data) {
        //echo "<h3><i>Data updated successfully!</i></h3>";
        header('Location: ../view/adminviewconsultants.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}


function deleteconsultant($userid) {
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    $User_Id = mysqli_real_escape_string($conn, $userid);

    $query = "DELETE FROM consultants WHERE userid = '$User_Id'";
    $data = mysqli_query($conn, $query);

    if (!$data) {
        echo "Error: " . mysqli_error($conn);
        mysqli_close($conn);
        return false;
    }

    mysqli_close($conn);
    header('Location: ../view/adminviewconsultants.php');
    return true;

    
}



?>