<?php
require_once 'dbcon.php';

function addeployer($username,$comp,$password,$contact) {
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $query  = "INSERT INTO employer (uname,comname,cntc,pass)
    VALUES ('$username', '$comp', '$contact', '$password')";

    $data = mysqli_query($conn, $query);

    if ($data) {
        //echo "<h3><i>Data inserted successfully!</i></h3>";
        header('Location: viewemployers.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}

function getAllepmloyers() 
{
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM employer"; 
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

function delemp($id) {
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    $Id = mysqli_real_escape_string($conn, $id);

    $query = "DELETE FROM employer WHERE id = '$Id'";
    $data = mysqli_query($conn, $query);

    if (!$data) {
        echo "Error: " . mysqli_error($conn);
        mysqli_close($conn);
        return false;
    }

    mysqli_close($conn);
    header('Location: ../view/viewemloyers.php');
    return true;

    
}

function getAllemp($id) 
{
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $Id = mysqli_real_escape_string($conn, $id);

    $query = "SELECT * FROM employer WHERE id = '$Id'";
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

function updateployer($id,$username,$comp,$contact) {
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $query = "UPDATE employer SET uname='$username', comname='$comp', cntc='$contact' WHERE id='$id'";

    $data = mysqli_query($conn, $query);

    if ($data) {
        //echo "<h3><i>Data updated successfully!</i></h3>";
        header('Location: ../view/viewemloyers.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}

function getempinfo($username) {
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $NAME = mysqli_real_escape_string($conn, $username);

    $query = "SELECT * FROM employer WHERE uname = '$NAME'";
    $data = mysqli_query($conn, $query);

    if (!$data) {
        echo "Error: " . mysqli_error($conn);
        mysqli_close($conn);
        return false;
    }

    $user = array();
    while ($row = mysqli_fetch_assoc($data)) {
        // Update array keys to match your column names
        $user[] = [
            'uname' => $row['uname'],
            'comname' => $row['comname'],
            'cntc' => $row['cntc']
        ];
    }
    mysqli_close($conn);

    return $user;
}

?>