<?php
require_once('../controller/sessioncheck.php');
require_once('../model/consultantmodel.php');

if (isset($_GET['userid'])) {   
    $userid = $_GET['userid'];
    $users = getAllconsultantinfo($userid);  
        //var_dump($users);
    } else {
        echo "Operation Failed!";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Update User Info</title>
    </head>
    <body>
        <center>
            <fieldset>
                <legend>
                    Update User Info
                </legend>
                    <a href="../controller/logoutcheck.php"><fieldset>Logout</fieldset></a>
                    <hr>
                <form action="../controller/updateconsultant.php" method="post" enctype="">
                <table>
                    <tr>
                        <td colspan="2"><label><i>Please note that no change in your ID will take effect!</i></label></td>
                    </tr>
                    <tr>
                        <td><label>ID :</label></td>
                        <td><input type="text" name="id" value="<?php echo $users[0]['userid']; ?>"></td>
                    </tr>
                    <tr>
                        <td><label> Name :</label></td>   
                        <td><input type="text" name="name" value="<?php echo $users[0]['cname']; ?>"></td>
                    </tr>
                    <tr>
                        <td><label>Email :</label></td>
                        <td><input type="text" name="email" value="<?php echo $users[0]['email']; ?>"></td>
                    </tr>
                    <tr>
                        <td><label>Phone Number :</label></td>
                        <td><input type="text" name="phone" value="<?php echo $users[0]['phone']; ?>"></td>
                    </tr>
                    <tr>
                        <td><label>Speciality :</label></td>
                        <td><input type="text" name="speciality" value="<?php echo $users[0]['specia']; ?>"></td>
                    </tr>
                    <tr>
                        <td><label>Experience :</label></td>
                        <td><input type="text" name="exp" value="<?php echo $users[0]['exper']; ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="gender">Gender:</label></td>
                        <td>
                            <select id="gender" name="gender">
                                <option value="none" <?php echo ($users[0]['gender'] == 'none') ? 'selected' : ''; ?>>Not Selected</option>
                                <option value="male" <?php echo ($users[0]['gender'] == 'male') ? 'selected' : ''; ?>>Male</option>
                                <option value="female" <?php echo ($users[0]['gender'] == 'female') ? 'selected' : ''; ?>>Female</option>
                            </select>
                        </td>
                    </tr>
                </table><hr>
                <input type="submit" name="submit" value="Update">
                </form>
            </fieldset>
        </center>
    </body>
</html>
