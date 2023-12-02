<?php
require_once('../model/usermodel.php');

if (isset($_GET['userid'])) {   
    $userid = $_GET['userid'];
    $users = getAllUsersinfo($userid);  
        //var_dump($users);
    } else {
        echo "Operation Failed!";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Update User Info</title>
        <script type="text/javascript" src="../js/updateconfirmation.js"></script>
    </head>
    <body>
        <center>
            <fieldset>
                <legend>
                    Update User Info
                </legend>
                <form action="../controller/updateusers.php" method="post" onsubmit="return confirmUpdate();" enctype="">
                <table>
                    <tr>
                        <td><label>ID :</label></td>
                        <td><input type="text" name="name" value="<?php echo $users[0]['uname']; ?>"></td>
                    </tr>
                    <tr>
                        <td><label>First Name :</label></td>   
                        <td><input type="text" name="username" value="<?php echo $users[0]['username']; ?>"></td>
                    </tr>
                    <tr>
                        <td><label>Last Name :</label></td>
                        <td><input type="text" name="contatc" value="<?php echo $users[0]['cntc']; ?>"></td>
                    </tr>
                </table><hr>
                <input type="submit" name="submit" value="Update">
                </form>
            </fieldset>
        </center>
    </body>
</html>
