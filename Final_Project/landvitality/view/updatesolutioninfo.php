<?php
require_once('../controller/sessioncheck.php');
require_once('../model/solutionmodel.php');

if (isset($_GET['userid'])) {   
    $userid = $_GET['userid'];
    $users = getAllsolutioninfo($userid);  
        //var_dump($users);
    } else {
        echo "Operation Failed!";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Update Solution Info</title>
    </head>
    <body>
        <center>
            <fieldset>
                <legend>
                    Update Solution Info
                </legend>
                    <a href="../controller/logoutcheck.php"><fieldset>Logout</fieldset></a>
                    <hr>
                <form action="../controller/updatesolution.php" method="post" enctype="">
                <table>
                    <tr>
                        <td colspan="2"><label><i>Please note that no change in ID will take effect!</i></label></td>
                    </tr>
                    <tr>
                        <td><label>SOLUTION ID :</label></td>
                        <td><input type="text" name="solutionid" value="<?php echo $users[0]['solid']; ?>"></td>
                    </tr>
                    <tr>
                        <td><label>PROBLEM NAME:</label></td>   
                        <td><input type="text" name="pname" value="<?php echo $users[0]['probname']; ?>"></td>
                    </tr>
                    <tr>
                        <td><label>SOLUTION :</label></td>
                        <td><input type="text" name="solution" value="<?php echo $users[0]['solution']; ?>"></td>
                    </tr>
                    <tr>
                        <td><label>COST :</label></td>
                        <td><input type="text" name="cost" value="<?php echo $users[0]['cost']; ?>"></td>
                    </tr>
                </table><hr>
                <input type="submit" name="submit" value="Update">
                </form>
            </fieldset>
        </center>
    </body>
</html>
