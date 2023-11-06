<?php
$server = "localhost";
$username= "root";
$password= "";
$dbname= "dbsignup";

$conn = mysqli_connect($server,$username,$password,$dbname);

if(!$conn)
{
    echo "not connected";
}
/*else{
    echo "connected";
}*/


   $userId=$_POST['userId'];
   $username = $_POST['username'];
    $mail = $_POST['email'];
    $password=$_POST['password'];
    
    
    $sql="INSERT INTO `test`(`userId`, `username`, `email`, `password`) VALUES ('$userId','$username','$mail','$password')";
    
    
    $result= mysqli_query($conn , $sql);
    
    if($result)
    {
        echo "data submitted";
    
    }
    else{
        echo "query failed!";
    }
?>    

