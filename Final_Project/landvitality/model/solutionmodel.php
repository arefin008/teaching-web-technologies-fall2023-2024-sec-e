<?php
require_once 'dbcon.php';


//inserting solutions in db
function insertsolData($solid, $solname, $sol, $cost) {
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $query = "INSERT INTO solutions (solid, probname, solution, cost)
              VALUES ('$solid', '$solname', '$sol', '$cost')";

    $data = mysqli_query($conn, $query);

    if ($data) {
        //echo "<h3><i>Data inserted successfully!</i></h3>";
        header('Location: ../view/adminviewsolutions.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}

//getting all solutions
function getAllUsers() 
{
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM solutions"; 
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

//getting all solution info with solid
function getAllsolutioninfo($solid) 
{
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $solid = mysqli_real_escape_string($conn, $solid);

    $query = "SELECT * FROM solutions WHERE solid = '$solid'";
    
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


function updatesolutionInfo($solid,$solname,$sol,$cost) {
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $query = "UPDATE solutions 
              SET probname='$solname', solution='$sol', cost='$cost' 
              WHERE solid='$solid'";

    $data = mysqli_query($conn, $query);

    if ($data) {
        //echo "<h3><i>Data updated successfully!</i></h3>";
        header('Location: ../view/adminviewconsultants.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}


function deletesolution($solid) {
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    
    $solid = mysqli_real_escape_string($conn, $solid);

    $query = "DELETE FROM solutions WHERE solid = '$solid'";
    $data = mysqli_query($conn, $query);

    if (!$data) {
        echo "Error: " . mysqli_error($conn);
        mysqli_close($conn);
        return false;
    }

    mysqli_close($conn);
    header('Location: ../view/adminviewsolutions.php');
    return true;
}



?>